<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\seeders_prac01\MedicinesTableSeeder;
use Database\Seeders\seeders_prac01\SalesTableSeeder;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            MedicinesTableSeeder::class,
            SalesTableSeeder::class,
        ]);
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
