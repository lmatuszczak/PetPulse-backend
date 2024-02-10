<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTestRequest;
use App\Http\Requests\UpdateTestRequest;
use App\Models\Animal;
use App\Models\Owner;
use App\Models\Role;
use App\Models\Test;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{

    public function __construct()
    {
        $this->authorizeResource(Test::class, 'test');
    }
    public function index()
    {
        $userRole = Auth::user()->role_id;
        if ($userRole === Role::IS_ADMIN || $userRole === Role::IS_VET)
        {
            return response()->json(Test::all()->load('animal'));
        }
        $owner_id = Owner::where('user_id', Auth::user()->id)->pluck('id');
        $arrayAnimals = Animal::where('owner_id', $owner_id)->pluck('id')->toArray();
        $test = Test::whereIn('animal_id', $arrayAnimals)->get()->load('animal');
        return response()->json($test);

    }

    public function showAnimalTests(Animal $animal)
    {
        $test = Test::where('animal_id', $animal->id)->get();
        return response()->json($test);
    }
    public function show(Test $test)
    {
        return response()->json($test->load('animal'));
    }

    public function store(StoreTestRequest $request)
    {
        return response()->json(Test::create($request->toArray()), 201);
    }

    public function update(UpdateTestRequest $request, Test $test)
    {
        return response()->json($test->update($request->toArray()));
    }

    public function destroy(Test $test)
    {
        return response()->json($test->delete());
    }
}
