<?php

namespace App\Http\Controllers;

use App\Http\Services\PetValidation;
use App\Models\Breed;
use App\Models\CareServices;
use App\Models\ExternalPets;
use App\Models\Species;
use DateTime;
use Illuminate\Http\Request;

class ExternalPetsController extends Controller
{
    public function createPet(Request $request)
    {
        PetValidation::validatePetRequest($request);
        $data = json_decode($request->getContent(), true);
        $data['owner_id'] = auth()->user()->id;

        $pet = ExternalPets::create($data);

        $response = ['response' => ['message' => 'Pet created successfully!', 'result' => $pet]];

        return response()->json($response, 201);
    }
    public function getYourPetsIncludingDeleted()
    {
        $pets = ExternalPets::where('owner_id', auth()->user()->id)
            ->get();

        foreach ($pets as $pet) {
            $breed = Breed::find($pet->breed_id);
            $pet['breed'] = $breed->name;
            $pet['specie'] = $breed->specie_id;
        }

        return response()->json(['response' => ['result' => $pets]], 200);
    }

    public function getYourPets()
    {
        $pets = ExternalPets::where('active', true)
            ->where('owner_id', auth()->user()->id)
            ->get();

        foreach ($pets as $pet) {
            $breed = Breed::find($pet->breed_id);
            $pet['breed'] = $breed->name;
            $pet['specie'] = $breed->specie_id;
        }

        return response()->json(['response' => ['result' => $pets]], 200);
    }

    public function getYourCats()
    {
        $cats = [];
        $pets = ExternalPets::where('active', true)
            ->where('owner_id', auth()->user()->id)
            ->get();

        foreach ($pets as $pet) {
            $breed = Breed::find($pet->breed_id);
            if ($breed->specie_id == 'cat') {
                $pet['breed'] = $breed->name;
                $pet['specie'] = $breed->specie_id;
                array_push($cats, $pet);
            }
        }

        return response()->json(['response' => ['result' => $cats]], 200);
    }

    public function getYourDogs()
    {
        $dogs = [];
        $pets = ExternalPets::where('active', true)
            ->where('owner_id', auth()->user()->id)
            ->get();

        foreach ($pets as $pet) {
            $breed = Breed::find($pet->breed_id);
            if ($breed->specie_id == 'dog') {
                $pet['breed'] = $breed->name;
                $pet['specie'] = $breed->specie_id;
                array_push($dogs, $pet);
            }
        }

        return response()->json(['response' => ['result' => $dogs]], 200);
    }

    public function updatePet(Request $request)
    {
        $data = json_decode($request->getContent(), true);

        $pet = ExternalPets::findOrFail($request->id);
        foreach ($data as $key => $value) {
            $pet[$key] = $value;
        }

        PetValidation::validatePetObject($pet);
        $pet->update();

        return response()->json(['response' => ['message' => 'Pet updated successfully!', 'result' => $pet]], 200);
    }

    public function getPet(Request $request)
    {
        return response()->json(['response' => ['result' => ExternalPets::findOrFail($request->id)]], 200);
    }

    public function deletePet(Request $request)
    {
        $data = json_decode($request->getContent());
        $pet = ExternalPets::findOrFail($data->id);
        $pet['active'] = false;
        $pet->update();

        $bookings = CareServices::where('external_pet_id', $pet->id)->get();

        foreach ($bookings as $booking) {
            $bookingStartDate = new DateTime($booking->arrive);

            $today = new DateTime();
            $today->setTime(0, 0, 0);

            if ($bookingStartDate >= $today) {
                $booking['cancelled'] = true;
                $booking->update();
            }
        }

        return response()->json(['response' => ['message' => 'Pet deleted successfully!']], 200);
    }

    public function getPetBySpecie(Request $request)
    {
        $species = Species::findOrFail($request->id);
        $pets = $species->pets()->get();
        return response()->json(['response' => ['result' => $pets]], 200);
    }
}
