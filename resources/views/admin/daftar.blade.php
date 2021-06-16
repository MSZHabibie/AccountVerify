@extends('layouts/navbar_admin')
@section('title', 'Accify | Daftar')

@section('body')

<div class="card-body"> 
<div class="row" style="margin-left: 15px;">
<div class="container rounded-3 col-md-6">
   <h1>Kategori Akun</h1>
   <div class="dropdown">
      <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
         Pilihan
      </a>
      <?php $tes = ['artis', 'lembaga', 'toko']; ?>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
         <li><a class="dropdown-item" href="daftar/{{$tes[0]}}">Artis</a></li>
         <li><a class="dropdown-item" href="daftar/{{$tes[1]}}">Lembaga</a></li>
         <li><a class="dropdown-item" href="daftar/{{$tes[2]}}">Online Shop</a></li>
         <li><a class="dropdown-item" href="daftar">Others..</a></li>
      </ul>
   </div>
</div>
</div>
</div>

@endsection