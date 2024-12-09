<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Renter;

class RentersTableSeeder extends Seeder
{
    public function run(): void
    {
        Renter::insert([
            ['name' => 'Nguyễn Văn A', 'phone_number' => '0987654321', 'email' => 'nva@gmail.com'],
            ['name' => 'Trần Thị B', 'phone_number' => '0912345678', 'email' => 'ttb@gmail.com'],
        ]);
    }
}
