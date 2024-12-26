<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\News;

class NewsSeeder extends Seeder
{
    public function run()
    {
        News::create([
            'title' => 'Nieuwe update beschikbaar!',
            'image' => 'news_images/update.png',
            'content' => 'Er is een nieuwe update uitgerold met verbeteringen in het matchmaking systeem.',
            'publication_date' => now(),
        ]);

        News::create([
            'title' => 'Kersttoernooi aangekondigd',
            'image' => 'news_images/christmas_tournament.png',
            'content' => 'Doe mee aan ons jaarlijkse kersttoernooi met geweldige prijzen!',
            'publication_date' => now(),
        ]);
    }
}
