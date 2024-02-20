<?php

namespace App\Http\Services;
use Illuminate\Support\Facades\Validator;

class AdminValidation
{
    const RULES = [
        'email' => 'required|email|max:120',
        'password' => 'required|string|min:8',
    ];

    public static function validateAdminRequest($request)
    {
        $request->validate(array_merge(self::RULES));
    }

    public static function validateAdminObject($admin)
    {
        $validator = Validator::make($admin->toArray(), self::RULES);

        if ($validator->fails()) {
            throw new \Illuminate\Validation\ValidationException($validator);
        }
    }
}
