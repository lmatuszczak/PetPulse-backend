<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAnimalRequest;
use App\Http\Requests\UpdateAnimalRequest;
use App\Models\Animal;

class AnimalController extends Controller
{
    public function index(Animal $animal)
    {
        return response()->json($animal->load(['animalType', 'breed', 'owner']));
    }

    public function store(StoreAnimalRequest $request)
    {
        return response()->json(Animal::create($request->toArray()), 201);
    }

    public function update(UpdateAnimalRequest $request, Animal $animal)
    {
        return response()->json($animal->update($request->toArray()));
    }

    public function destroy(Animal $animal)
    {
        return response()->json($animal->delete());
    }
}
