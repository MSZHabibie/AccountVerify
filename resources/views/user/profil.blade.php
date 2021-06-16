@extends('layouts/navbar')
@section('title', 'Accify | Profile')

@section('body')

<div class="col-15">
    <div class="card-body" style=" padding-top:2rem; ">
        <div class="row">
            <div class="container  col-md-3" style="margin-left: 200px;">
                <img class="profil-img polaroid" src="../gambar/profil.png" alt="" width="400">
                <div class="row1">
                    <a href="{{ url('user/daftar')}}" class="btn btn-primary btn-lg">Tambah Akun</a>
                </div>

                <br>
            </div>
            <div class="container rounded-3 col-md-5 ">
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-2">First Name </h6>
                    </div>
                    <div class="col-sm-8 text-dark ">
                        <h6 class="ctb"> {{ Auth::guard('web')->user()->first_name }} </h6>
                    </div>

                </div>
                <br>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-2">Last Name </h6>
                    </div>
                    <div class="col-sm-8 text-dark ">
                        <h6 class="ctb"> {{ Auth::guard('web')->user()->last_name }} </h6>
                    </div>

                </div>
                <br>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-2">Email </h6>
                    </div>
                    <div class="col-sm-8 text-dark ">
                        <h6 class="ctb"> {{ Auth::guard('web')->user()->email }} </h6>
                    </div>

                </div>

                <div class="table-warga col-md-11">
                    <br><br><br>
                    <h5>List Akun</h5>
                    <table class="table table-sm border-dark table-light" style="margin-top: 1em; font-size:1.3em">
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

            </div>
        </div>

    </div>
    @endsection