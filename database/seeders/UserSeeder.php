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
        User::create([
            'email' => 'user1@przyklad.pl',
            'name' => 'user1',
            'password' => Hash::make('Password1!'),
            'role_id' => Role::IS_USER,
        ]);
        User::create([
            'email' => 'user2@przyklad.pl',
            'name' => 'user2',
            'password' => Hash::make('Password1!'),
            'role_id' => Role::IS_USER,
        ]);
        User::create([
            'email' => 'user3@przyklad.pl',
            'name' => 'user3',
            'password' => Hash::make('Password1!'),
            'role_id' => Role::IS_USER,
        ]);
        User::create([
            'email' => 'user4@przyklad.pl',
            'name' => 'user4',
            'password' => Hash::make('Password1!'),
            'role_id' => Role::IS_USER,
        ]);
    }
}
