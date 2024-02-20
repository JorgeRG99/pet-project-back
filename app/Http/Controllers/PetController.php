<?php

namespace App\Http\Controllers;

use App\Http\Services\PetValidation;
use App\Models\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{
    public function createPet(Request $request)
    {
        PetValidation::validatePetRequest($request);
        $data = json_decode($request->getContent());

        Pet::create([
            'name' => $request->name,
            'species' => $request->species,
            'age' => $request->age,
            'breed' => $request->breed,
            'gender' => $request->gender,
            'additional_info' => $request->additional_info,
            'date_entry' => $request->date_entry,
            'weight' => $request->weight
        ]);

        $response = ['response' => 'Pet created successfully!'];

        return response()->json($response, 201);
    }
    public function getAllPets()
    {
        $pets = Pet::all();

        $response = ['response' => $pets];

        return response()->json($response, 201);
    }

    public function updatePet(Request $request)
    {
        PetValidation::validatePetRequest($request);
        $data = json_decode($request->getContent());

        $pet = Pet::findOrFail($data->id);
        foreach ($data as $key => $value) {
            $pet->{$key} = $value;
        }
        $pet->update();
        $status = 200;
        $response = ['response' => 'Pet updated successfully!'];
        return response()->json($response, $status);
    }

    public function getPet(Request $request)
    {
        $pet = Pet::findOrFail($request->id)->get();
        $status = 200;
        $response = ['response' => $pet];
        return response()->json($response, $status);
    }

    public function deletePet(Request $request)
    {
        
        $pet = Pet::findOrFail($request->id);
        $pet->delete();
        $status = 200;
        $response = ['response' => 'Pet deleted successfully!'];
        return response()->json($response, $status);
    }
}

