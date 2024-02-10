<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Animal;
use App\Models\Calendar;
use App\Models\MedicalTreatment;
use App\Models\Recommendation;
use App\Models\Test;
use App\Models\Visit;
use Illuminate\Http\Request;

class VisitPanelController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Visit::class, 'visit');
    }

    public function show(Visit $visit)
    {
        $visitData = $visit->load('user');
        $calendar = Calendar::where('visit_id', $visit->id)->get()->toArray();
        $recommendation = Recommendation::where('visit_id', $visit->id)->get()->toArray();
        $medicalTreatment = MedicalTreatment::where('visit_id', $visit->id)->get()->toArray();
        $animal = Animal::where('id', $visit->animal_id)->get()->load(['animalType', 'breed', 'owner'])->toArray();
        $visitData['calendar'] = $calendar;
        $visitData['recommendation'] = $recommendation;
        $visitData['medicalTreatment'] = $medicalTreatment;
        $visitData['animal'] = $animal;
        return response()->json($visitData);
    }
}
