<?php

namespace Database\Seeders;

use App\Models\FuelProviders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FuelProvidersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FuelProviders::factory(5)->create();
    }
}
