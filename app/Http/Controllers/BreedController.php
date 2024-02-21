<?php

namespace App\Http\Controllers;

use App\Http\Services\BreedValidation;
use App\Models\Breed;
use Illuminate\Http\Request;

class BreedController extends Controller
{
    public function createBreed(Request $request)
    {
        BreedValidation::validateBreedRequest($request);

        $breed = Breed::create([
            'name' => $request->name,
            'specie_id' => $request->specie_id
        ]);

        $response = ['response' => 'Breed created successfully!', 'breed' => $breed];

        return response()->json($response, 201);
    }

    public function getAllBreeds()
    {
        $breeds = Breed::all();

        $response = ['response' => $breeds];

        return response()->json($response, 201);
    }

    public function deleteBreed(Request $request)
    {
        $breed = Breed::findOrFail($request->id);
        $breed->update(['active' => false]);
        $status = 200;
        $response = ['response' => 'Breed deleted successfully!'];
        return response()->json($response, $status);
    }
}
