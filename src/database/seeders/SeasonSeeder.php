<?php
// database/seeders/SeasonSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Season;
use App\Models\Team;
use App\Models\Driver;
use App\Models\Car;

class SeasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get teams
        $ferrari = Team::where('name', 'Scuderia Ferrari')->first();
        $mercedes = Team::where('name', 'Mercedes-AMG PETRONAS F1 Team')->first();
        $redbull = Team::where('name', 'Oracle Red Bull Racing')->first();

        // Get drivers
        $leclerc = Driver::where('driver_number', 16)->first();
        $sainz = Driver::where('driver_number', 55)->first();
        $hamilton = Driver::where('driver_number', 44)->first();
        $russell = Driver::where('driver_number', 63)->first();
        $verstappen = Driver::where('driver_number', 1)->first();
        $perez = Driver::where('driver_number', 11)->first();

        // Get cars
        $cars = Car::all();

        // Create 2024 Season entries
        Season::create(['year' => 2024, 'team_id' => $ferrari->id, 'driver_id' => $leclerc->id, 'car_id' => $cars[0]->id]);
        Season::create(['year' => 2024, 'team_id' => $ferrari->id, 'driver_id' => $sainz->id, 'car_id' => $cars[1]->id]);
        Season::create(['year' => 2024, 'team_id' => $mercedes->id, 'driver_id' => $hamilton->id, 'car_id' => $cars[2]->id]);
        Season::create(['year' => 2024, 'team_id' => $mercedes->id, 'driver_id' => $russell->id, 'car_id' => $cars[3]->id]);
        Season::create(['year' => 2024, 'team_id' => $redbull->id, 'driver_id' => $verstappen->id, 'car_id' => $cars[4]->id]);
        Season::create(['year' => 2024, 'team_id' => $redbull->id, 'driver_id' => $perez->id, 'car_id' => $cars[5]->id]);
    }
}