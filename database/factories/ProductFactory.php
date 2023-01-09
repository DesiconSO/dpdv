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
            'name' => fake('pt_BR')->sentence(4),
            'sku' => fake()->randomNumber(5, false),
            'price' => fake()->randomFloat(2, 5, 2000),
        ];
    }
}
