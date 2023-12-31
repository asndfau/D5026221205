<!DOCTYPE html>
<html>

<head>
    <title>@yield('tittle')</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="#">Hasna Daffa Ulinnuha - 5026221205</a>

        <!-- Links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="/karyawan">Karyawan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link 2</a>
          </li>

          <!-- Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              Database
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="/pegawai">Pegawai</a>
              <a class="dropdown-item" href="/sepatu">Sepatu</a>
              <a class="dropdown-item" href="#">Link 3</a>
            </div>
          </li>
        </ul>
      </nav>
	<hr/>
	<br/>
	<br/>

	<div class="container">
	<!-- bagian judul halaman blog -->
	    @yield('judul_halaman')

    <!-- bagian konten blog -->
        @yield('konten')
    </div>

    @include('footer')

</body>

</html>
