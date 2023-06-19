<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Siswa>
 */
class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nisn' => mt_rand(1,5),
            'nis' => mt_rand(1,5),
            'nama_lengkap' => fake()->name(),
            'tempat_lahir' => fake()->sentence(2),
            'tanggal_lahir' => fake()->date('Y-m-d'),
            'alamat' => fake()->address(),
        ];
    }
}
