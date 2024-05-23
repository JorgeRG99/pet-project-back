<?php

namespace App\Http\Controllers;

use App\Http\Services\PetValidation;
use App\Models\Pet;
use App\Models\Breed;
use App\Models\Species;
use Illuminate\Http\Request;

class PetController extends Controller
{
    public function createPet(Request $request)
    {
        PetValidation::validatePetRequest($request);
        $data = json_decode($request->getContent(), true);

        $pet = Pet::create($data);

        $response = ['response' => ['message' => 'Pet created successfully!', 'result' => $pet]];

        return response()->json($response, 201);
    }
    public function getAllPets()
    {
        $pets = Pet::where('active', true)->get();

        foreach ($pets as $pet) {
            $breed = Breed::find($pet->breed_id);
            $pet['breed'] = $breed->name;
            $pet['specie'] = $breed->specie_id;
        }

        return response()->json(['response' => ['result' => $pets]], 201);
    }

    public function getDogs()
    {
        $result = [];
        $pets = Pet::all();

        foreach ($pets as $pet) {
            $breed = Breed::find($pet->breed_id);

            if ($breed->specie_id == 'dog') {
                $pet['breed'] = $breed->name;
                array_push($result, $pet);
            };
        }

        return response()->json(['response' => ['result' => $result]], 200);
    }

    public function getCats()
    {
        $result = [];
        $pets = Pet::all();

        foreach ($pets as $pet) {
            $breed = Breed::find($pet->breed_id);

            if ($breed->specie_id == 'cat') {
                $pet['breed'] = $breed->name;
                array_push($result, $pet);
            };
        }

        return response()->json(['response' => ['result' => $result]], 200);
    }

    public function updatePet(Request $request)
    {
        $data = json_decode($request->getContent(), true);

        $pet = Pet::findOrFail($request->id);
        foreach ($data as $key => $value) {
            $pet[$key] = $value;
        }
        
        PetValidation::validatePetObject($pet);
        $pet->update();

        return response()->json(['response' => ['message' => 'Pet updated successfully!', 'result' => $pet]], 200);
        
    }

    public function getPet(Request $request)
    {
        return response()->json(['response' => ['result' => Pet::findOrFail($request->id)]], 200);
    }

    public function deletePet(Request $request)
    {
        $data = json_decode($request->getContent());
        $pet = Pet::findOrFail($data->id);
        $pet['active'] = false;
        PetValidation::validatePetObject($pet);
        $pet->update();
        return response()->json(['response' => ['message' => 'Pet deleted successfully!']], 200);
    }

    public function getPetBySpecie(Request $request)
    {
        $species = Species::findOrFail($request->id);
        $pets = $species->pets()->get();
        return response()->json(['response' => ['result' => $pets]], 200);
    }
}
