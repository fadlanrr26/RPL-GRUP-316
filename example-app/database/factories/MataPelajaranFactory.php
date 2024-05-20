<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MataPelajaran>
 */
class MataPelajaranFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $levels = ['SD', 'SMP', 'SMA'];
        $mataPelajaran = [
            'IPA', 
            'IPS', 
            'MATEMATIKA', 
            'BAHASA INDONESIA', 
            'SEJARAH', 
            'BAHASA INGGRIS', 
            'PENJAS', 
            'BAHASA JEPANG', 
            'BIMBINGAN KONSELING'
        ];

        $chosenLevel = fake()->randomElement($levels);

        switch ($chosenLevel) {
            case 'SD':
                $chosenClass = fake()->randomElement(['I', 'II', 'III', 'IV', 'V', 'VI']);
                break;
            case 'SMP':
                $chosenClass = fake()->randomElement(['VII', 'VIII', 'IX']);
                break;
            case 'SMA':
                $chosenClass = fake()->randomElement(['X', 'XI', 'XII']);
                break;
        }

        $shuffledSubjects = collect($mataPelajaran)->shuffle()->all();

        return [
            'mata_pelajaran' => $shuffledSubjects,
            'level' => $chosenLevel,
            'class' => $chosenClass,
        ];
    }
}
