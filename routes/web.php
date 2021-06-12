<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::view('/registrasi','regis_login.registrasi')->name('registrasi');
Route::post('/registrasi', 'App\Http\Controllers\UsersController@store');

Route::view('/login','regis_login.login')->name('login');
Route::post('/check', 'App\Http\Controllers\UsersController@check');

Route::view('/index','index')->name('index');