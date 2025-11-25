<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FuelProviders>
 */
class FuelProvidersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $providers = fake()->unique()->randomElement(['Pertamina', 'Shell', 'BP', 'Total', 'VIVO']);
        return [
            'name' => $providers,
            'slug' => Str::slug($providers),
            'image' => fake()->imageUrl(),
            'description' => fake()->sentence(),
        ];
    }
}
