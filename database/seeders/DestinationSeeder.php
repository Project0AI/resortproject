<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Destination;

class DestinationSeeder extends Seeder
{
    public function run(): void
    {
        Destination::create([
            'name' => 'Bali Beach',
            'picture' => 'https://example.com/bali.jpg',
        ]);

        Destination::create([
            'name' => 'Swiss Alps',
            'picture' => 'https://example.com/swiss.jpg',
        ]);
    }
}
