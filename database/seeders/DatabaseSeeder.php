<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(
            [
                RoleSeeder::class,
                UserSeeder::class,
                OwnerSeeder::class,
                BreedSeeder::class,
                AnimalTypeSeeder::class,
                AnimalSeeder::class,
                VisitSeeder::class,
                CalendarSeeder::class,
                TestSeeder::class,
                MedicalTreatmentSeeder::class,
                RecommendationSeeder::class,
                ChatSeeder::class,
            ]
        );
    }
}
