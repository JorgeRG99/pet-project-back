<?php

namespace App\Http\Controllers;

use App\Http\Services\UserValidation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function recoverSession(Request $request)
    {
        $user = $request->user();

        if($user->active) {
            return response()->json(['response' => ['userData' => $request->user()]], 200);
        } else {
            return response()->json(['response' => ['message' => 'User not found']], 404);
        }
    }

    public function login(Request $request)
    {
        $response = ['response' => ''];
        $status = 0;
        $data = json_decode($request->getContent());

        $user = User::where("email", $data->email)->first();

        if ($user && $user->active) {
            if (Hash::check($request->password, $user->password)) {
                $user->tokens()->delete();

                if ($user->role === 'worker') {
                    $token = $user->createToken('AuthToken', ['role' => 'worker']);
                } else {
                    $token = $user->createToken('AuthToken', ['role' => 'user']);
                }


                $status = 200;
                $response['response'] = ['message' => 'Successful login', 'token' => $token->plainTextToken, 'userData' => $user];
            } else {
                $status = 401;
                $response['response'] = ['message' => 'Invalid credentials'];
            }
        } else {
            $status = 404;
            $response['response'] = ['message' => 'User not found'];
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

        $worker = User::create([
            'name' => $data->name,
            'last_name' => $data->last_name,
            'email' => $data->email,
            'password' => $data->password,
            'birth_date' => $data->birth_date,
            'phone' => $data->phone,
            'dni' => $data->dni,
            'role' => 'worker'
        ]);

        $token = $worker->createToken('AuthToken', ['role' => 'worker']);
        return response()->json(['response' => ['message' => 'Worker created successfully!', 'token' => $token->plainTextToken, 'userData' => $worker]], 201);
    }

    public function createUser(Request $request)
    {
        UserValidation::validateUserRequest($request);
        $data = json_decode($request->getContent());

        $user = User::create([
            'name' => $data->name,
            'last_name' => $data->last_name,
            'email' => $data->email,
            'password' => $data->password,
            'birth_date' => $data->birth_date,
            'phone' => $data->phone,
            'dni' => $data->dni
        ]);

        $token = $user->createToken('AuthToken', ['role' => 'user']);
        return response()->json(['response' => ['message' => 'User created successfully!', 'token' => $token->plainTextToken, 'userData' => $user]], 201);
    }
}
