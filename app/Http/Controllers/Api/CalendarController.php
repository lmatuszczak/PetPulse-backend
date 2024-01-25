<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Animal;
use App\Models\Calendar;
use App\Models\Owner;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;

class CalendarController extends Controller
{
    public function index()
    {
        $userRole = Auth::user()->role_id;
        if ($userRole === Role::IS_ADMIN || $userRole === Role::IS_VET)
        {
            return response()->json(Calendar::all()->load('user', 'animal'));
        }
            $owner_id = Owner::where('user_id', Auth::user()->id)->pluck('id');
            $arrayAnimals = Animal::where('owner_id', $owner_id)->pluck('id')->toArray();
            $calendar = Calendar::whereIn('animal_id', $arrayAnimals)->get()->load('user', 'animal');
            return response()->json($calendar);

    }
}
