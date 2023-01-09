<?php

namespace Database\Factories;

use App\Enums\Contributor;
use App\Enums\PersonType;
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
        return [
            'name' => fake('pt_BR')->name(),
            'email' => fake('pt_BR')->unique()->safeEmail(),
            'person_type' => fake('pt_BR')->randomElement(PersonType::cases()),
            'fone' => fake('pt_BR')->cellphoneNumber(),
            'state_registration' => fake('pt_BR')->randomNumber(9, true),
            'cpf_cnpj' => fake('pt_BR')->randomElement([fake('pt_BR')->cpf(), fake('pt_BR')->cnpj()]),
            'adress' => fake('pt_BR')->address(),
            'number' => fake('pt_BR')->buildingNumber(),
            'complement' => fake('pt_BR')->randomElement(['Predio-1', 'Predio-2', 'Predio-3', 'Casa']),
            'district' => fake('pt_BR')->state(),
            'zipcode' => fake('pt_BR')->postcode(),
            'city' => fake('pt_BR')->city(),
            'fu' => fake('pt_BR')->regionAbbr(),
            'contributor' => fake('pt_BR')->randomElement(Contributor::cases()),
            'fantasy' => fake('pt_BR')->firstName(),
            'tax_regime_code' => fake('pt_BR')->randomElement(TaxRegimeCode::cases()),
            'observation' => fake('pt_BR')->text(),
            'created_at' => fake('pt_BR')->dateTimeBetween('-1 year', 'now'),
            'updated_at' => fake('pt_BR')->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
