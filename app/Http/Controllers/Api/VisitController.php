<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreVisitRequest;
use App\Http\Requests\UpdateVisitRequest;
use App\Models\Animal;
use App\Models\Owner;
use App\Models\Role;
use App\Models\Visit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VisitController extends Controller
{

    public function __construct()
    {
        $this->authorizeResource(Visit::class, 'visit');
    }
    public function index()
    {
        $userRole = Auth::user()->role_id;
        if ($userRole === Role::IS_ADMIN || $userRole === Role::IS_VET)
        {
            return response()->json(Visit::all()->load('animal', 'user'));
        }
        $owner_id = Owner::where('user_id', Auth::user()->id)->pluck('id');
        $arrayAnimals = Animal::where('owner_id', $owner_id)->pluck('id')->toArray();
        $Visit = Visit::whereIn('animal_id', $arrayAnimals)->get()->load('animal', 'user');
        return response()->json($Visit);

    }

    public function show(Visit $Visit)
    {
        return response()->json($Visit->load('animal', 'user'));
    }

    public function update(UpdateVisitRequest $request, Visit $Visit)
    {
        return response()->json($Visit->update($request->toArray()));
    }

}
