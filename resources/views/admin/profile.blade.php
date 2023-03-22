@extends('layouts.admin')
@section('title', 'Dashboard')
@section('content')
    <h2> Nama : {{ $mahasiswa->nama }}</h2>
    <h2> NIM : {{ $mahasiswa->nim }}</h2>
    <h2> Kelas : {{ $mahasiswa->kelas }}</h2>
@endsection
