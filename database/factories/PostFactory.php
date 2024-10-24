<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
			'title' => fake()->realTextBetween(6, 20),
			'content' => fake()->realTextBetween(100, 254),
			'description' => fake()->realTextBetween(100, 254),
			'views' => fake()->numberBetween(0, 1000),
			'status' => fake()->numberBetween(0, 3),
			'profile_id' => Profile::inRandomOrder()->first()->id,
			'category_id' => Category::inRandomOrder()->first()->id,
        ];
    }
}
