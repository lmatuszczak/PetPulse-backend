<?php

namespace Database\Seeders;

use App\Models\Chat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Chat::create([
            'room_id' => 1,
            'user_id' => 1,
            'to_user_id' => 2,
            'message' => '1 wiadomosc',
        ]);
        Chat::create([
            'room_id' => 1,
            'user_id' => 2,
            'to_user_id' => 1,
            'message' => '2 wiadomosc',
        ]);
        Chat::create([
            'room_id' => 1,
            'user_id' => 1,
            'to_user_id' => 2,
            'message' => '3 wiadomosc',
        ]);
        Chat::create([
            'room_id' => 1,
            'user_id' => 2,
            'to_user_id' => 1,
            'message' => '4 wiadomosc',
        ]);
        Chat::create([
            'room_id' => 1,
            'user_id' => 1,
            'to_user_id' => 2,
            'message' => '5 wiadomosc',
        ]);
        Chat::create([
            'room_id' => 1,
            'user_id' => 2,
            'to_user_id' => 1,
            'message' => '6 wiadomosc',
        ]);
    }
}
