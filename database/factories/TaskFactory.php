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
                'ka' => 'ლორემ იპსუმ უნიფორმა ფიჭვის იწყო, სოფიოც ართლაცდა.',
            ],
            'description' => [
                'en' => fake()->sentence(20),
                'ka' => 'ლორემ იპსუმ დაგიბრუნებ უყრისო შევიწროვებული შეფის მისგან ყვირილს ლოკოკინებისა. ფეხთით ინციდენტი მაგას დამმშვიდდი კრიტიკის ვიღა ილაპარაკებდი ასეთს.',
            ],
            'due_date' => fake()->dateTimeBetween('-5days', '+10 days'),
        ];
    }
}
