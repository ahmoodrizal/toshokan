<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:8'],
        ]);

        $user = User::create([
            'name' => $request['name'],
            'slug' => Str::slug($request['name']),
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        return response()->json([
            'data' => $user,
        ], 201);
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => ['required'],
            'password' => ['required']
        ]);

        $existUser = User::whereEmail($request['email'])->first();

        if (!$existUser) {
            return response()->json([
                'message' => "You're email has not been registered"
            ], 401);
        }

        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        }

        $user = auth()->user();

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'data' => $user,
            'token' => $token,
        ], 200);
    }
}
