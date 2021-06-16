@extends('layouts/navbar')
@section('title', 'Accify | Home')

@section('body')

<div class="page-section">
            <div class="container" style="margin-top: 3rem;">
                <h2>Temukan akun-akun resmi disini!</h2>
                <div class="headerrr">
    
                    <div class="form-box">
                        <input type="text" class="search-field searching" placeholder="Cari akun">
                        <button class="search-btn" type="button">Search </button>

                    </div>
                </div>
                    <div class=" col-md-8" style=" padding-left:300px; " >
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
                                    <tr>
                                        <td>  a</td>
                                        <td>  b </td>           
                                    </tr>
                                </tbody>
                            </table>
                        </div>
            </div>

        </div>

@endsection