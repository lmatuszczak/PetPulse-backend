<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCalendarRequest;
use App\Http\Requests\UpdateCalendarRequest;
use App\Models\Animal;
use App\Models\Calendar;
use App\Models\Owner;
use App\Models\Role;
use App\Models\User;
use App\Models\Visit;
use Illuminate\Support\Facades\Auth;

class CalendarController extends Controller
{

    public function __construct()
    {
        $this->authorizeResource(Calendar::class, 'calendar');
    }
    public function index()
    {
        $userRole = Auth::user()->role_id;
        if ($userRole === Role::IS_ADMIN || $userRole === Role::IS_VET) {
            return response()->json(Calendar::all()->load('user', 'animal'));
        }
        $owner_id = Owner::where('user_id', Auth::user()->id)->pluck('id');
        $arrayAnimals = Animal::where('owner_id', $owner_id)->pluck('id')->toArray();
        $calendar = Calendar::whereIn('animal_id', $arrayAnimals)->get()->load('user', 'animal');
        return response()->json($calendar);

    }

    public function show(Calendar $calendar)
    {
        return response()->json($calendar->load('user', 'animal'));
    }

    public function store(StoreCalendarRequest $request)
    {
            $visit = Visit::create([
                'name' => $request->name,
                'description' => $request->description,
                'status' => 'Zaplanowany',
                'animal_id' => $request->animal_id,
                'user_id' => $request->user_id,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                ]);
            $calendarData = $request->toArray();
            $calendarData['visit_id'] = $visit->id;

            return response()->json(Calendar::create($calendarData), 201);
    }

    public function update(UpdateCalendarRequest $request, Calendar $calendar)
    {
            return response()->json($calendar->update($request->toArray()));
    }

    public function destroy(Calendar $calendar)
    {
        return response()->json($calendar->delete());
    }
}
