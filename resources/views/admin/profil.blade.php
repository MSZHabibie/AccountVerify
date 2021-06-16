@extends('layouts/navbar_admin')
@section('title', 'Accify | Profile')

@section('body')

<div class="col-15"  >
<div class="card-body" style=" padding-top:2rem; ">
    <div class="row" >
        <div class="container  col-md-3" style="margin-left: 200px;" >
            <img class="profil-img polaroid" src="../gambar/{{ Auth::guard('admin')->user()->foto }}" alt="" width="400">     
                           
            <br>
        </div>
        <div class="container rounded-3 col-md-5 ">
            <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-2">Name </h6>
                    </div>
                    <div class="col-sm-8 text-dark ">
                        <h6 class="ctb"> {{ Auth::guard('admin')->user()->name }} </h6> 
                    </div>
                 
            </div>
            <br>
            <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-2">Email </h6>
                    </div>
                    <div class="col-sm-8 text-dark ">
                        <h6 class="ctb"> {{ Auth::guard('admin')->user()->email }} </h6> 
                    </div>
                 
            </div>

        </div>
    </div>

</div>
@endsection