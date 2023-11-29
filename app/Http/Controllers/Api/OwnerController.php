<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\AnimalType;
use App\Http\Controllers\AnimalTypeRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOwnerRequest;
use App\Http\Requests\UpdateOwnerRequest;
use App\Models\Owner;

class OwnerController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Owner::class, 'owner');
    }
    public function index()
    {
        return response()->json(Owner::all()->load(['user']));
    }

    public function show(Owner $Owner)
    {
        return response()->json($Owner->load(['user']));
    }

    public function store(StoreOwnerRequest $request)
    {
        return response()->json(Owner::create($request->toArray()), 201);
    }

    public function update(UpdateOwnerRequest $request, Owner $Owner)
    {
        return response()->json($Owner->update($request->toArray()));
    }

}
