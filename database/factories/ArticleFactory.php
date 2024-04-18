<?php

namespace Database\Factories;

use App\Models\ArticleCategory;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => fake()->name(),
            'slug' => fake()->slug(),
            'content' => fake()->paragraph(),
            'image' => fake()->image(),
            'user_id' => User::class,
            'category_id' => ArticleCategory::class,
            'status'=> fake()->boolean()
        ];
    }
}
