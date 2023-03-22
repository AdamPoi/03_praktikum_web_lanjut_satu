<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
  public function index()
  {
    $mahasiswa = Mahasiswa::firstWhere('nim', '2141720185');
    return view('admin.profile', ['mahasiswa' => $mahasiswa]);
  }

  public function show(string $nim)
  {
    $mahasiswa = Mahasiswa::where('nim', $nim)->firstOrFail();
    return view('admin.profile', ['mahasiswa' => $mahasiswa]);
  }
}
