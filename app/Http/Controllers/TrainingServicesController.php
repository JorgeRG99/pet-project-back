<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Models\Statuses;
use App\Models\TrainingHours;
use App\Models\TrainingServices;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TrainingServicesController extends Controller
{
    public function getPanel()
    {
        $now = Carbon::now();
        $trainings = TrainingServices::where(function($query) use ($now) {
            $query->where('date', '>', $now->toDateString())
                  ->orWhere(function($query) use ($now) {
                      $query->where('date', '=', $now->toDateString())
                            ->where('hour', '>', $now->toTimeString());
                  });
        })->get();

        foreach ($trainings as $appointment) {
            $userData = User::find($appointment->user_id);
            $appointment['user'] = $userData;
        }
        
        return response()->json(['response' => ['result' => $trainings]], 200);
    }

    public function getFullBookedDates()
    {
        $fullBookedDates = TrainingServices::select('date')
            ->where('cancelled', false)
            ->groupBy('date')
            ->havingRaw('COUNT(*) >= 5')
            ->get();

        return response()->json(['response' => ['result' => $fullBookedDates]], 200);
    }

    public function getAvailableHours(Request $request)
    {
        $date = $request->input('date');
        $allHours = TrainingHours::pluck('hour')->all();
        $bookedHours = TrainingServices::where('date', $date)
            ->where('cancelled', false)
            ->pluck('hour')
            ->all();

        $result = [];

        foreach ($allHours as $hour) {
            if (!in_array($hour, $bookedHours)) {
                $result[] = $hour;
            }
        }

        return response()->json(['response' => ['result' => $result]], 200);
    }

    public function yourTrainingAppointments()
    {
        $trainings = TrainingServices::where('user_id', Auth::id())->get();
        return response()->json(['response' => ['result' => $trainings]], 200);
    }

    public function allTrainingAppointments()
    {
        $trainings = TrainingServices::all()->load('status');
        return response()->json(['response' => ['result' => $trainings]], 200);
    }

    public function scheduleTraining(Request $request)
    {
        $data = json_decode($request->getContent());

        TrainingServices::create([
            'user_id' => auth()->id(),
            'external_pet_id' => $data->external_pet_id,
            'date' => $data->date,
            'hour' => $data->hour,
            'total_price' => $data->total_price
        ]);

        return response()->json(['response' => ['message' => 'Training scheduled successfully']], 201);
    }

    public function cancelTraining(Request $request)
    {
        $data = json_decode($request->getContent());
        $training = TrainingServices::findOrFail($data->id);
        $training['cancelled'] = true;
        $training->update();

        return response()->json(['response' => ['message' => 'Training cancelled successfully']], 201);
    }
}
