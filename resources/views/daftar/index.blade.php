@extends('layouts/navbar')
@section('title', 'Accify | Daftar')

@section('body')
<div class="container mt-5">
   <h3>Kategori Akun</h3>
   <div class="dropdown">
      <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
         Pilihan
      </a>
      <?php $tes = ['artis', 'lembaga', 'toko']; ?>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
         <li><a class="dropdown-item" href="/daftar/{{$tes[0]}}">Artis</a></li>
         <li><a class="dropdown-item" href="/daftar/{{$tes[1]}}">Lembaga</a></li>
         <li><a class="dropdown-item" href="/daftar/{{$tes[2]}}">Online Shop</a></li>
         <li><a class="dropdown-item" href="/daftar">Others..</a></li>
      </ul>
   </div>
</div>

@endsection