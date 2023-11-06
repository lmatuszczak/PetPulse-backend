<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index()
    {
        $animal = Animal::with(['animalType','breed', 'owner'])->findOrFail(1);

        return response()->json([$animal]);
    }

    public function store()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }
}
