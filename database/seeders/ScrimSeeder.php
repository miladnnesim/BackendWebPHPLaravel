<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Scrim; 
use App\Models\User;

class ScrimSeeder extends Seeder
{
    public function run()
    {
        $admin = User::where('email', 'admin@ehb.be')->first(); 

        Scrim::create([
            'type' => 'scrim',
            'date' => '2024-12-25',
            'start_time' => '20:00:00',
            'end_time' => '22:00:00',
            'players_needed' => 5,
            'language' => 'en',
            'min_rank' => 'diamond',
            'max_rank' => 'ascendant',
            'notes' => 'Competitive scrim looking for serious players.',
            'organizer_id' => $admin->id, 
        ]);

        Scrim::create([
            'type' => '5stack',
            'date' => '2024-12-26',
            'start_time' => '18:00:00',
            'end_time' => '20:00:00',
            'players_needed' => 3,
            'language' => 'nl',
            'min_rank' => 'gold',
            'max_rank' => 'platinum',
            'notes' => 'Casual 5-stack for ranked games.',
            'organizer_id' => $admin->id, 
        ]);
    }
}
