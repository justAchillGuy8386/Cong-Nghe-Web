<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie;

class MoviesTableSeeder extends Seeder
{
    public function run(): void
    {
        Movie::insert([
            ['title' => 'Avengers: Endgame', 'director' => 'Anthony và Joe Russo', 'release_date' => '2019-04-26', 'duration' => 181, 'cinema_id' => 601],
            ['title' => 'Inception', 'director' => 'Christopher Nolan', 'release_date' => '2010-07-16', 'duration' => 148, 'cinema_id' => 601],
        ]);
    }
}

