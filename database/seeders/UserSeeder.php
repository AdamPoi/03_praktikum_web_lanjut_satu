<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    DB::table('users')->insert([
      'name' => 'Adam',
      'email' => 'Rafi@gmail.com',
      'email_verified_at' => now(),
      'password' => 'Rezandi',
      'remember_token' => Str::random(10)
    ]);
  }
}
