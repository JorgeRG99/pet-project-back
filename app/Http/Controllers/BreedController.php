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

        return response()->json(['response' => ['message' => 'Breed created successfully!', 'result' => $breed]], 201);
    }

    public function getAllBreeds()
    {
        return response()->json(['response' => ['result' => Breed::all()]], 201);
    }

    public function deleteBreed(Request $request)
    {
        $breed = Breed::findOrFail($request->id);
        $breed->update(['active' => false]);
        return response()->json(['response' => ['message' => 'Breed deleted successfully!']], 200);
    }
}
