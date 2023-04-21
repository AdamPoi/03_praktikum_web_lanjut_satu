<?php

namespace Database\Factories;

use App\Models\Kelas;
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
      'Jurusan' => 'DIV-Teknik Informatika',
      'kelas_id' => Kelas::inRandomOrder()->first()->id
    ];
  }
}
