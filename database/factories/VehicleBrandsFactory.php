<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\VehicleBrands>
 */
class VehicleBrandsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $brands =  fake()->unique()->randomElement([
            'Honda',
            'Toyota',
            'Suzuki',
            'Yamaha',
            'Mitsubishi',
            'Daihatsu',
            'Wuling'
        ]);
        return [
            'name' => $brands,
            'slug' => Str::slug($brands),
            'image' => fake()->imageUrl(),
            'description' => fake()->sentence()
        ];
    }
}
