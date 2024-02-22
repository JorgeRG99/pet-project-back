<?php

namespace App\Http\Controllers;

use App\Http\Services\PetValidation;
use App\Models\ExternalPets;
use App\Models\Species;
use Illuminate\Http\Request;

class ExternalPetsController extends Controller
{
    public function createPet(Request $request)
    {
        PetValidation::validatePetRequest($request);
        $data = json_decode($request->getContent(), true);

        $pet = ExternalPets::create($data);

        $response = ['response' => 'Pet created successfully!', 'pet' => $pet];

        return response()->json($response, 201);
    }
    public function getAllPets()
    {
        $pets = ExternalPets::all();
        return response()->json(['response' => $pets], 201);
    }

    public function updatePet(Request $request)
    {
        $data = json_decode($request->getContent(), true);

        $pet = ExternalPets::findOrFail($request->id);
        foreach ($data as $key => $value) {
            $pet->{$key} = $value;
        }

        PetValidation::validatePetObject($pet);
        $pet->update();

        return response()->json(['response' => 'Pet updated successfully!'], 200);
    }

    public function getPet(Request $request)
    {
        return response()->json(['response' => ExternalPets::findOrFail($request->id)], 200);
    }



    public function deletePet(Request $request)
    {
        $pet = ExternalPets::findOrFail($request->id);
        $pet['active'] = false;
        PetValidation::validatePetObject($pet);
        $pet->update();
        return response()->json(['response' => 'Pet deleted successfully!'], 200);
    }


    public function getPetBySpecie(Request $request)
    {
        $species = Species::findOrFail($request->id);
        $pets = $species->pets()->get();
        return response()->json(['response' => $pets], 200);
    }
}
