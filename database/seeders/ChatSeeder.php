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
            'message' => 'Dzień dobry,pisze w sprawie mojego psa, Reksia. Zauważyłam, że od wczoraj  mało je. Czy mogę umówić się na wizytę?',
        ]);
        Chat::create([
            'room_id' => 1,
            'user_id' => 2,
            'to_user_id' => 1,
            'message' => 'Dzień dobry Pani Katarzyno, oczywiście, możemy umówić wizytę. Czy Reksio miał jakieś inne objawy, np. wymioty lub biegunkę?',
        ]);
        Chat::create([
            'room_id' => 1,
            'user_id' => 1,
            'to_user_id' => 2,
            'message' => 'Nie, nie zauważyłam innych objawów, ale wydaje się być jakiś smutny i nie ma energii.',
        ]);
        Chat::create([
            'room_id' => 1,
            'user_id' => 2,
            'to_user_id' => 1,
            'message' => 'Rozumiem. Czy mogę prosić o numer mikrochipu Reksia, aby zweryfikować jego dane w naszym systemie?',
        ]);
        Chat::create([
            'room_id' => 1,
            'user_id' => 1,
            'to_user_id' => 2,
            'message' => 'Tak, numer to 982 000394857291.',
        ]);
        Chat::create([
            'room_id' => 1,
            'user_id' => 2,
            'to_user_id' => 1,
            'message' => ' Dziękuję, widzę go w systemie. Mamy wolny termin jutro o 10:00 rano lub po południu o 15:30. Która godzina byłaby dla Pani dogodna?',
        ]);
        Chat::create([
            'room_id' => 1,
            'user_id' => 1,
            'to_user_id' => 2,
            'message' => 'Jutro o 10:00 będzie idealnie.',
        ]);
        Chat::create([
            'room_id' => 1,
            'user_id' => 2,
            'to_user_id' => 1,
            'message' => 'Świetnie, zarezerwowałem wizytę na 10:00. Proszę pamiętać, aby na wizytę przynieść kartę zdrowia Reksia oraz listę ewentualnych leków, które przyjmuje. Czy jest coś jeszcze, w czym mogę pomóc?',
        ]);
        Chat::create([
            'room_id' => 1,
            'user_id' => 1,
            'to_user_id' => 2,
            'message' => 'Nie, to wszystko na chwilę obecną. Dziękuję bardzo i do zobaczenia jutro.',
        ]);
        Chat::create([
            'room_id' => 1,
            'user_id' => 2,
            'to_user_id' => 1,
            'message' => 'Nie ma za co, do zobaczenia jutro. Życzę miłego dnia.',
        ]);
    }
}
