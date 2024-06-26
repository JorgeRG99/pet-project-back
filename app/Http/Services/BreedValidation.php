<?php

namespace App\Http\Services;

use Illuminate\Support\Facades\Validator;

class BreedValidation
{
    const RULES = [
        'name' => 'required|string|max:191',
    ];

    public static function validateBreedRequest($request)
    {
        $request->validate(self::RULES);
    }

    public static function validateBreedObject($breed)
    {
        $validator = Validator::make($breed->toArray(), self::RULES);

        if ($validator->fails()) {
            throw new \Illuminate\Validation\ValidationException($validator);
        }
    }
}
