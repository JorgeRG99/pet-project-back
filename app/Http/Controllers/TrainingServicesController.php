<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Models\TrainingServices;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TrainingServicesController extends Controller
{
    public function yourTrainingAppointments()
    {
        $visits = TrainingServices::where('user_id', Auth::id())
            ->where('scheduled_date', '>=', Carbon::now())
            ->with('status')
            ->get();

        return response()->json(['response' => ['result' => $visits]], 200);
    }

    public function allTrainingAppointments()
    {
        $visits = TrainingServices::all()->load('status');
        return response()->json(['response' => ['result' => $visits]], 200);
    }

    public function scheduleTraining(Request $request)
    {
        $data = json_decode($request->getContent());
        $pendingStatus = Status::where('name', 'pending')->first();

        $tarining = TrainingServices::create([
            'user_id' => $data->user_id,
            'external_pet_id' => $data->pet_id,
            'scheduled_date' => $data->scheduled_date,
            'status_id' => $pendingStatus->id
        ]);

        return response()->json(['response' => ['message' => 'Training scheduled successfully', 'result' => $tarining]], 201);
    }

    public function trainingFinished(Request $request)
    {
        $data = json_decode($request->getContent());
        $training = TrainingServices::findOrFail($data->training_id);

        $confirmedStatus = Status::where('name', 'confirmed')->first();

        $training->update([
            'status_id' => $confirmedStatus->id
        ]);

        return response()->json(['response' => ['message' => 'Training finished successfully', 'result' => $training]], 201);
    }

    public function updateTrainingDate(Request $request)
    {
        $data = json_decode($request->getContent());
        $training = TrainingServices::findOrFail($data->training_id);
        $training->update([
            'scheduled_date' => $data->scheduled_date
        ]);

        return response()->json(['response' => ['message' => 'Training date updated successfully', 'result' => $training]], 201);
    }

    public function cancelTraining(Request $request)
    {
        $data = json_decode($request->getContent());
        $training = TrainingServices::findOrFail($data->training_id);
        $cancelledStatus = Status::where('name', 'cancelled')->first();

        $training->update([
            'status_id' => $cancelledStatus->id
        ]);

        return response()->json(['response' => ['message' => 'Training cancelled successfully']], 201);
    }
}
