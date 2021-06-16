<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DaftarController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

Route::view('/','index')->name('index');

Route::prefix('user')->name('user.')->group(function(){
  
    Route::middleware(['guest:web','PreventBackHistory'])->group(function(){
        Route::view('/registrasi','regis_login.registrasi')->name('registrasi');
        Route::post('/registrasi', 'App\Http\Controllers\UsersController@store');
        Route::view('/login','regis_login.login')->name('login');
        Route::post('/check', 'App\Http\Controllers\UsersController@check');
        
    });


    Route::middleware(['auth:web','PreventBackHistory'])->group(function(){
        Route::view('/home','user.home')->name('home'); 
        Route::get('/logout', 'App\Http\Controllers\UsersController@logout');
    });
});


Route::prefix('admin')->name('admin.')->group(function(){
       
    Route::middleware(['guest:admin','PreventBackHistory'])->group(function(){
        // Route::get('/masuk', 'App\Http\Controllers\AdminsController@login');
        Route::view('/masuk','admin.login')->name('login'); 
        Route::post('/check', 'App\Http\Controllers\AdminsController@check');
        
    });

    Route::middleware(['auth:admin','PreventBackHistory'])->group(function(){
        Route::view('/home','admin.home')->name('home');
        Route::get('/logout', 'App\Http\Controllers\AdminsController@logout');
    });

});

Route::get('/daftar', [DaftarController::class, 'index']);
Route::get('/daftar/create', [DaftarController::class, 'create']);
Route::get('/daftar/{tes}', [DaftarController::class, 'show']);
// Route::get('/daftars', [DaftarController::class, 'admin']);

