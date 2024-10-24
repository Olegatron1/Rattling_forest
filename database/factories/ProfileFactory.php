<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
			'name' => fake()->name,
			'surname' => fake()->lastname(),
			'patronymic' => fake()->lastname(),
			'description' => fake()->realTextBetween(100, 254),
			'profession' => fake()->realTextBetween(5, 15),
			'address' => fake()->address(),
			'phone' => fake()->phoneNumber(),
			'birthday' => fake()->date(),
			'gender' => fake()->boolean(),
			'user_id' => User::inRandomOrder()->first()->id,
        ];
    }
}
