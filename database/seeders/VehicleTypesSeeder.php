<?php

namespace Database\Seeders;

use App\Models\VehicleTypes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehicleTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        VehicleTypes::factory(5)->create();
    }
}
