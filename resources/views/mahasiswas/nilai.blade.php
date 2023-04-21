@extends('mahasiswas.layout')

@section('content')
    <div class="container mt-5">
        <div class="row  flex-column gap">
            <h2 class="text-center py-4">JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
            <h1 class="text-center py-4">KARTU HASIL STUDI (KHS)</h1>
            <ul class="list-group list-group-flush py-4">
                <li class="list-group-item"><b>Nim: </b>{{ $mahasiswa->Nim }}</li>
                <li class="list-group-item"><b>Nama: </b>{{ $mahasiswa->Nama }}</li>
                <li class="list-group-item"><b>Jurusan: </b>{{ $mahasiswa->Jurusan }}</li>
                <li class="list-group-item"><b>Kelas: </b>{{ $mahasiswa->kelas->nama_kelas }}</li>

            </ul>
            <table class="table table-bordered ">
                <tr>
                    <th>Mata Kuliah</th>
                    <th>SKS</th>
                    <th>Semester</th>
                    <th>Nilai</th>
                </tr>
                @foreach ($mahasiswa->matakuliah as $matkul)
                    <tr>
                        <td>
                            {{ $matkul->nama_matkul }}
                        </td>
                        <td>
                            {{ $matkul->sks }}
                        </td>
                        <td>
                            {{ $matkul->semester }}
                        </td>
                        <td>
                            {{ $matkul->pivot->nilai }}
                        </td>
                    </tr>
                @endforeach
            </table>

        </div>
    </div>
@endsection
