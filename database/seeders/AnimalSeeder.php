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
    }
}
