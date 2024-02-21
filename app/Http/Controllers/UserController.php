<?php

namespace App\Http\Controllers;

use App\Http\Services\UserValidation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function getUser(Request $request)
    {
        return response()->json(['response' => $request->user()], 200);
    }

    public function createUser(Request $request)
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
            'dni' => $data->dni
        ]);

        $response = ['response' => 'User created successfully!'];

        return response()->json($response, 201);
    }

    public function updateUser(Request $request)
    {
        $data = json_decode($request->getContent(), true);
        $user = User::findOrFail(Auth::id());

        foreach ($data as $key => $value) {
            $user->{$key} = $value;
        }

        UserValidation::validateUserObject($user);

        $user->update();

        $status = 200;
        $response = ['response' => 'User updated successfully!'];

        return response()->json($response, $status);
    }

    public function deleteUser()
    {
        $user = User::findOrFail(Auth::id());
        $user->update(['status' => false]);

        $status = 200;
        $response = ['response' => 'User deleted successfully!'];

        return response()->json($response, $status);
    }
}
