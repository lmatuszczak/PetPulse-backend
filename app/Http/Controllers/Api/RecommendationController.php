<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRecommendationRequest;
use App\Http\Requests\UpdateRecommendationRequest;
use App\Models\Animal;
use App\Models\Owner;
use App\Models\Recommendation;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;

class RecommendationController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Recommendation::class, 'recommendation');
    }
    public function index()
    {
        $userRole = Auth::user()->role_id;
        if ($userRole === Role::IS_ADMIN || $userRole === Role::IS_VET)
        {
            return response()->json(Recommendation::all()->load('animal'));
        }
        $owner_id = Owner::where('user_id', Auth::user()->id)->pluck('id');
        $arrayAnimals = Animal::where('owner_id', $owner_id)->pluck('id')->toArray();
        $recommendation = Recommendation::whereIn('animal_id', $arrayAnimals)->get()->load('animal');
        return response()->json($recommendation);

    }
    public function show(Recommendation $recommendation)
    {
        return response()->json($recommendation->load('animal'));
    }

    public function store(StoreRecommendationRequest $request)
    {
        return response()->json(Recommendation::create($request->toArray()), 201);
    }

    public function update(UpdateRecommendationRequest $request, Recommendation $recommendation)
    {
        return response()->json($recommendation->update($request->toArray()));
    }

    public function destroy(Recommendation $recommendation)
    {
        return response()->json($recommendation->delete());
    }
}
