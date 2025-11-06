<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kelas>
 */
class KelasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kode_kelas' => fake()->word(),
            'nama_kelas' => fake()->word(),
            'kapasitas' => ((int)fake()->randomFloat(1, 2, 4)) * 10,
        ];
    }
}
