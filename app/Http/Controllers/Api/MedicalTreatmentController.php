<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMedicalTreatmentRequest;
use App\Http\Requests\UpdateMedicalTreatmentRequest;
use App\Models\Animal;
use App\Models\MedicalTreatment;
use App\Models\Owner;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;

class MedicalTreatmentController extends Controller
{
    public function index()
    {
        $userRole = Auth::user()->role_id;
        if ($userRole === Role::IS_ADMIN || $userRole === Role::IS_VET)
        {
            return response()->json(MedicalTreatment::all()->load('animal'));
        }
        $owner_id = Owner::where('user_id', Auth::user()->id)->pluck('id');
        $arrayAnimals = Animal::where('owner_id', $owner_id)->pluck('id')->toArray();
        $medicalTreatment = MedicalTreatment::whereIn('animal_id', $arrayAnimals)->get()->load('animal');
        return response()->json($medicalTreatment);

    }

    public function show(MedicalTreatment $medicalTreatment)
    {
        return response()->json($medicalTreatment->load('animal'));
    }

    public function store(StoreMedicalTreatmentRequest $request)
    {
        return response()->json(MedicalTreatment::create($request->toArray()), 201);
    }

    public function update(UpdateMedicalTreatmentRequest $request, MedicalTreatment $medicalTreatment)
    {
        return response()->json($medicalTreatment->update($request->toArray()));
    }

    public function destroy(MedicalTreatment $medicalTreatment)
    {
        return response()->json($medicalTreatment->delete());
    }
}

