<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FeedBack>
 */
class FeedBackFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'from_user' => User::all()->random(),
            'to_user' => User::all()->random(),
            'feedback' => fake('pt_BR')->text(),
            'likes' => fake()->randomNumber(2, true),
        ];
    }
}
