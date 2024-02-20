<?php

namespace App\Http\Controllers;

use App\Http\Services\AdminValidation;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function loginAdmin(Request $request)
    {
        AdminValidation::validateAdminRequest($request);

        $admin = Admin::where('email', $request->email)->first();
        if (!$admin || !Hash::check($request->password, $admin->password)) {
            return response()->json([
                'response' => 'Email & Password does not match with our record.',
            ], 401);
        }

        return response()->json([
            'response' => 'Admin Logged In Successfully',
            'token' => $admin->createToken('API_TOKEN', ['admin'])->plainTextToken
        ], 200);
    }

    public function createAdmin(Request $request)
    {
        AdminValidation::validateAdminRequest($request);

        $response = Admin::create([
            'email' => $request->email,
            'password' => $request->password
        ]);
        if ($response) {
            return response()->json([
                'response' => 'Admin created Successfully',
            ], 401);
        }else{
            return response()->json([
                'response' => 'Admin not created',
            ], 200);
        }
    }

    public function logOutAdmin(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'response' => 'Admin Logged Out Successfully',
        ], 200);
    }
}
