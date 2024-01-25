<?php

namespace Database\Seeders;

use App\Models\Animal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Animal::create(
            [
                'name' => 'Luna',
                'microchip_number' => 123456789012345,
                'weight' => 50,
                'age' => 5,
                'color' => 'black',
                'gender' => 'XYZ',
                'animal_type_id' => 1,
                'breed_id' => 1,
                'owner_id' => 1,
            ]
        );

        Animal::create(
            [
                'name' => 'Luna2',
                'microchip_number' => 123456789012346,
                'weight' => 50,
                'age' => 5,
                'color' => 'black',
                'gender' => 'XYZ',
                'animal_type_id' => 2,
                'breed_id' => 2,
                'owner_id' => 2,
            ]
        );
        Animal::create(
            [
                'name' => 'Luna3',
                'microchip_number' => 123456789012347,
                'weight' => 50,
                'age' => 5,
                'color' => 'black',
                'gender' => 'XYZ',
                'animal_type_id' => 3,
                'breed_id' => 3,
                'owner_id' => 3,
            ]
        );
        Animal::create(
            [
                'name' => 'Luna2',
                'microchip_number' => 123456789012348,
                'weight' => 50,
                'age' => 5,
                'color' => 'black',
                'gender' => 'XYZ',
                'animal_type_id' => 4,
                'breed_id' => 4,
                'owner_id' => 4,
            ]
        );
        Animal::create(
            [
                'name' => 'Luna2',
                'microchip_number' => 123456789012349,
                'weight' => 50,
                'age' => 5,
                'color' => 'black',
                'gender' => 'XYZ',
                'animal_type_id' => 5,
                'breed_id' => 5,
                'owner_id' => 5,
            ]
        );
        Animal::create(
            [
                'name' => 'Luna2',
                'microchip_number' => 123456789012340,
                'weight' => 50,
                'age' => 5,
                'color' => 'black',
                'gender' => 'XYZ',
                'animal_type_id' => 6,
                'breed_id' => 6,
                'owner_id' => 6,
            ]
        );
    }
}
