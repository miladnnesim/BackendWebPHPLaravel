<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Duo;
use App\Models\User;

class DuoSeeder extends Seeder
{
    public function run()
    {
        $user = User::first(); // Zorg dat er een gebruiker bestaat

        Duo::create([
            'user_id' => $user->id,
            'rank' => 'Platinum',
            'type' => 'competitive',
        ]);

        Duo::create([
            'user_id' => $user->id,
            'rank' => 'Gold',
            'type' => 'casual',
        ]);
    }
}
