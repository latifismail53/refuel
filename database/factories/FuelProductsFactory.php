<?php

namespace Database\Factories;

use App\Models\FuelProviders;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FuelProducts>
 */
class FuelProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $products = [
            ['name' => 'Pertalite', 'octane' => '90'],
            ['name' => 'Pertamax', 'octane' => '92'],
            ['name' => 'Shell Super', 'octane' => '92'],
            ['name' => 'VIVO Revvo 89', 'octane' => '89'],
        ];
        $product = fake()->randomElement($products);
        return [
            'provider_id' => FuelProviders::inRandomOrder()->first()->id ?? 1,
            'name' => $product['name'],
            'slug' => $product['name'],
            'octane_number' => $product['octane'],
            'price_per_liter' => fake()->numberBetween(12000, 18000),
            'description' => fake()->words(3, true),
        ];
    }
}
