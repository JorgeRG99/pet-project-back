<?php

namespace App\Http\Services;

use Illuminate\Support\Facades\Validator;

class UserValidation
{
    const RULES = [
        'name' => ['required', 'string', 'max:150'],
        'last_name' => ['required', 'string', 'max:300', 'regex:/^[a-zA-Z\s]*$/'],
        'email' => ['required', 'string', 'max:300', 'email'],
        'birth_date' => ['required', 'date', 'before:-18 years', 'regex:/^\d{4}-(0[1-9]|1[0-2])-(0[1-9]|[12][0-9]|3[01])$/'],
        'dni' => ['required', 'regex:/^[0-9]{8}[A-Z]$/i'],
        'phone' => ['required', 'digits:9'],
        'role' => ['in:worker,user'],
        'password' => ['sometimes', 'string', 'regex:/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()_+\-=\[\]{};:|,.<>\/?]).{8,}$/'],
    ];


    public static function validateUserRequest($request)
    {
        $request->validate(self::RULES);
    }

    public static function validateUserObject($user)
    {
        $validator = Validator::make($user->toArray(), self::RULES);

        if ($validator->fails()) {
            throw new \Illuminate\Validation\ValidationException($validator);
        }
    }
}
