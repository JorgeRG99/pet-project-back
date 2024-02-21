<?php

namespace App\Http\Controllers;

use App\Http\Services\UserValidation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getUser(Request $request)
    {
        return response()->json(['response' => ['result' => $request->user()]], 200);
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

        return response()->json(['response' => ['message' => 'User updated successfully!', 'result' => $user]], 200);
    }

    public function deleteUser()
    {
        $user = User::findOrFail(Auth::id());
        $user->update(['active' => false]);

        return response()->json(['response' => 'User deleted successfully!'], 200);
    }
}
