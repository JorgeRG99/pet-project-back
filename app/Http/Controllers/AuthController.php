<?php

namespace App\Http\Controllers;

use App\Http\Services\UserValidation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $response = ['response' => ''];
        $status = 0;
        $data = json_decode($request->getContent());

        $user = User::where("email", $data->email)->first();

        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $user->tokens()->delete();

                if($user->role === 'worker') {
                    $token = $user->createToken('AuthToken', ['role' => 'worker']);
                } else {
                    $token = $user->createToken('AuthToken', ['role' => 'user']);
                }


                $status = 200;
                $response['response'] = 'Succesful access';
                $response['token'] = $token->plainTextToken;
            } else {
                $status = 401;
                $response['response'] = 'Invalid credentials';
            }
        } else {
            $status = 404;
            $response['response'] = 'User not found';
        }

        return response()->json($response, $status);
    }

    public function logout(Request $request)
    {
        $user = $request->user();

        $status = 200;
        $response['response'] = 'Successful logout';

        $user->tokens()->delete();

        return response()->json($response, $status);
    }

    public function createWorker(Request $request)
    {
        UserValidation::validateUserRequest($request);
        $data = json_decode($request->getContent());

        User::create([
            'name' => $data->name,
            'last_name' => $data->last_name,
            'email' => $data->email,
            'password' => Hash::make($data->password),
            'birth_date' => $data->birth_date,
            'phone' => $data->phone,
            'dni' => $data->dni,
            'role' => 'worker'
        ]);

        $response = ['response' => 'Worker created successfully!'];

        return response()->json($response, 201);
    }
}
