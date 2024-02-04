<?php

namespace Database\Seeders;

use App\Models\Test;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Test::create(
            [
                'name' => 'morfologia',
                'description' => 'Jakis tam wynik',
                'start_date' => now(),
                'end_date' => now(),
                'animal_id' => 1,
                'visit_id' => 1,
            ]
        );
        Test::create(
            [
                'name' => 'RTG',
                'description' => 'Jakis tam wynik',
                'start_date' => now(),
                'end_date' => now(),
                'animal_id' => 1,
                'visit_id' => 1,
            ]
        );
        Test::create(
            [
                'name' => 'USG',
                'description' => 'Jakis tam wynik',
                'start_date' => now(),
                'end_date' => now(),
                'animal_id' => 1,
                'visit_id' => 1,
            ]
        );
        Test::create(
            [
                'name' => 'morfologia',
                'description' => 'Jakis tam wynik',
                'start_date' => now(),
                'end_date' => now(),
                'animal_id' => 2,
                'visit_id' => 1,
            ]
        );
        Test::create(
            [
                'name' => 'morfologia',
                'description' => 'Jakis tam wynik',
                'start_date' => now(),
                'end_date' => now(),
                'animal_id' => 3,
                'visit_id' => 1,
            ]
        );
        Test::create(
            [
                'name' => 'morfologia',
                'description' => 'Jakis tam wynik',
                'start_date' => now(),
                'end_date' => now(),
                'animal_id' => 4,
                'visit_id' => 1,
            ]
        );
        Test::create(
            [
                'name' => 'morfologia',
                'description' => 'Jakis tam wynik',
                'start_date' => now(),
                'end_date' => now(),
                'animal_id' => 5,
                'visit_id' => 1,
            ]
        );
    }
}
