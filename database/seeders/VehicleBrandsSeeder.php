<?php

namespace Database\Seeders;

use App\Models\VehicleBrands;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehicleBrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        VehicleBrands::factory(7)->create();
    }
}
