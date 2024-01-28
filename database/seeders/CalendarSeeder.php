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
            ]
        );Calendar::create(
            [
                'name' => 'Wydarzenie2',
                'description' => 'Opis2',
                'start_date' => Carbon::now(),
                'end_date' => Carbon::now()->addHour(),
                'user_id' => 2,
                'animal_id' => 2,
            ]
        );Calendar::create(
            [
                'name' => 'Wydarzenie3',
                'description' => 'Opis3',
                'start_date' => Carbon::now(),
                'end_date' => Carbon::now()->addHour(),
                'user_id' => 1,
                'animal_id' => 1,
            ]
        );
        Calendar::create(
            [
                'name' => 'Wydarzenie4',
                'description' => 'Opis4',
                'start_date' => Carbon::now(),
                'end_date' => Carbon::now()->addHour(),
                'user_id' => 3,
                'animal_id' => 3,
            ]
        );
        Calendar::create(
            [
                'name' => 'Wydarzenie5',
                'description' => 'Opis5',
                'start_date' => Carbon::now(),
                'end_date' => Carbon::now()->addHour(),
                'user_id' => 2,
                'animal_id' => 2,
            ]
        );
        Calendar::create(
            [
                'name' => 'Wydarzenie6',
                'description' => 'Opis6',
                'start_date' => Carbon::now(),
                'end_date' => Carbon::now()->addHour(),
                'user_id' => 1,
                'animal_id' => 1,
            ]
        );

    }
}
