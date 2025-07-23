<?php
// database/seeders/TeamSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Team;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Team::create([
            'name' => 'Scuderia Ferrari',
            'base_location' => 'Maranello, Italy',
            'team_principal' => 'Frédéric Vasseur',
            'chassis_name' => 'SF-24',
            'power_unit' => 'Ferrari',
        ]);

        Team::create([
            'name' => 'Mercedes-AMG PETRONAS F1 Team',
            'base_location' => 'Brackley, United Kingdom',
            'team_principal' => 'Toto Wolff',
            'chassis_name' => 'W15',
            'power_unit' => 'Mercedes',
        ]);

        Team::create([
            'name' => 'Oracle Red Bull Racing',
            'base_location' => 'Milton Keynes, United Kingdom',
            'team_principal' => 'Christian Horner',
            'chassis_name' => 'RB20',
            'power_unit' => 'Honda RBPT',
        ]);
    }
}
