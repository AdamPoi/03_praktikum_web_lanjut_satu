<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('mahasiswas', function (Blueprint $table) {
      $table->unsignedInteger('Nim');
      $table->primary('Nim');
      $table->string('Nama', 40);
      $table->string('Kelas', 20);
      $table->string('Jurusan', 40);
      $table->string('No_Handphone', 16);
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('mahasiswas');
  }
};
