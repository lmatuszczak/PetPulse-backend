<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAnimalRequest;
use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index(Request $request)
    {
        $animal = Animal::with(['animalType', 'breed', 'owner'])->findOrFail($request->only('id'));
        return response()->json($animal);
    }

    public function store(StoreAnimalRequest $request)
    {
        $animal = Animal::create([
            'name' => $request->name,
            'microchip_number' => $request->microchip_number,
            'weight' => $request->weight,
            'age' => $request->age,
            'color' => $request->color,
            'gender' => $request->gender,
            'animal_type_id' => $request->animal_type_id,
            'breed_id' => $request->breed_id,
            'owner_id' => $request->owner_id
        ]);
        return response()->json($animal,201);
    }

    public function update(Request $request, int $id)
    {
        $animal = Animal::with(['animalType', 'breed', 'owner'])->findOrFail($id);
        return response()->json($animal);
    }

    public function delete(Animal $animal)
    {
        return response()->json($animal->delete());
    }
}
