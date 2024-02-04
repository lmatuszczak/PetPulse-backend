<?php

namespace Database\Seeders;

use App\Models\MedicalTreatment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MedicalTreatmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MedicalTreatment::create(
            [
                'name' => 'Szczepienie ZYX',
                'description' => 'Opis',
                'start_date' => now(),
                'end_date' => now(),
                'animal_id' => 1,
                'visit_id' => 1,
            ]
        );
        MedicalTreatment::create(
            [
                'name' => 'Operacja czaszki-',
                'description' => 'Opis',
                'start_date' => now(),
                'end_date' => now(),
                'animal_id' => 1,
                'visit_id' => 1,
            ]
        );
        MedicalTreatment::create(
            [
                'name' => 'Szczepienie XYZ',
                'description' => 'Opis',
                'start_date' => now(),
                'end_date' => now(),
                'animal_id' => 1,
                'visit_id' => 1,
            ]
        );
        MedicalTreatment::create(
            [
                'name' => 'Szczepienie ZYX',
                'description' => 'Opis',
                'start_date' => now(),
                'end_date' => now(),
                'animal_id' => 2,
                'visit_id' => 1,
            ]
        );
        MedicalTreatment::create(
            [
                'name' => 'Szczepienie ZYX',
                'description' => 'Opis',
                'start_date' => now(),
                'end_date' => now(),
                'animal_id' => 3,
                'visit_id' => 1,
            ]
        );
        MedicalTreatment::create(
            [
                'name' => 'Szczepienie ZYX',
                'description' => 'Opis',
                'start_date' => now(),
                'end_date' => now(),
                'animal_id' => 4,
                'visit_id' => 1,
            ]
        );
        MedicalTreatment::create(
            [
                'name' => 'morfologia',
                'description' => 'Opis',
                'start_date' => now(),
                'end_date' => now(),
                'animal_id' => 5,
                'visit_id' => 1,
            ]
        );
    }
}
