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
        Owner::create(
            [
                'first_name' => 'Jan',
                'last_name' => 'Nowak',
                'company_name' => 'xyz',
                'nip' => '6172175732',
                'regon' => '6172175732',
                'postal_code' => '63-210',
                'city' => 'zerkow',
                'street' => 'xyz',
                'phone' => '722105998',
                'user_id' => 2,
            ]
        );
        Owner::create(
            [
                'first_name' => 'Tomasz',
                'last_name' => 'Makowski',
                'company_name' => 'xyz',
                'nip' => '6172175733',
                'regon' => '6172175733',
                'postal_code' => '63-210',
                'city' => 'zerkow',
                'street' => 'xyz',
                'phone' => '722105997',
                'user_id' => 3,
            ]
        );
        Owner::create(
            [
                'first_name' => 'Dominik',
                'last_name' => 'Hojnacki',
                'company_name' => 'xyz',
                'nip' => '6172175734',
                'regon' => '6172175734',
                'postal_code' => '63-210',
                'city' => 'zerkow',
                'street' => 'xyz',
                'phone' => '722105996',
                'user_id' => 4,
            ]
        );
        Owner::create(
            [
                'first_name' => 'Maciej',
                'last_name' => 'Lisiecki',
                'company_name' => 'xyz',
                'nip' => '6172175735',
                'regon' => '6172175735',
                'postal_code' => '63-210',
                'city' => 'zerkow',
                'street' => 'xyz',
                'phone' => '722105995',
                'user_id' => 5,
            ]
        );
        Owner::create(
            [
                'first_name' => 'Klaudia',
                'last_name' => 'Piskorska',
                'company_name' => 'xyz',
                'nip' => '6172175736',
                'regon' => '6172175736',
                'postal_code' => '63-210',
                'city' => 'zerkow',
                'street' => 'xyz',
                'phone' => '722105994',
                'user_id' => 6,
            ]
        );
    }
}
