<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laman Registrasi</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css" />
    <link rel="icon" href="../assets/img/logo.png" type="image/png" sizes="16x16">
</head>
<body>

    <div class="regis-text">
        <h1>Registrasi</h1>
    </div>
    
    <div class="registration-form" style="padding-top:10px" autocomplete="off">
        <form action="" method="post">
        @csrf
        
            <div class="result">
                @if(Session::get('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success')}}
                    </div>
                @endif

                @if(Session::get('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('fail')}}
                    </div>
                @endif
            
            </div>
            
            <div>
            <div >
              <label for="nama">Nama Lengkap </label>
                <input type="text" class="form-control item @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Nama Lengkap" value="{{ old('nama') }}" >
                @error('nama')
                    <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
            </div>
            
            <div >
              <label for="noKK">Nomor Kartu Keluarga </label>
                <input type="text" class="form-control item @error('noKK') is-invalid @enderror" id="noKK" name="noKK" placeholder="Nomor Kartu Keluarga" value="{{ old('noKK') }}" >
                @error('noKK')
                    <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
            </div>

            <div >
              <label for="username">Username </label>
                <input type="text" class="form-control item @error('username') is-invalid @enderror" id="username"  name="username" placeholder="Username"  value="{{ old('username') }}" >
                @error('username')
                    <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
            </div>
            <div >
              <label for="password">Konfirmasi Password </label>
                <input type="password" class="form-control item @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" value="{{ old('password') }}" >
                @error('password')
                    <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
            </div>

             <div >
              <label for="password2">Konfirmasi Password </label>
                <input type="password" class="form-control item @error('password2') is-invalid @enderror" id="password2" name="password2" placeholder="Konfirmasi Password" value="{{ old('password2') }}" >
                @error('password2')
                    <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
            </div>

            <div >
                <button type="submit" class="btn btn-block create-account">Daftar</button>
            </div>

            <div >
                    <a class="d-block text-center mt-2 small" href="{{ url('/warga/login') }}">Login</a>
            </div>
            </div>
               
        </form>
        
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="../assets/js/script.js"></script>
</body>
</html>
