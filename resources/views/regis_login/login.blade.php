@extends('regis_login/main')

@section('container')

    <div class="regis-text">
        <h1>Login</h1>
    </div>
    
    <div class="kotak"> 
    <div class="registration-form" style="padding-top:10px" >
        <form action="/check" method="post" autocomplete="off">
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
                <button type="submit" class="btn btn-block create-account">Login</button>
            </div>

            </div>
               
        </form>
        
    </div>
    </div>
@endsection