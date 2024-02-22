<?php

namespace App\Http\Services;

use Illuminate\Support\Facades\Validator;

class CareServiceValidation
{
    const RULES = [
        'departure' => 'required|string|max:191',
        'total_price' => 'required|integer',
        'type' => 'required|string|max:191',
    ];

    public static function validateCareServiceRequest($request)
    {
        $request->validate(self::RULES);
    }

    public static function validateCareServiceObject($care_service)
    {
        $validator = Validator::make($care_service->toArray(), self::RULES);

        if ($validator->fails()) {
            throw new \Illuminate\Validation\ValidationException($validator);
        }
    }
}
