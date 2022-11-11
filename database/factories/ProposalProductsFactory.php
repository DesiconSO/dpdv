<?php

declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProposalProducts>
 */
class ProposalProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'proposal_id' => Factory::factoryForModel(\App\Models\Proposal::class),
            'product_id' => Factory::factoryForModel(\App\Models\Product::class),
            'user_id' => Factory::factoryForModel(\App\Models\User::class),
            'amount' => $this->faker->randomNumber(1, true),
            'discount' => $this->faker->randomFloat(2, 0, 15),
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
