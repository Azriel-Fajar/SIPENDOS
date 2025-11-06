<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ruangan>
 */
class RuanganFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kode_ruangan' => ((int)fake()->randomFloat(2, 1, 6)) * 100,
            'kapasitas' => ((int)fake()->randomFloat(1, 2, 4)) * 10,
        ];
    }
}
