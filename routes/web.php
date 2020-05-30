<?php

use Illuminate\Support\Facades\Route;

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

Route::get('halo', function() {
    return "Halo, Sugeng rawuh dateng mriki";
});

Route::get('blog',function(){
    return view('blog');
});

Route::get('/blog', 'BlogController@home');
Route::get('/blog/tentang', 'BlogController@tentang');
Route::get('/blog/kontak', 'BlogController@kontak');

Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/cari', 'PegawaiController@cari');

/*Route::get('dosen','DosenController@index');
Route::get('/pegawai/{nama}', 'PegawaiController@index');
Route::get('/formulir', 'PegawaiController@formulir');
Route::post('/formulir/proses', 'PegawaiController@proses');
*/

