<?php

namespace Database\Seeders;

use App\Models\AnimalType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnimalTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AnimalType::create(
            [
                'name' => 'dog'
            ]
        );
        AnimalType::create(
            [
                'name' => 'cat'
            ]
        );
        AnimalType::create(
            [
                'name' => 'mouse'
            ]
        );
        AnimalType::create(
            [
                'name' => 'spider'
            ]
        );
        AnimalType::create(
            [
                'name' => 'hamster'
            ]
        );
        AnimalType::create(
            [
                'name' => 'rabbit'
            ]
        );
        AnimalType::create(
            [
                'name' => 'horse'
            ]
        );
    }
}
