<?php

namespace App\Http\Services;

use Illuminate\Support\Facades\Validator;

class SpecieValidation
{
    const RULES = [
        'specie' => 'required|string|max:191',
    ];

    public static function validateSpecieRequest($request)
    {
        $request->validate(self::RULES);
    }

    public static function validateSpecieObject($pet)
    {
        $validator = Validator::make($pet->toArray(), self::RULES);

        if ($validator->fails()) {
            throw new \Illuminate\Validation\ValidationException($validator);
        }
    }
}
