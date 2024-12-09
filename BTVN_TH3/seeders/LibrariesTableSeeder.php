<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Library;

class LibrariesTableSeeder extends Seeder
{
    public function run(): void
    {
        Library::insert([
            ['name' => 'Thư viện IT Đại học ABC', 'address' => '123 Đường X, Hà Nội', 'contact_number' => '0123456789'],
            ['name' => 'Thư viện Đại học XYZ', 'address' => '789 Đường Y, TP.HCM', 'contact_number' => '0987654321'],
        ]);
    }
}
