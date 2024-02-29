<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'name' => [
                'en' => fake()->sentence(),
                'ka' => fake()->sentence(),
            ],
            'description' => [
                'en' => fake()->sentence(20),
                'ka' => fake()->sentence(20),
            ],
            'due_date' => fake()->dateTimeBetween('-5days', '+10 days'),
        ];
    }
}
