<?php

namespace App\Http\Services;

use Illuminate\Support\Facades\Validator;

class UserValidation {

    const RULES = [
        'name' => 'required|string|max:150',
        'last_name' => 'required|string|max:300',
        'email' => 'required|unique:users,email|max:300',
        'birth_date' => 'required|date|before:-18 years',
        'dni' => ['required', 'regex:/^[0-9]{8}[A-Z]$/i'],
        'phone' => 'required|digits:9',
    ];

    const PASSWORD_RULE = [
        'password' => 'required|string|min:8',
    ];
    
    public static function validateUserRequest($request)
    {
        $request->validate(array_merge(self::RULES, self::PASSWORD_RULE));
    }

    public static function validateUserObject($user) {
        $validator = Validator::make($user->toArray(), self::RULES);

        if ($validator->fails()) {
            throw new \Illuminate\Validation\ValidationException($validator);
        }
    }
}