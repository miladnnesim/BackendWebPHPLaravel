<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Faq;

class FaqSeeder extends Seeder
{
    public function run()
    {
        Faq::create([
            'category_id' => 1,
            'question' => 'Wat is deze website?',
            'answer' => 'Deze website is bedoeld om spelers te helpen teams en scrims te organiseren.',
        ]);

        Faq::create([
            'category_id' => 2,
            'question' => 'Hoe organiseer ik een scrim?',
            'answer' => 'Ga naar de LFT-pagina en klik op de knop om een scrim te organiseren.',
        ]);
    }
}
