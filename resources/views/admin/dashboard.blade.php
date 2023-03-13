@extends('layouts.admin')
@section('title', 'Dashboard')
@section('content')
<h1> selamat datang </h1>
@endsection

<script lang="js">
  (function() {

    swal.fire({
      title: 'Selamat Datang'
      , text: 'Selamat Datang'
      , icon: 'success'
      , confirmButtonText: 'Ashiap'
    })
  })

</script>
