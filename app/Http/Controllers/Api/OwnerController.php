<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\AnimalType;
use App\Http\Controllers\AnimalTypeRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOwnerRequest;
use App\Http\Requests\UpdateOwnerRequest;
use App\Models\Animal;
use App\Models\Owner;
use App\Models\User;
use App\Models\Visit;

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
        $user = User::all()->where('id',$Owner->user_id)->load('role')->toArray();
        $Owner['user'] = $user;
        return response()->json($Owner);
    }

    public function store(StoreOwnerRequest $request)
    {
        return response()->json(Owner::create($request->toArray()), 201);
    }

    public function update(UpdateOwnerRequest $request, Owner $Owner)
    {
        return response()->json($Owner->update($request->toArray()));
    }

    public function AllOwnersAnimals(Owner $Owner)
    {
        return response()->json(Animal::all()->where('owner_id', $Owner->id)->load('animalType', 'breed'));
    }

    public function AllOwnerVisits(Owner $Owner)
    {
        $animal = Animal::where('owner_id', $Owner->id)->pluck('id')->toArray();
        return response()->json(Visit::all()->whereIn('animal_id', $animal)->load('animal'));
    }

}
