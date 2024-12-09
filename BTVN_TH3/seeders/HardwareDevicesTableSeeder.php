<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HardwareDevice;

class HardwareDevicesTableSeeder extends Seeder
{
    public function run(): void
    {
        HardwareDevice::insert([
            ['device_name' => 'Logitech G502', 'type' => 'Mouse', 'status' => true, 'center_id' => 401],
            ['device_name' => 'Razer BlackWidow', 'type' => 'Keyboard', 'status' => false, 'center_id' => 401],
        ]);
    }
}
