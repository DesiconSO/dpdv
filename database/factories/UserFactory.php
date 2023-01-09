<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        if (fake()->boolean(60)) {
            $client = Client::factory()->create();
        } else {
            $client = null;
        }

        return [
            'client_id' => isset($client) ? $client->id : null,
            'name' => isset($client) ? $client->name : fake('pt_BR')->name(),
            'email' => isset($client) ? $client->email : fake('pt_BR')->unique()->safeEmail(),
            'name' => fake('pt_BR')->name(),
            'email' => fake('pt_BR')->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'created_at' => fake()->dateTimeBetween('-1 year', '+1 year'),
            'updated_at' => fake()->dateTimeBetween('-1 year', '+1 year'),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (User $user) {
        });
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
