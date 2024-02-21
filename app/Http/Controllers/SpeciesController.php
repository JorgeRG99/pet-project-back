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
        $data = json_decode($request->getContent());

        Species::create([
            'specie' => $request->specie,
        ]);

        $response = ['response' => 'Specie created successfully!'];

        return response()->json($response, 201);
    }

    public function getSpecies()
    {
        $species = Species::all();

        $response = ['response' => $species];

        return response()->json($response, 201);
    }
}
