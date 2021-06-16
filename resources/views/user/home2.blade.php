@extends('layouts/navbar')
@section('title', 'Accify | Search')

@section('body')

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
                <form action="/cari" method="get">
                    <div class="form-box">
                        <input type="text" class="search-field searching" name="cari" placeholder="Cari akun" value="{{old('cari')}}">
                        <button class="search-btn" type="submit" value="cari">Search </button>
                    </div>
                </form>
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
                            <td><a href="https://www.{{$acc->type}}.com/{{$acc->account}}"> {{$acc->account}} </a></td>
                            <td><a href="https://www.{{$acc->type}}.com"> {{$acc->type}} </a></td>
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
@endsection