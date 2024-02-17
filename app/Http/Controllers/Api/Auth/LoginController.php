<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginUserRequest;
use App\Models\Owner;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(LoginUserRequest $request)
    {
        if (!Auth::attempt($request->only(['email', 'password']))) {
            return response()
                ->json(
                    ['message' => 'Invalid login credentials. Please check your username and password.'],
                    '401');
        }
        $user = User::where('email', $request->only('email'))->firstOrFail();
        $userToken = $user->createToken('apiToken')->plainTextToken;
        return response()->json($userToken);
    }

    public function logout()
    {
        Auth::user()->tokens()->delete();
        return response()->json();
    }

    public function getUserInfo()
    {
        $owner =  Owner::all()->where('user_id', Auth::user()->id)->toArray();
        $user = Auth::user()->load('role')->toArray();
        $user['owner'] = $owner;
        return response()->json($user);
    }

}
