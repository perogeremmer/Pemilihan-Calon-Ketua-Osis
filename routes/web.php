<?php

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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('kaleya.login');
});

Route::get('/logout', function () {
    return view('kaleya.login')->with('sweet-alert','<script> window.onload = swal("Sukses!", "Berhasil Logout", "success")</script>');
});

//
//Route::get('/penilaian', function () {
//    return view('kaleya.penilaian.show');
//});
//
//Route::get('/penilaian/create', function () {
//    return view('kaleya.penilaian.add');
//});


Route::resource('home','controllerHome');
Route::resource('kandidat','controllerKandidat');
Route::resource('penilaian','controllerPenilaian');

