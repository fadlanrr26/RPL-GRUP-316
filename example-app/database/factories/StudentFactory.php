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
        $faker = \Faker\Factory::create('id_ID');
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
        $prefix = "13";
        $randomNumber = $prefix . str_pad(mt_rand(0, 99999999), 8, '0', STR_PAD_LEFT);
        return [
            'name' => $faker->name,
            'level' => $level,
            'class' => $class,
            'entry_date' => fake()->dateTimeBetween('-5 years', 'now')->format('Y-m-d'),
            'NISN' => $randomNumber
        ];
    }
}
