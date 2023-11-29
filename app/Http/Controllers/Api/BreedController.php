<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\BreedRequest;
use App\Models\Breed;

class BreedController extends Controller
{

    public function __construct()
    {
        $this->authorizeResource(Breed::class, 'breed');
    }
    public function index()
    {
        return response()->json(Breed::all());
    }

    public function show(Breed $Breed)
    {
        return response()->json($Breed);
    }

    public function store(BreedRequest $request)
    {
        return response()->json(Breed::create($request->toArray()), 201);
    }

    public function update(BreedRequest $request, Breed $Breed)
    {
        return response()->json($Breed->update($request->toArray()));
    }

    public function destroy(Breed $Breed)
    {
        return response()->json($Breed->delete());
    }
}
