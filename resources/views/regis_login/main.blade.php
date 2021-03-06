<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Accify.com</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css" />
    <!-- <link rel="icon" href="../assets/img/logo.png" type="image/png" sizes="16x16"> -->
</head>
<body>

    <div class="text-top">
      <a href="{{ url('/') }}" class="ml-4 text-sm text-gray-700 underline" style="font-weight: bold;">HOME</a>
      <a href="{{ url('/user/login') }}" class="ml-4 text-sm text-gray-700 underline">Log in</a>
      <a href="{{ url('/user/registrasi') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
    </div>

@yield('container')


    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="../assets/js/script.js"></script>
</body>
</html>
