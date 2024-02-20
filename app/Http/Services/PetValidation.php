<?php

namespace App\Http\Services;

use Illuminate\Support\Facades\Validator;

class PetValidation
{

    const RULES = [
        'name' => 'required',
        'species' => 'required',
        'age' => 'required',
        'breed' => 'required',
        'gender' => 'required',
        'additional_info' => 'required',
        'date_entry' => 'required',
        'weight' => 'required'
    ];



    public static function validatePetRequest($request)
    {
        $request->validate(array_merge(self::RULES));
    }

    public static function validatePetObject($user)
    {
        $validator = Validator::make($user->toArray(), self::RULES);

        if ($validator->fails()) {
            throw new \Illuminate\Validation\ValidationException($validator);
        }
    }
}
