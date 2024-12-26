<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    public function run()
    {
        Contact::create([
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'message' => 'Ik heb een vraag over het organiseren van een scrim.',
        ]);

        Contact::create([
            'name' => 'Jane Smith',
            'email' => 'janesmith@example.com',
            'message' => 'Kan ik een duo vinden met dezelfde rank als ik?',
        ]);
    }
}
