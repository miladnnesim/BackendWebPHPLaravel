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
            'image' => '620096e194b565781f3a6fed5285d4840b000fe3-1920x1080.jpg',
            'content' => 'Er is een nieuwe update uitgerold met verbeteringen in het matchmaking systeem.',
            'publication_date' => now(),
        ]);

        News::create([
            'title' => 'Kersttoernooi aangekondigd',
            'image' => 'b551a0c7-6ad0-47b3-4883-08d9b4ff248d_1280_720.webp',
            'content' => 'Doe mee aan ons jaarlijkse kersttoernooi met geweldige prijzen!',
            'publication_date' => now()->subDays(1),
        ]);

       
    }
}
