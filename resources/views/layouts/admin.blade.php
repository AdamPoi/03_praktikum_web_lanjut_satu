<html>
<head>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('lte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('lte/dist/css/adminlte.min.css')}}">

  <link rel="stylesheet" type="text/css" href="{{
asset('lte/plugins/sweetalert2.min.css') }}">

  <head />
<body>
  @include('components.navbar')
  @include('components.sidebar')

  <div class="content-wrapper">
    @yield('content')
  </div>
  @include('components.footer')
  <script src="{{ asset('lte/plugins/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
  <script src="{{ asset('lte/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
