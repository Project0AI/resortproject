<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Resort;

class ResortSeeder extends Seeder
{
    public function run(): void
    {
        Resort::create([
            'destination_id' => 1, // Bali Beach
            'name' => 'Sunrise Resort',
            'picture' => 'https://example.com/sunrise.jpg',
            'location' => 'Bali, Indonesia',
            'phone_number' => '123-456-7890',
        ]);

        Resort::create([
            'destination_id' => 2, // Swiss Alps
            'name' => 'Alpine Lodge',
            'picture' => 'https://example.com/alpine.jpg',
            'location' => 'Zermatt, Switzerland',
            'phone_number' => '987-654-3210',
        ]);
    }
}
