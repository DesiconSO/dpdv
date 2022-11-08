<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Discount>
 */
class DiscountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id'       => Factory::factoryForModel(User::class),
            'product_id'    => Factory::factoryForModel(Product::class),
            'max_amount'    => $this->faker->randomNumber(4, false),
            'discount'      => $this->faker->randomFloat(1, 1, 15),
        ];
    }
}
