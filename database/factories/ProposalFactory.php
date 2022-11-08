<?php

namespace Database\Factories;

use App\Enums\SaleMode;
use App\Enums\ShippingMode;
use App\Enums\StatusProposal;
use App\Models\Client;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Proposal>
 */
class ProposalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => Factory::factoryForModel(User::class),
            'client_id' => Factory::factoryForModel(Client::class),
            'shipping_company' => $this->faker->company(),
            'sale_mode' => $this->faker->randomElement(SaleMode::cases()),
            'shipping_mode' => $this->faker->randomElement(ShippingMode::cases()),
            'seller_discount' => $this->faker->randomFloat(2, 0, 15),
            'shipping_price' => $this->faker->randomFloat(2, 5, 2000),
            'seller_note' => $this->faker->sentence(6),
            'status' => $this->faker->randomElement(StatusProposal::cases()),
        ];
    }
}
