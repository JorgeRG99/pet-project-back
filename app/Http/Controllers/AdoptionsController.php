<?php

namespace App\Http\Controllers;

use App\Models\Adoptions;
use App\Models\Pet;
use App\Models\Status;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdoptionsController extends Controller
{

    public function yourAdoptions()
    {
        $user = User::findOrFail(Auth::id());
        $adoptions = $user->adoptions()->with('status')->get();;

        return response()->json(['response' => $adoptions], 200);
    }

    public function getAdoptionsByUser(Request $request)
    {
        $user = User::findOrFail($request->id);
        $adoptions = $user->adoptions()->with('status')->get();;

        return response()->json(['response' => $adoptions], 200);
    }

    public function getAdoptionsByPet(Request $request)
    {
        $pet = Pet::findOrFail($request->id);
        $adoptions = $pet->adoptions()->with('status')->get();;

        return response()->json(['response' => $adoptions], 200);
    }

    public function requestAdoption(Request $request)
    {
        $data = json_decode($request->getContent());

        $pendingStatus = Status::where('name', 'pending')->first();

        Adoptions::create([
            'user_id' => Auth::id(),
            'pet_id' => $data->pet_id,
            'status_id' => $pendingStatus->id
        ]);

        return response()->json(['response' => 'Adoption requested successfully'], 201);
    }

    public function acceptAdoption(Request $request)
    {
        $adoption = Adoptions::findOrFail($request->id);
        $acceptedStatus = Status::where('name', 'accepted')->first();

        $adoption->update([
            'status_id' => $acceptedStatus->id
        ]);

        return response()->json(['response' => 'Adoption accepted successfully'], 201);
    }

    public function confirmAdoption(Request $request)
    {
        $adoption = Adoptions::findOrFail($request->id);
        $confirmedStatus = Status::where('name', 'confirmed')->first();

        $adoption->update([
            'status_id' => $confirmedStatus->id
        ]);

        return response()->json(['response' => 'Adoption confirmed successfully'], 201);
    }

    public function cancelAdoption(Request $request)
    {
        $adoption = Adoptions::findOrFail($request->id);
        $cancelledStatus = Status::where('name', 'cancelled')->first();

        $adoption->update([
            'status_id' => $cancelledStatus->id
        ]);

        return response()->json(['response' => 'Adoption cancelled successfully'], 201);
    }
}
