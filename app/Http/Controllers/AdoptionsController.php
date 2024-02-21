<?php

namespace App\Http\Controllers;

use App\Models\Adoptions;
use Carbon\Carbon;
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
        return response()->json(['response' => ['result' => $user->adoptions()->with('status')->get()]], 200);
    }

    public function getAdoptionsByUser(Request $request)
    {
        $user = User::findOrFail($request->id);
        return response()->json(['response' => ['result' => $user->adoptions()->with('status')->get()]], 200);
    }

    public function getAdoptionsByPet(Request $request)
    {
        $pet = Pet::findOrFail($request->id);
        return response()->json(['response' => ['result' => $pet->adoptions()->with('status')->get()]], 200);
    }

    public function requestAdoption(Request $request)
    {
        $data = json_decode($request->getContent());
        $pendingStatus = Status::where('name', 'pending')->first();
        $adoption = Adoptions::create([
            'user_id' => Auth::id(),
            'pet_id' => $data->pet_id,
            'status_id' => $pendingStatus->id
        ]);
        return response()->json(['response' => ['message' => 'Adoption requested successfully', 'result' => $adoption]], 201);
    }

    public function acceptAdoption(Request $request)
    {
        $adoption = Adoptions::findOrFail($request->id);
        $acceptedStatus = Status::where('name', 'accepted')->first();

        $adoption->update([
            'status_id' => $acceptedStatus->id
        ]);

        return response()->json(['response' => ['message' => 'Adoption accepted successfully', 'result' => $adoption]], 201);
    }

    public function confirmAdoption(Request $request)
    {
        $adoption = Adoptions::findOrFail($request->id);
        $confirmedStatus = Status::where('name', 'confirmed')->first();

        $adoption->update([
            'status_id' => $confirmedStatus->id,
            'adoption_date' => date(Carbon::now()->toDateString())
        ]);

        return response()->json(['response' => ['message' => 'Adoption confirmed successfully', 'result' => $adoption]], 201);
    }

    public function cancelAdoption(Request $request)
    {
        $adoption = Adoptions::findOrFail($request->id);
        $cancelledStatus = Status::where('name', 'cancelled')->first();

        $adoption->update([
            'status_id' => $cancelledStatus->id,
            'cancellation_date' => date(Carbon::now()->toDateString())
        ]);

        return response()->json(['response' => ['message' => 'Adoption cancelled successfully', 'result' => $adoption]], 201);
    }
}
