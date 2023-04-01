<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index(Request $request)
  {
    $mahasiswas = Mahasiswa::orderBy('Nim', 'desc')
      ->when($request->input('s'), function ($query) use ($request) {
        return $query->where('Nama', 'LIKE', '%' . $request->input('s') . '%');
      })->paginate(5);
    return view('mahasiswas.index', compact('mahasiswas'))
      ->with('i', (request()->input('page', 1) - 1) * 5);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('mahasiswas.create');
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
      'Email' => 'required',
      'Jurusan' => 'required',
      'Tanggal_Lahir' => 'required',
      'No_Handphone' => 'required',
    ]);
    //fungsi eloquent untuk menambah data
    Mahasiswa::create($request->all());
    //jika data berhasil ditambahkan, akan kembali ke halaman utama
    return redirect()->route('mahasiswa.index')
      ->with('success', 'Mahasiswa Berhasil Ditambahkan');
  }

  /**
   * Display the specified resource.
   */
  public function show(string $Nim)
  {
    //menampilkan detail data dengan menemukan/berdasarkan Nim Mahasiswa
    $Mahasiswa = Mahasiswa::find($Nim);
    return view('mahasiswas.detail', compact('Mahasiswa'));
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $Nim)
  {
    //menampilkan detail data dengan menemukan berdasarkan Nim Mahasiswa untuk diedit
    $Mahasiswa = Mahasiswa::find($Nim);
    return view('mahasiswas.edit', compact('Mahasiswa'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $Nim)
  {
    //melakukan validasi data
    $request->validate([
      'Nim' => 'required',
      'Nama' => 'required',
      'Kelas' => 'required',
      'Email' => 'required',
      'Jurusan' => 'required',
      'Tanggal_Lahir' => 'required',
      'No_Handphone' => 'required',
    ]);
    //fungsi eloquent untuk mengupdate data inputan kita
    Mahasiswa::find($Nim)->update($request->all());
    //jika data berhasil diupdate, akan kembali ke halaman utama
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
