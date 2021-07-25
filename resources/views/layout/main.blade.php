<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../asethr/css/bootstrap.min.css">

  <title>@yield('title')</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a href="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="{{ url('/') }}">Home</a>
          <a class="nav-item nav-link " href="{{ url('/about') }}">About</a>
          <a class="nav-item nav-link " href="{{ url('/mahasiswa') }}">Mahasiswa</a>
          <a class="nav-item nav-link " href="{{ url('/students') }}">Students</a>
        </div>
      </div>
    </div>
  </nav>

  @yield('container')

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="../asethr/js/jquery-3.3.1.slim.min.js"></script>

  <script src="../asethr/js/popper.min.js"></script>

  <script src="../asethr/js/bootstrap.min.js"></script>
</body>

</html>