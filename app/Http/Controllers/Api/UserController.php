<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;

class UserController extends Controller
{

    public function __construct()
    {
        $this->authorizeResource(User::class, 'user');
    }
    public function index()
    {
        return response()->json(User::all()->load('role'));
    }

    public function show(User $user)
    {
        return response()->json($user->load('role'));
    }

    public function store(StoreUserRequest $request)
    {
        return response()->json(User::create($request->toArray()), 201);
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        return response()->json($user->update($request->toArray()));
    }

    public function destroy(User $user)
    {
        return response()->json($user->delete());
    }
}
