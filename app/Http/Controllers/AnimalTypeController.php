<?php

namespace App\Http\Controllers;


use App\Http\Requests\AnimalTypeRequest;
use App\Models\AnimalType;

class AnimalTypeController extends Controller
{
    public function index()
    {
        return response()->json(AnimalType::all());
    }

    public function show(AnimalType $animalType)
    {
        return response()->json($animalType);
    }

    public function store(AnimalTypeRequest $request)
    {
        return response()->json(AnimalType::create($request->toArray()), 201);
    }

    public function update(AnimalTypeRequest $request, AnimalType $animalType)
    {
        return response()->json($animalType->update($request->toArray()));
    }

    public function destroy(AnimalType $animalType)
    {
        return response()->json($animalType->delete());
    }
}
