<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ItCenter;

class ItCentersTableSeeder extends Seeder
{
    public function run(): void
    {
        ItCenter::insert([
            ['name' => 'Trung tâm Tin học ABC', 'location' => '456 Đường Y, TP.HCM', 'contact_email' => 'contact@abc.com'],
            ['name' => 'Trung tâm Công nghệ DEF', 'location' => '789 Đường Z, Đà Nẵng', 'contact_email' => 'info@def.com'],
        ]);
    }
}
