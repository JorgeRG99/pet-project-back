<?php

namespace App\Http\Controllers;

use App\Models\Adoptions;
use App\Models\Pet;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdoptionsController extends Controller
{

    public function yourAdoptions()
    {
        $user = User::findOrFail(Auth::id());

        return response()->json(['response' => $user->adoptions()->get()], 200);
    }

    public function getAdoptionsByUser(Request $request)
    {
        $user = User::findOrFail($request->user);

        return response()->json(['response' => $user->adoptions()->get()], 200);
    }

    public function getAdoptionsByPet(Request $request)
    {
        $pet = Pet::findOrFail($request->pet);

        return response()->json(['response' => $pet->adoptions()->get()], 200);
    }

    public function requestAdoption(Request $request)
    {
        $data = json_decode($request->getContent());

        Adoptions::create([
            'user_id' => $data->user_id,
            'pet_id' => $data->pet_id,
            'status' => 'pending'
        ]);

        return response()->json(['response' => 'Adoption requested successfully'], 201);
    }

    public function acceptAdoption(Request $request)
    {
        $adoption = Adoptions::findOrFail($request->adoption_id);

        $adoption->update([
            'status' => 'accepted'
        ]);

        return response()->json(['response' => 'Adoption accepted successfully'], 201);
    }

    public function confirmAdoption(Request $request)
    {
        $adoption = Adoptions::findOrFail($request->adoption_id);

        $adoption->update([
            'status' => 'confirmed'
        ]);

        return response()->json(['response' => 'Adoption confirmed successfully'], 201);
    }

    public function cancelAdoption(Request $request)
    {
        $adoption = Adoptions::findOrFail($request->adoption_id);

        $adoption->update([
            'status' => 'cancelled'
        ]);

        return response()->json(['response' => 'Adoption cancelled successfully'], 201);
    }
}
