<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mahasiswa>
 */
class MahasiswaFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array
  {
    return [
      'Nama' => fake()->name(),
      'Nim' => fake()->randomNumber(8, true),
      'Email' => fake()->safeEmail(),
      'No_Handphone' => fake()->randomNumber(9, true),
      'Kelas' => 'TI 2H',
      'Tanggal_Lahir' => fake()->date(),
      'Jurusan' => 'DIV-Teknik Informatika',

    ];
  }
}
