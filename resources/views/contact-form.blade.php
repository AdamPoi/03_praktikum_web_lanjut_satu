<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-4">
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      Contact Form
    </div>
    <div class="card-body">
      <form name="contact-form" id="contact-form" method="post" action="{{url('contact-us')}}">
       @csrf
        <div class="form-group">
          <label for="title">Judul</label>
          <input type="text" id="title" name="title" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="description">Deskripsi</label>
          <textarea name="description" class="form-control" required=""></textarea>
        </div>
        <button type="submit" class="btn btn-primary">send</button>
      </form>
    </div>
  </div>
</div>  
</body>
</html>
