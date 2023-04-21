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
    Schema::create('mahasiswa_matakuliah', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('matakuliah_id');
      $table->unsignedInteger('mahasiswa_id');
      $table->string('nilai');
      $table->foreign('matakuliah_id')->references('id')->on('matakuliah');
      $table->foreign('mahasiswa_id')->references('Nim')->on('mahasiswas');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('mahasiswa_matakuliah');
  }
};
