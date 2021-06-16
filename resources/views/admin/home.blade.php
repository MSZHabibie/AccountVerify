@extends('layouts/navbar_admin')
@section('title', 'Accify | Daftar')

@section('body')

<div class=" col-md-10" style=" padding-left:250px; " >
                        <br><br><br>
                    <h4>Akun unverified</h4>
                    <table class="table table-sm border-dark table-light" style="margin-top: 1em; font-size:1.3em; ">
                        <thead class="table-dark">
                            <tr>
                                
                                <th scope="col">User</th>
                                <th scope="col">Checkbox</th>
                                <th scope="col">File</th>
                                <th scope="col">Keyword</th>
                                <th scope="col">Nama Akun</th>
                                <th scope="col">Type</th>
                            </tr>    
                        </thead>
                        @foreach($data as $akun)
                        <tbody>        
                            <tr>
                                        <td> {{ $akun-> user }}</td>
                                        <td> {{ $akun-> checkbox }}</td>
                                        <td> {{ $akun-> file }}</td>
                                        <td> {{ $akun-> keyword }}</td>
                                        <td> {{ $akun-> account }}</td>
                                        <td> {{ $akun-> type }}</td>
                                                 
                                    </tr>
                                    @endforeach 
                                </tbody>
                            </table>
        </div>                            
                            <br><br><br>
            <div class=" col-md-10" style=" padding-left:250px; " >
                    <h4>Akun Verified</h4>
                    <table class="table table-sm border-dark table-light" style="margin-top: 1em; font-size:1.3em; ">
                                <thead class="table-dark">
                                <tr>
                                
                                    <th scope="col">User</th>
                                    <th scope="col">Checkbox</th>
                                    <th scope="col">File</th>
                                    <th scope="col">Keyword</th>
                                    <th scope="col">Nama Akun</th>
                                    <th scope="col">Type</th>
                                </tr>    
                                </thead>
                                @foreach($data2 as $akun)
                        <tbody>        
                            <tr>
                                        <td> {{ $akun-> user }}</td>
                                        <td> {{ $akun-> checkbox }}</td>
                                        <td> {{ $akun-> file }}</td>
                                        <td> {{ $akun-> keyword }}</td>
                                        <td> {{ $akun-> account }}</td>
                                        <td> {{ $akun-> type }}</td>
                                                 
                                    </tr>
                                    @endforeach 
                                </tbody>
                            </table>
                </div>

@endsection