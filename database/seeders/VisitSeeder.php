<?php

namespace Database\Seeders;

use App\Models\Visit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VisitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Visit::create([
            'name' => 'Wizyta 1',
            'description' => 'Opis wizyty',
            'status' => 'zaplanowana',
            'user_id' => 3,
            'animal_id' => 3,
            'start_date' => now(),
            'end_date' => now(),
        ]);
    }
}
