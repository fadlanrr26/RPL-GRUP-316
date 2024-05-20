<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
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
            'level' => fake()->randomElement(['SD', 'SMP', 'SMA']),
            'entry_date' => fake()->dateTimeBetween('-5 years', 'now')->format('Y-m-d'),
        ];
    }
}
