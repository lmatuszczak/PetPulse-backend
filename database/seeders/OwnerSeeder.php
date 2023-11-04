<?php

namespace Database\Seeders;

use App\Models\Owner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Owner::create(
            [
                'first_name' => 'adam',
                'last_name' => 'kowalski',
                'company_name' => 'xyz',
                'nip' => '6172175731',
                'regon' => '6172175731',
                'postal_code' => '63-210',
                'city' => 'zerkow',
                'street' => 'xyz',
                'phone' => '722105999',
                'user_id' => 1,
            ]
        );
    }
}
