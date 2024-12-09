<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cinema;

class CinemasTableSeeder extends Seeder
{
    public function run(): void
    {
        Cinema::insert([
            ['name' => 'CGV Vincom', 'location' => 'Vincom Center, Hà Nội', 'total_seats' => 300],
            ['name' => 'Lotte Cinema', 'location' => 'Lotte Mart, TP.HCM', 'total_seats' => 250],
            ['name' => 'Galaxy Cinema', 'location' => 'Galaxy Trung Hòa, Hà Nội', 'total_seats' => 200],
            ['name' => 'BHD Star', 'location' => 'BHD Star, TP.HCM', 'total_seats' => 400],
        ]);
    }
}

