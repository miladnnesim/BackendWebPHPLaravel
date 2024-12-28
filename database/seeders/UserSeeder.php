<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@ehb.be',
            'password' => Hash::make('Password!321'), // Veilige hashing
            'role' => 'admin',
            'username' => 'admin',
            'riot_id' => null,
            'birthday' => null,
            'profile_photo' => null,
            'about_me' => null,
        ]);
    }
}
