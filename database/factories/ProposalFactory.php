<?php

namespace Database\Factories;

use App\Enums\SaleMode;
use App\Enums\ShippingCompany;
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
            'user_id' => fake()->randomElement([User::factory(), User::all()->random()]),
            'client_id' => fake()->randomElement([Client::factory(), Client::all()->random()]),
            'shipping_company' => fake()->randomElement(ShippingCompany::cases()),
            'sale_mode' => fake()->randomElement(SaleMode::cases()),
            'shipping_mode' => fake()->randomElement(ShippingMode::cases()),
            'seller_discount' => fake()->randomFloat(2, 0, 15),
            'shipping_price' => fake()->randomFloat(2, 5, 2000),
            'seller_note' => fake('pt_BR')->sentence(6),
            'status' => fake()->randomElement(StatusProposal::cases()),
            'created_at' => fake()->dateTimeBetween('now', '+1 year'),
        ];
    }
}
