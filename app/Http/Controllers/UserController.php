<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;

class UserController extends Controller
{
    // Authentication
    public function login(Request $request)
    {
        $creds = $request->only(['email', 'password']);

        if (!$token = auth()->attempt($creds)) {
            return response()->json(['error' => true, 'message' => 'Incorrect Login/Password']);
        }

        return response()->json(['token' => $token]);
    }

    // Registration
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'     => 'required',
            'email'    => 'required|email|unique:users',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => true, 'message' => $validator->errors()], 401);
        }

        $input                      = $request->all();
        $input['email']             = $input['email'];
        $input['password']          = bcrypt($input['password']);
        $input['email_verified_at'] = now();
        $input['remember_token']    = str_random(10);
        $user                       = User::create($input);

        $creds = $request->only(['email', 'password']);

        $token = auth()->attempt($creds);

        return response()->json(['token' => $token], 200);
    }

    // Token refresh
    public function refresh()
    {
        try {
            $token = auth()->refresh();
        } catch (\Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
            return response()->json(['error' => true, 'message' => $e->getMessage()], 401);
        }

        return response()->json(['token' => $token]);
    }
}
