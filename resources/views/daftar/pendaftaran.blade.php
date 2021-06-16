@extends('layouts/navbar')
@section('title', 'Accify | Daftar')

@section('body')

<div class="card-body">
   <div class="row" style="margin-left: 15px;">
      <div class="container rounded-3 col-md-6">
         <h1>Kategori : ... </h1>
         <br>
         <form method="post" action="{{ url('user/daftar')}}" class="row gy-2 gx-1 align-items-center">
            @csrf
            @foreach($checkbox as $chk)
            <div class="form-check">
               <input class="form-check-input" type="checkbox" value="{{$chk->id}}" id="check{{$chk->id}}" name="checkbox[{{$chk->id}}]">
               <label class="form-check-label" for="check{{$chk->id}}">
                  {{ $chk->checkbox }}
               </label>
            </div>

            @endforeach
            <div class="mb-4 mt-4">
               <h3>Bukti Keaslian</h3>
               <input class="form-control @error('file') is-invalid @enderror" type="file" id="file" name="file" multiple>
               @error('file')
               <div class="invalid-feedback">{{ $message }}</div>
               @enderror
            </div>
            <div class="mb-3">
               <h3>Kata Kunci Pencarian</h3>
               <input type="text" class="form-control @error('keyword') is-invalid @enderror" id="keyword" name="keyword" placeholder="Keyword">
               @error('keyword')
               <div class="invalid-feedback">{{ $message }}</div>
               @enderror
            </div>
            <h3>Daftar Akun</h3>

            <div class="col">
               <label class="visually-hidden" for="account">Name</label>
               <input type="text" class="form-control @error('account') is-invalid @enderror" id="account" name="account" placeholder="Name Account">
               @error('account')
               <div class="invalid-feedback">{{ $message }}</div>
               @enderror
            </div>
            <div class="col-auto">
               <label class="visually-hidden" for="type">Preference</label>
               <select class="form-select @error('type') is-invalid @enderror" id="type" name="type">
                  <option selected>Type</option>
                  <option value="instagram">Instagram</option>
                  <option value="twitter">Twitter</option>
                  <option value="facebook">Facebook</option>
                  <option value="website">Github</option>
                  <option value="youtube">Youtube</option>
               </select>
            </div>
            <div class="col-auto">
            </div>

            <!-- <button type="submit" class="btn btn-primary mt-3">Tambah Akun</button> -->
            <!-- /.card-body -->
            <div class="card-footer">
               <button type="submit" class="btn btn-primary " style="float: right;">Tambah Akun</button>
            </div>
         </form>
      </div>
   </div>
</div>
@endsection