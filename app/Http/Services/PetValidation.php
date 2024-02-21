<?php

namespace App\Http\Services;

use Illuminate\Support\Facades\Validator;

class PetValidation
{
    const RULES = [
        'name' => 'required|string|max:191',
        'species' => 'required|string|max:191',
        'breed' => 'required|string|max:191',
        'age' => 'required|integer',
        'gender' => 'required|string|max:191',
        'additional_info' => 'nullable|string|max:191',
        'active' => 'sometimes|required|boolean',
        'date_entry' => 'required|date',
        'weight' => 'nullable|string|max:191',
    ];

    public static function validatePetRequest($request)
    {
        $request->validate(self::RULES);
    }

    public static function validatePetObject($pet)
    {
        $validator = Validator::make($pet->toArray(), self::RULES);

        if ($validator->fails()) {
            throw new \Illuminate\Validation\ValidationException($validator);
        }
    }
}