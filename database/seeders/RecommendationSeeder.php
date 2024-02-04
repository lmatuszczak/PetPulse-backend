<?php

namespace Database\Seeders;

use App\Models\Recommendation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecommendationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Recommendation::create(
            [
                'name' => 'Zalecenie ZYX',
                'description' => 'Opis',
                'start_date' => now(),
                'end_date' => now(),
                'animal_id' => 1,
            ]
        );
        Recommendation::create(
            [
                'name' => 'Operacja czaszki-',
                'description' => 'Opis',
                'start_date' => now(),
                'end_date' => now(),
                'animal_id' => 1,
            ]
        );
        Recommendation::create(
            [
                'name' => 'Zalecenie XYZ',
                'description' => 'Opis',
                'start_date' => now(),
                'end_date' => now(),
                'animal_id' => 1,
            ]
        );
        Recommendation::create(
            [
                'name' => 'Zalecenie ZYX',
                'description' => 'Opis',
                'start_date' => now(),
                'end_date' => now(),
                'animal_id' => 2,
            ]
        );
        Recommendation::create(
            [
                'name' => 'Zalecenie ZYX',
                'description' => 'Opis',
                'start_date' => now(),
                'end_date' => now(),
                'animal_id' => 3,
            ]
        );
        Recommendation::create(
            [
                'name' => 'Zalecenie ZYX',
                'description' => 'Opis',
                'start_date' => now(),
                'end_date' => now(),
                'animal_id' => 4,
            ]
        );
        Recommendation::create(
            [
                'name' => 'Zalecenie',
                'description' => 'Opis',
                'start_date' => now(),
                'end_date' => now(),
                'animal_id' => 5,
            ]
        );
    }
}
