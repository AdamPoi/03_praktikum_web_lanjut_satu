<?php

namespace Database\Factories;

use App\Models\Mahasiswa;
use App\Models\Matakuliah;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class Mahasiswa_MatakuliahFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array
  {
    return [
      'matakuliah_id' => Matakuliah::inRandomOrder()->first()->id,
      'mahasiswa_id' => Mahasiswa::inRandomOrder()->first()->Nim,
      'nilai' => fake()->randomElement(['A', 'B', 'C', 'D', 'E'])
    ];
  }
}
