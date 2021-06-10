@extends('regis_login/main')

@section('container')
    <div class="regis-text">
        <h1>Registrasi</h1>
    </div>
    
    <div class="kotak"> 
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
              <label for="nama">First Name </label>
                <input type="text" class="form-control item @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Nama Lengkap" value="{{ old('nama') }}" >
                @error('nama')
                    <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
            </div>
            
            <div >
              <label for="noKK">Last Name </label>
                <input type="text" class="form-control item @error('noKK') is-invalid @enderror" id="noKK" name="noKK" placeholder="Nomor Kartu Keluarga" value="{{ old('noKK') }}" >
                @error('noKK')
                    <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
            </div>

            <div >
              <label for="username">Email </label>
                <input type="text" class="form-control item @error('username') is-invalid @enderror" id="username"  name="username" placeholder="Username"  value="{{ old('username') }}" >
                @error('username')
                    <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
            </div>
            <div >
              <label for="password">Password </label>
                <input type="password" class="form-control item @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" value="{{ old('password') }}" >
                @error('password')
                    <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
            </div>

             <div >
              <label for="password2">Confirm Password </label>
                <input type="password" class="form-control item @error('password2') is-invalid @enderror" id="password2" name="password2" placeholder="Konfirmasi Password" value="{{ old('password2') }}" >
                @error('password2')
                    <span class="invalid-feedback">{{ $message }}</span>
                  @enderror

            </div>

            <div >
                <button type="submit" class="btn btn-block create-account">Konfirmasi</button>
            </div>

            </div>
               
        </form>
        
    </div>
    </div>
@endsection