<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\VehicleTypes>
 */
class VehicleTypesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $types = fake()->unique()->randomElement(['Car', 'Motorcycle', 'Truck', 'Bus', 'Pickup']);
        return [
            'name' => $types,
        ];
    }
}
