<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserBaruSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    DB::table('users')->insert([
      'username' => 'admin',
      'name' => 'Administrator Baru',
      'email' => 'admin.baru@gmail.com',
      'password' => Hash::make('password'),
    ]);
  }
}
