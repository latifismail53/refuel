<?php

namespace Database\Factories;

use App\Models\VehicleBrands;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\VehicleModels>
 */
class VehicleModelsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $models = fake()->unique()->randomElement([
            'Brio',
            'Jazz',
            'Avanza',
            'Xenia',
            'Mio',
            'Vario',
            'Beat',
            'Ertiga',
            'Civic',
            'Rush',
            'Xpander'
        ]);
        return [
            'vehicle_brand_id' => VehicleBrands::inRandomOrder()->first()->id ?? 1,
            'name' => $models,
            'slug' => Str::slug($models),
            'image' => fake()->imageUrl(),
            'description' => fake()->sentence()
        ];
    }
}
