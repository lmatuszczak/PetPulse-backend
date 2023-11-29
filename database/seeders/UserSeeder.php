<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'email' => 'admin@przyklad.pl',
            'name' => 'admin',
            'password' => Hash::make('Password1!'),
            'role_id' => Role::IS_ADMIN,
        ]);
        User::create([
            'email' => 'vet@przyklad.pl',
            'name' => 'vet',
            'password' => Hash::make('Password1!'),
            'role_id' => Role::IS_VET,
        ]);
        User::create([
            'email' => 'user@przyklad.pl',
            'name' => 'user',
            'password' => Hash::make('Password1!'),
            'role_id' => Role::IS_USER,
        ]);
    }
}
