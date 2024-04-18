<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserBankingFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => User::class,
            'iban' => fake()->swiftBicNumber('FR'),
            'bic' => fake()->swiftBicNumber('FR'),
        ];
    }
}
