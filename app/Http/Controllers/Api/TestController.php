<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Animal;
use App\Models\Owner;
use App\Models\Role;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
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

    public function show(Test $test)
    {

        return response()->json($test->load('animal'));
    }

    public function store(Request $request)
    {
        return response()->json(Test::create($request->toArray()), 201);
    }

    public function update(Request $request, Test $test)
    {
        return response()->json($test->update($request->toArray()));
    }

    public function destroy(Test $test)
    {
        return response()->json($test->delete());
    }
}
