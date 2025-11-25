<?php

namespace Database\Factories;

use App\Models\FuelProducts;
use App\Models\Vehicles;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RefuelTransactions>
 */
class RefuelTransactionsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $volume = fake()->randomFloat(2, 10, 60);
        $price_per_liter = fake()->numberBetween(11500, 16500);
        return [
            'vehicle_id' => Vehicles::inRandomOrder()->first()->id ?? 1,
            'product_id' => FuelProducts::inRandomOrder()->first()->id ?? 1,
            'refueled_at' => fake()->dateTimeBetween('-1 year', 'now'),
            'amount' => $volume * $price_per_liter,
            'volume' => $volume,
            'price_per_liter' => $price_per_liter,
            'odometer' => fake()->numberBetween(10000, 120000),
            'notes' => fake()->optional()->realText(20),
        ];
    }
}
