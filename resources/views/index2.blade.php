<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Accify.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Saira+Stencil+One&display=swap" rel="stylesheet">

</head>

<body style="background-color: #D7DBF1;">
    <div class="navbarr">
        <header>
            <a class="logo ml-4 text-sm text-gray-700 underline" href="">Accify.com</a>
            <nav>
                <a class="nav_home" href="/index">Home</a>
                <a class="nav_home" href="user/daftar">Daftar Akun</a>
            </nav>
            <a class="cta" href="/user/login">Login</a>
            <a class="cta" href="/user/registrasi">Registrasi</a>

        </header>

    </div>
    <div class="page-hero-section bg-image hero-home-1" style="background-image: url(../assets/img/bg4.jpeg); background-repeat: no-repeat; background-size: 100%; height:90%">
        <div class="text-desc">
            <h1 class="mb-4">Ayo cek akun resmi disini!</h1>
            <p class="mb-4">Temukan lebih banyak nama-nama akun resmi <br>
                dari sumber terpercaya untuk menghindari hal-hal <br>
                yang tidak diinginkan </p> <br>
            <div class="scroll"> scroll me now! </div>
        </div>


    </div>

    <div class="page-hero-section bg-image hero-home-1" style="background-image: url(../assets/img/bg6.png); background-repeat: no-repeat; background-size: 100%;">

        <div class="page-section">
            <div class="container">
                <div class="headerr">
                    <!-- <h1>Find what you want here</h1> -->
                    <div class="form-box">
                        <input type="text" class="search-field searching" placeholder="Cari akun">
                        <button class="search-btn" type="button">Search </button>

                    </div>
                </div>

                <div class=" col-md-10" style=" padding-left:250px; ">
                    <br><br><br>
                    <h5>List Akun</h5>
                    <table class="table table-sm border-dark table-light" style="margin-top: 1em; font-size:1.3em; ">
                        <thead class="table-dark">
                            <tr>

                                <th scope="col">Nama Akun</th>
                                <th scope="col">Type</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($account as $acc)
                            <tr>
                                <td> a</td>
                                <td> b </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>


                <div class="img-place ">
                    <img src="../assets/img/app_preview_2.png" alt="">
                </div>
            </div>

        </div>

    </div>


    <script type="text/javascript" src="mobile.js"></script>
    <script src="../assets/js/script.js"></script>
</body>

</html>