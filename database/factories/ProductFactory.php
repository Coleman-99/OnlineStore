<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => fake()->numberBetween($min = 0, $max = 1000),
            'image' => fake()->imageUrl($width = 640, $height = 480),
            'name' => fake()->name(),
            'likes' => fake()->numberBetween($min = 0, $max = 1000),
            'price' => fake()->numberBetween($min = 15.50, $max = 50.00),
            'description' => fake()->paragraph(4),

        ];
    }
}
