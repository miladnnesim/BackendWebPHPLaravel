<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Duo;

class DuoSeeder extends Seeder
{
    public function run()
    {
        Duo::create([
            'player' => 'PlayerOne',
            'rating' => 'Diamond 2',
            'wants_to_play' => 'Competitive',
            'language' => 'en',
            'notes' => 'Looking for an aggressive duelist main.',
        ]);

        Duo::create([
            'player' => 'PlayerTwo',
            'rating' => 'Platinum 3',
            'wants_to_play' => 'Casual',
            'language' => 'nl',
            'notes' => 'Casual play with a focus on communication.',
        ]);
    }
}
