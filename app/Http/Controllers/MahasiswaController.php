<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index(Request $request)
  {
    $mahasiswas = Mahasiswa::with('kelas')->orderBy('Nim', 'desc')
      ->when($request->input('s'), function ($query) use ($request) {
        return $query->where('Nama', 'LIKE', '%' . $request->input('s') . '%');
      })->paginate(5);
    return view('mahasiswas.index', compact('mahasiswas'));
  }

  /**
   * Show the form for creating a new resource.S
   */
  public function create()
  {
    $kelas = Kelas::all();
    return view('mahasiswas.create', compact('kelas'));
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    //melakukan validasi data
    $request->validate([
      'Nim' => 'required',
      'Nama' => 'required',
      'Kelas' => 'required',
      'Jurusan' => 'required',
    ]);
    $mahasiswa = new Mahasiswa();
    $mahasiswa->Nim = $request->get('Nim');
    $mahasiswa->Nama = $request->get('Nama');
    $mahasiswa->Jurusan = $request->get('Jurusan');

    $kelas = new Kelas();
    $kelas->id = $request->get('Kelas');
    $mahasiswa->kelas()->associate($kelas);
    $mahasiswa->save();
    return redirect()->route('mahasiswa.index')
      ->with('success', 'Mahasiswa Berhasil Ditambahkan');
  }

  /**
   * Display the specified resource.
   */
  public function show(string $Nim)
  {
    //menampilkan detail data dengan menemukan/berdasarkan Nim Mahasiswa
    $Mahasiswa = Mahasiswa::with('kelas')->find($Nim);
    return view('mahasiswas.detail', compact('Mahasiswa'));
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $Nim)
  {
    //menampilkan detail data dengan menemukan berdasarkan Nim Mahasiswa untuk diedit
    $Mahasiswa = Mahasiswa::with('kelas')->find($Nim);
    $kelas = Kelas::all();
    return view('mahasiswas.edit', compact('Mahasiswa', 'kelas'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $Nim)
  {
    $request->validate([
      'Nim' => 'required',
      'Nama' => 'required',
      'Kelas' => 'required',
      'Jurusan' => 'required',
    ]);
    $mahasiswa = Mahasiswa::with('kelas')->find($Nim);
    $mahasiswa->Nim = $request->get('Nim');
    $mahasiswa->Nama = $request->get('Nama');
    $mahasiswa->Jurusan = $request->get('Jurusan');

    $kelas = new Kelas();
    $kelas->id = $request->get('Kelas');
    $mahasiswa->kelas()->associate($kelas);
    $mahasiswa->save();
    return redirect()->route('mahasiswa.index')
      ->with('success', 'Mahasiswa Berhasil Diupdate');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $Nim)
  {
    //fungsi eloquent untuk menghapus data
    Mahasiswa::destroy($Nim);

    return redirect()->route('mahasiswa.index')
      ->with('success', 'Mahasiswa Berhasil Dihapus');
  }
}
