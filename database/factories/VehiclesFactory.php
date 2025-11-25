<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\VehicleBrands;
use App\Models\VehicleModels;
use App\Models\VehicleTypes;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicles>
 */
class VehiclesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id ?? 1,
            'vehicle_type_id' => VehicleTypes::inRandomOrder()->first()->id ?? 1,
            'Vehicle_brand_id' => VehicleBrands::inRandomOrder()->first()->id ?? 1,
            'vehicle_model_id' => VehicleModels::inRandomOrder()->first()->id ?? 1,
            'year' => fake()->numberBetween(2010, 2024),
            'tank_capacity' => fake()->randomFloat(1, 30, 80),
            'efficiency' => fake()->randomFloat(2, 8, 18),
            'registration_number' => strtoupper(fake()->bothify('B #### ???')),
        ];
    }
}
