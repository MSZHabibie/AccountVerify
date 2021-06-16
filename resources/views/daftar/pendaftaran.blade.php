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
<div class="container mt-5 rounded-3">
   @foreach($checkbox as $chk)
   <form method="post" action="/daftar/creat">
      <div class="form-check">
         <input class="form-check-input" type="checkbox" value="" id="check{{$chk->id}}" name="check{{$chk->id}}">
         <label class="form-check-label" for="check{{$chk->id}}">
            {{ $chk->checkbox }}
         </label>
      </div>
   </form>
   @endforeach
   <div class="mb-4 mt-4">
      <h3>Bukti Keaslian</h3>
      <input class="form-control" type="file" id="formFileMultiple" multiple>
   </div>
   <div class="mb-3">
      <h3>Kata Kunci Pencarian</h3>
      <input type="password" class="form-control" id="exampleInputPassword1">
   </div>
   <h3>Daftar Akun</h3>
   <form method="post" action="/daftar/create" class="row gy-2 gx-1 align-items-center">
      <div class="col">
         <label class="visually-hidden" for="autoSizingInput">Name</label>
         <input type="text" class="form-control" id="autoSizingInput" placeholder="Your Name">
      </div>
      <div class="col-auto">
         <label class="visually-hidden" for="autoSizingSelect">Preference</label>
         <select class="form-select" id="autoSizingSelect">
            <option selected>Type</option>
            <option value="1">Instagram</option>
            <option value="2">WhatsApp</option>
            <option value="3">Telegram</option>
         </select>
      </div>
      <div class="col-auto">
      </div>

      <a href="/daftar/create" class="btn btn-primary mt-3">Tambah Akun</a>

   </form>
</div>

@endsection