<?php

namespace App\Http\Controllers;

use App\Models\CareServices;
use App\Models\HotelCapacity;
use App\Models\User;
use Carbon\Carbon;
use DateInterval;
use DatePeriod;
use DateTime;
use Illuminate\Http\Request;

class CareServicesController extends Controller
{
    public function getPanel()
    {
        $today = Carbon::today();

        $bookings = CareServices::where('arrive', '>', $today)->where('cancelled', false)->get();

        foreach ($bookings as $booking) {
            $userData = User::find($booking->user_id);
            $booking['user'] = $userData;
        }

        return response()->json(['response' => ['result' => $bookings]], 200);
    }

    public function yourCareServices()
    {
        $bookings = CareServices::where('user_id', auth()->user()->id)
            ->where('cancelled', false)
            ->get();
        $response = ['response' => ['result' => $bookings]];

        return response()->json($response, 200);
    }

    public function createCareService(Request $request)
    {
        $data = json_decode($request->getContent(), true);
        $data['user_id'] = auth()->user()->id;

        CareServices::create($data);

        $response = ['response' => ['message' => 'Care service created successfully!']];

        return response()->json($response, 201);
    }

    public function getUnavailableDates()
    {
        $hotelThresholdCapacity = HotelCapacity::first()->capacity;

        $reservations = CareServices::select('arrive', 'departure')
            ->where('cancelled', false)
            ->get();

        $allDays = [];

        foreach ($reservations as $reservation) {
            $period = new DatePeriod(
                new DateTime($reservation->arrive),
                new DateInterval('P1D'),
                (new DateTime($reservation->departure))->modify('+1 day')
            );

            foreach ($period as $date) {
                $allDays[] = $date->format('Y-m-d');
            }
        }

        $daysCount = array_count_values($allDays);

        $fullyBookedDays = array_keys(array_filter($daysCount, function ($count) use ($hotelThresholdCapacity) {
            return $count > $hotelThresholdCapacity;
        }));


        return response()->json(['response' => ['result' => $fullyBookedDays]], 201);
    }

    public function getAllCareServices()
    {
        $care_services = CareServices::all();
        return response()->json(['response' => ['result' => $care_services]], 201);
    }


    public function getCareService(Request $request)
    {
        return response()->json(['response' => ['result' => CareServices::findOrFail($request->id)]], 200);
    }

    public function deleteCareService(Request $request)
    {
        $data = json_decode($request->getContent());
        $care_service = CareServices::findOrFail($data->id);
        $care_service['cancelled'] = true;
        $care_service->update();
        return response()->json(['response' => ['message' => 'Care service deleted successfully!']], 200);
    }
}
