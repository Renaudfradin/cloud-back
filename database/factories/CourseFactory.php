<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'slug' => fake()->slug(),
            'content' => fake()->paragraph(),
            'user_id' => User::class,
            'category_id' => Category::class,
            'url_course_video' => fake()->url(),
            'external_link' => fake()->url(),
        ];
    }
}
