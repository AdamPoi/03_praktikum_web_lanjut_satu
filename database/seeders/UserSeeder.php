<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    DB::table('users')->insert([
      'name' => 'Adam',
      'email' => 'admin@gmail.com',
      'email_verified_at' => now(),
      'password' => Hash::make('password'),
      'remember_token' => Str::random(10)
    ]);
  }
}
