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
         $level = fake()->randomElement(['SD', 'SMP', 'SMA']);

        // Determine the class based on the level
        switch ($level) {
            case 'SD':
                $class = fake()->randomElement(['I', 'II', 'III', 'IV', 'V', 'VI']);
                break;
            case 'SMP':
                $class = fake()->randomElement(['VII', 'VIII', 'IX']);
                break;
            case 'SMA':
                $class = fake()->randomElement(['X', 'XI', 'XII']);
                break;
        }

        return [
            'name' => fake()->name,
            'level' => $level,
            'class' => $class,
            'entry_date' => fake()->dateTimeBetween('-5 years', 'now')->format('Y-m-d'),
        ];
    }
}
