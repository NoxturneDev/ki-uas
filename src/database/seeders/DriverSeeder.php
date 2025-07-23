<?php
// database/seeders/DriverSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Driver;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Driver::create([
            'name' => 'Charles Leclerc',
            'nationality' => 'Monegasque',
            'date_of_birth' => '1997-10-16',
            'driver_number' => 16,
        ]);

        Driver::create([
            'name' => 'Carlos Sainz Jr.',
            'nationality' => 'Spanish',
            'date_of_birth' => '1994-09-01',
            'driver_number' => 55,
        ]);

        Driver::create([
            'name' => 'Lewis Hamilton',
            'nationality' => 'British',
            'date_of_birth' => '1985-01-07',
            'driver_number' => 44,
        ]);

        Driver::create([
            'name' => 'George Russell',
            'nationality' => 'British',
            'date_of_birth' => '1998-02-15',
            'driver_number' => 63,
        ]);

        Driver::create([
            'name' => 'Max Verstappen',
            'nationality' => 'Dutch',
            'date_of_birth' => '1997-09-30',
            'driver_number' => 1,
        ]);

        Driver::create([
            'name' => 'Sergio Pérez',
            'nationality' => 'Mexican',
            'date_of_birth' => '1990-01-26',
            'driver_number' => 11,
        ]);
    }
}
