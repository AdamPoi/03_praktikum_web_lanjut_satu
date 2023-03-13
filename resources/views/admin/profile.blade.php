@extends('layouts.admin')
@section('title', 'Dashboard')
@section('content')
<h2> Nama : Adam Rafi Rezandi</h2>
@if (isset($nim))
<h2> NIM : {{ $nim }}</h2>
@else
<h2> NIM : 2141702185</h2>
@endif



<h2> Kelas : TI 2H</h2>
@endsection
