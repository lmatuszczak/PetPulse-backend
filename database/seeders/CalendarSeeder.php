<?php

namespace Database\Seeders;

use App\Models\Calendar;
use App\Models\Role;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CalendarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Calendar::create(
            [
                'name' => 'Wydarzenie1',
                'description' => 'Opis1',
                'start_date' => Carbon::now(),
                'end_date' => Carbon::now()->addHour(),
                'user_id' => 3,
                'animal_id' => 3,
                'visit_id' => 1,
            ]
        );

    }
}
