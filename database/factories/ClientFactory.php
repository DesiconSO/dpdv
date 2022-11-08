<?php

namespace Database\Factories;

use App\Enums\PersonType;
use App\Enums\Taxpayer;
use App\Enums\TaxRegimeCode;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = \Faker\Factory::create('pt_BR');

        return [
            'name' => $faker->name(),
            'person_type' => $faker->randomElement(PersonType::cases()),
            'fone' => $faker->cellphoneNumber(),
            'state_registration' => $faker->randomNumber(9, true),
            'cpf_cnpj' => $faker->randomElement([$faker->cpf(), $faker->cnpj()]),
            'address' => $faker->address(),
            'number' => $faker->buildingNumber(),
            'complement' => $faker->randomElement(['Predio-1', 'Predio-2', 'Predio-3', 'Casa']),
            'district' => $faker->state(),
            'zip_code' => $faker->postcode(),
            'city' => $faker->city(),
            'fu' => $faker->regionAbbr(),
            'contributor' => $faker->randomElement(Taxpayer::cases()),
            'fantasy' => $faker->firstName(),
            'tax_regime_code' => $faker->randomElement(TaxRegimeCode::cases()),
        ];
    }
}
