<?php

namespace App\Http\Controllers;

use App\Http\Services\SpecieValidation;
use App\Models\Species;
use Illuminate\Http\Request;

class SpeciesController extends Controller
{
    public function createSpecie(Request $request)
    {
        SpecieValidation::validateSpecieRequest($request);

        $specie = Species::create([
            'specie' => $request->specie,
        ]);

        return response()->json(['response' => ['message' => 'Specie created successfully!', 'specie' => $specie]], 201);
    }

    public function getAllSpecies()
    {
        $species = Species::all();
        return response()->json(['response' => $species], 201);
    }

    public function deleteSpecie(Request $request)
    {
        $specie = Species::findOrFail($request->id);
        $specie->update(['active' => false]);
        return response()->json(['response' => 'Specie deleted successfully!'], 200);
    }
}
