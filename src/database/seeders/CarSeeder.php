<?php
// database/seeders/CarSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Car;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create 6 cars for the 2024 season
        for ($i = 1; $i <= 6; $i++) {
            Car::create([
                'serial_number' => 'CH-2024-0' . $i,
                'status' => 'Active',
            ]);
        }
    }
}
