<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Models\Visits;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VisitsController extends Controller
{
    public function yourVisits()
    {
        $visits = Visits::where('user_id', Auth::id())
            ->where('scheduled_date', '>=', Carbon::now())
            ->with('status')
            ->get();

        return response()->json(['response' => $visits], 200);
    }

    public function allVisits()
    {
        $visits = Visits::all()->load('status');
        return response()->json(['response' => $visits], 200);
    }

    public function visitsWithUser()
    {

        $visits = Visits::where('user_id', Auth::id())->get();
        return response()->json(['response' => $visits], 200);
    }

    public function scheduleVisit(Request $request)
    {
        $data = json_decode($request->getContent());
        $pendingStatus = Status::where('name', 'pending')->first();

        $visit = Visits::create([
            'user_id' => $data->user_id,
            'pet_id' => $data->pet_id,
            'scheduled_date' => $data->scheduled_date,
            'status_id' => $pendingStatus->id
        ]);

        return response()->json(['response' => ['message' => 'Visit scheduled successfully', 'visit' => $visit]], 201);
    }

    public function visitFinished(Request $request)
    {
        $data = json_decode($request->getContent());
        $visit = Visits::findOrFail($data->visit_id);
        
        $confirmedStatus = Status::where('name', 'confirmed')->first();

        $visit->update([
            'status_id' => $confirmedStatus->id
        ]);

        return response()->json(['response' => ['message' => 'Visit scheduled successfully', 'visit' => $visit]], 201);
    }

    public function updateVisitDate(Request $request)
    {
        $data = json_decode($request->getContent());
        $visit = Visits::findOrFail($data->visit_id);
        $visit->update([
            'scheduled_date' => $data->scheduled_date
        ]);

        return response()->json(['response' => ['message' => 'Visit date updated successfully', 'visit' => $visit]], 201);
    }

    public function cancelVisit(Request $request)
    {
        $data = json_decode($request->getContent());
        $visit = Visits::findOrFail($data->visit_id);
        $cancelledStatus = Status::where('name', 'cancelled')->first();

        $visit->update([
            'status_id' => $cancelledStatus->id
        ]);

        return response()->json(['response' => 'Visit date cancelled successfully'], 201);
    }
}
