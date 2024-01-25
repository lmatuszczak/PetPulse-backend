<?php

namespace Database\Seeders;

use App\Models\Breed;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BreedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Breed::create(
            [
                'name' => 'Siberian Husky',
            ]
        );
        Breed::create(
            [
                'name' => 'Maine Coon',
            ]
        );
        Breed::create(
            [
                'name' => 'Persian',
            ]
        );
        Breed::create(
            [
                'name' => 'Arabian',
            ]
        );
        Breed::create(
            [
                'name' => 'Clydesdale',
            ]
        );
        Breed::create(
            [
                'name' => 'Golden Retriever',
            ]
        );
        Breed::create(
            [
                'name' => 'Appaloosa',
            ]
        );
        Breed::create(
            [
                'name' => 'Sphynx',
            ]
        );

    }
}
