<?php

namespace App\Http\Controllers;

use App\Http\Services\CareServiceValidation;
use App\Models\CareServices;
use Illuminate\Http\Request;

class CareServicesController extends Controller
{
    public function createCareService(Request $request)
    {
        CareServiceValidation::validateCareServiceRequest($request);
        $data = json_decode($request->getContent(), true);

        $care_service = CareServices::create($data);

        $response = ['response' => ['message' => 'Care service created successfully!', 'result' => $care_service]];

        return response()->json($response, 201);
    }

    public function getAllCareServices()
    {
        $care_services = CareServices::all();
        return response()->json(['response' => ['result' => $care_services]], 201);
    }

    public function updateCareService(Request $request)
    {
        $data = json_decode($request->getContent(), true);

        $care_service = CareServices::findOrFail($request->id);
        foreach ($data as $key => $value) {
            $care_service->{$key} = $value;
        }

        CareServiceValidation::validateCareServiceObject($care_service);
        $care_service->update();

        return response()->json(['response' => ['message' => 'Care service updated successfully!', 'result' => $care_service]], 200);
    }


    public function getCareService(Request $request)
    {
        return response()->json(['response' => ['result' => CareServices::findOrFail($request->id)]], 200);
    }

    public function deleteCareService(Request $request)
    {
        $care_service = CareServices::findOrFail($request->id);
        $care_service->update(['active' => false]);
        return response()->json(['response' => ['message' => 'Care service deleted successfully!']], 200);
    }
}
