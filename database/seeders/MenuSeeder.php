<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    public function run(): void
    {
        Menu::create([
            'resort_id' => 1,
            'name' => 'Seafood Buffet',
            'description' => 'Fresh seafood every evening'
        ]);

        Menu::create([
            'resort_id' => 1,
            'name' => 'Tropical Drinks',
            'description' => 'Exotic cocktails and smoothies'
        ]);

        Menu::create([
            'resort_id' => 2,
            'name' => 'Swiss Fondue Dinner',
            'description' => 'Traditional cheese fondue'
        ]);
    }
}
