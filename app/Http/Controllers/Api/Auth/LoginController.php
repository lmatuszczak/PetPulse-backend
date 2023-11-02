<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        if (!Auth::attempt($request->only(['email', 'password']))) {
            return response(['message' => 'Nieprawidłowe dane logowania'], 401);
        }
        Auth::attempt($request->only(['email', 'password']));
        $user = User::where('email', $request->only('email'))->firstOrFail();
        $userToken = $user->createToken('apiToken')->plainTextToken;
        return response()->json($userToken);
    }

    public function logout()
    {
        Auth::user()->tokens()->delete();
        return response()->json();
    }
}
