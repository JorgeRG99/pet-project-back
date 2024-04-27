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
        return response()->json(['response' => ['result' => $request->user()]], 200);
    }

    public function changePassword(Request $request)
    {
        $data = json_decode($request->getContent());
        $user = User::findOrFail(Auth::id());
        
        if (Hash::check($data->current_password, $user->password)) {
            $user['password'] = Hash::make($data->new_password);
            UserValidation::validateUserObject($user);
            $user->update();
            return response()->json(['response' => ['message' => 'Password updated successfully!']], 200);
        } else {
            return response()->json(['response' => ['message' => 'Bad credentials']], 401);
        }
    }

    public function changeEmail(Request $request)
    {
        $data = json_decode($request->getContent());
        $user = User::findOrFail(Auth::id());
        
        if (Hash::check($data->password, $user->password)) {
            $user['email'] = $data->email;
            UserValidation::validateUserObject($user);
            $user->update();
            return response()->json(['response' => ['message' => 'Email updated successfully!']], 200);
        } else {
            return response()->json(['response' => ['message' => 'Bad credentials']], 401);
        }
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

    public function deleteUser(Request $request)
    {
        $data = json_decode($request->getContent());
        $user = User::findOrFail(Auth::id());
        
        if (Hash::check($data->password, $user->password)) {
            $user['active'] = false;
            $user->update();
            return response()->json(['response' => ['message' => 'User deleted successfully!']], 200);
        } else {
            return response()->json(['response' => ['message' => 'Bad credentials']], 401);
        }
    }
}
