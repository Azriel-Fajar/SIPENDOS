<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Matakuliah>
 */
class MatakuliahFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kode_matakuliah' => fake()->word(),
            'nama_matakuliah' => fake()->word(),
            'sks' => ((int)fake()->randomFloat(0, 2, 6)),
            'sks_total' => ((int)fake()->randomFloat(0, 3, 7)),
        ];
    }
}
