<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    DB::table('mahasiswas')->insert([
      'nama' => 'Adam Rafi Rezandi',
      'nim' => '2141720185',
      'kelas' => 'TI 2H'
    ]);
  }
}
