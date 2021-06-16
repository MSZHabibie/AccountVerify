@extends('regis_login/main')

@section('container')

    <div class="regis-text">
        <h1>Registrasi</h1>
    </div>
    <div class="kotak"> 
    <div class="registration-form" style="padding-top:10px" >
        <form action="/registrasi" method="post" autocomplete="off">
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
              <label for="first_name">First Name </label>
                <input type="text" class="form-control item @error('first_name') is-invalid @enderror" id="first_name" name="first_name" placeholder="First Name" value="{{ old('first_name') }}" >
                @error('first_name')
                    <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
            </div>
            
            <div >
              <label for="last_name">Last Name </label>
                <input type="text" class="form-control item @error('last_name') is-invalid @enderror" id="last_name" name="last_name" placeholder="Last Name" value="{{ old('last_name') }}" >
                @error('last_name')
                    <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
            </div>

            <div >
              <label for="email">Email </label>
                <input type="email" class="form-control item @error('email') is-invalid @enderror" id="email"  name="email" placeholder="Email"  value="{{ old('email') }}" >
                @error('email')
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
                <input type="password" class="form-control item @error('password2') is-invalid @enderror" id="password2" name="password2" placeholder="Confirm Password" value="{{ old('password2') }}" >
                @error('password2')
                    <span class="invalid-feedback">{{ $message }}</span>
                  @enderror

            </div>
            
            <div class="form-group">
                <input type="hidden" name="foto" id="foto" value="profil.png" >
            </div>

            <div >
                <button type="submit" class="btn btn-block create-account">Konfirmasi</button>
            </div>

            </div>
               
        </form>
        
    </div>
    </div>
@endsection