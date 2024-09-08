<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Task;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
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
            'title' => $this->faker->sentence(),
            'description' => $this->faker->sentence(),
            'address' => $this->faker->sentence(),
            'duration_minutes' => $this->faker->numberBetween(15, 120),
            'date' => $this->faker->dateTimeBetween('+1 day', '+1 year'),
            'start_time' => $this->faker->time('H:i:s'),
            'user_id' => User::pluck('id')->random()
        ];
    }
}
