<?php

namespace App\Http\Controllers;

use App\Models\Adoptions;
use App\Models\Breed;
use Carbon\Carbon;
use App\Models\Pet;
use App\Models\Statuses;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdoptionsController extends Controller
{

    public function yourAdoptions()
    {
        $user = User::findOrFail(Auth::id());
        $adoptions = Adoptions::where('user_id', $user->id)
                                ->where('cancellation_date', null)
                                ->get();

        foreach ($adoptions as $adoption) {
            $adoption['status'] = Statuses::where('name', $adoption->status_id)->first()->name;
            $adoption['pet'] = Pet::where('id', $adoption->pet_id)->first();

            $breed = Breed::find($adoption['pet']->breed_id);

            $adoption['pet']['breed'] = $breed->name;

            if ($breed->specie_id == 'dog') $adoption['pet']['specie'] = 'Perro';
            else $adoption['pet']['specie'] = 'Gato';
        };

        return response()->json(['response' => ['result' => $adoptions]], 200);
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
        $uncompletedAdoption = Adoptions::where('user_id', Auth::id())
            ->where('status_id', 'pending')
            ->get();

        if ($uncompletedAdoption->count() > 0) {
            return response()->json(['response' => ['message' => 'User already requested an adoption']], 409);
        }

        $adoption = Adoptions::create([
            'user_id' => Auth::id(),
            'pet_id' => $data->pet_id,
        ]);
        return response()->json(['response' => ['message' => 'Adoption requested successfully', 'result' => $adoption]], 201);
    }

    public function acceptAdoption(Request $request)
    {
        $adoption = Adoptions::findOrFail($request->id);
        $acceptedStatus = Statuses::where('name', 'accepted')->first();

        $adoption->update([
            'status_id' => $acceptedStatus->id
        ]);

        return response()->json(['response' => ['message' => 'Adoption accepted successfully', 'result' => $adoption]], 201);
    }

    public function confirmAdoption(Request $request)
    {
        $adoption = Adoptions::findOrFail($request->id);
        $confirmedStatus = Statuses::where('name', 'confirmed')->first();

        $adoption->update([
            'status_id' => $confirmedStatus->id,
            'adoption_date' => date(Carbon::now()->toDateString())
        ]);

        return response()->json(['response' => ['message' => 'Adoption confirmed successfully', 'result' => $adoption]], 201);
    }

    public function cancelAdoption(Request $request)
    {
        $data = json_decode($request->getContent());
        $adoption = Adoptions::findOrFail($data->id);
        $cancelledStatus = Statuses::where('name', 'cancelled')->first();

        $adoption['cancellation_date'] = date(Carbon::now()->toDateString());
        $adoption['status_id'] = $cancelledStatus->id;
        $adoption->update([
            'status_id' => $cancelledStatus->name,
            'cancellation_date' => date(Carbon::now()->toDateString())
        ]);

        return response()->json(['response' => ['message' => 'Adoption cancelled successfully']], 201);
    }
}
