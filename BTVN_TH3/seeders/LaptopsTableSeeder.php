<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Laptop;

class LaptopsTableSeeder extends Seeder
{
    public function run(): void
    {
        Laptop::insert([
            ['brand' => 'Dell', 'model' => 'Inspiron 15 3000', 'specifications' => 'i5, 8GB RAM, 256GB SSD', 'rental_status' => false, 'renter_id' => null],
            ['brand' => 'HP', 'model' => 'Pavilion x360', 'specifications' => 'i7, 16GB RAM, 512GB SSD', 'rental_status' => true, 'renter_id' => 201],
        ]);
    }
}
