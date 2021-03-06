<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="../assets/css/style.css" />
   <link rel="stylesheet" type="text/css" href="../../assets/css/style.css" />
   
   <title>@yield('title')</title>
</head>

<body>
<div class="navbarr">
        <header>
            <a class="logo ml-4 text-sm text-gray-700 underline" href="">Accify.com</a>
            <nav>
                <a class="nav_home" href="{{ url('admin/home')}} ">Home</a>
                <a class="nav_home" href="{{ url('admin/daftar')}} ">Daftar Akun</a>
            </nav>
            <a class="cta" href="{{ url('admin/profil')}} ">Profil</a>

            <a type="submit" href="{{ url('admin/logout') }}"  class="nav_home" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <span class="nav__name">Keluar</span>
            </a>
            <form action="{{ url('/admin/logout') }}" method="post" class="d-none" id="logout-form">@csrf</form>
            <!-- <a class="cta" href="/user/registrasi">Registrasi</a> -->
        </header>

    </div>

   @yield('body')

   <!-- Optional JavaScript; choose one of the two! -->

   <!-- Option 1: Bootstrap Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

   <!-- Option 2: Separate Popper and Bootstrap JS -->
   <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>