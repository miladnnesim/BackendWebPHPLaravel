<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create(['name' => 'Algemene vragen']);
        Category::create(['name' => 'Scrims']);
        Category::create(['name' => 'Duo\'s']);
    }
}
