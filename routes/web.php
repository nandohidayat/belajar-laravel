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

use App\Http\Controllers\PegawaiController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('hi', function () {
    return "Hi";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('dosen', 'DosenController@index');

Route::get('blog', 'BlogController@home');
Route::get('blog/tentang', 'BlogController@tentang');
Route::get('blog/kontak', 'BlogController@kontak');

Route::get('pegawai', 'PegawaiController@index');
Route::get('pegawai/tambah', 'PegawaiController@tambah');
Route::post('pegawai/store', 'PegawaiController@store');
Route::get('pegawai/edit/{id}', 'PegawaiController@edit');
Route::post('pegawai/update', 'PegawaiController@update');
Route::put('pegawai/update/{id}', 'PegawaiController@update');
Route::get('pegawai/hapus/{id}', 'PegawaiController@delete');
Route::get('pegawai/cari', 'PegawaiController@cari');

Route::get('input', 'GoogleController@input');
Route::post('proses', 'GoogleController@proses');

Route::get('guru', 'GuruController@index');
Route::get('guru/hapus/{id}', 'GuruController@hapus');
Route::get('guru/trash', 'GuruController@trash');
Route::get('guru/kembalikan/{id}', 'GuruController@kembalikan');
Route::get('guru/kembalikan_semua', 'GuruController@kembalikan_semua');
Route::get('guru/hapus_permanen/{id}', 'GuruController@hapus_permanen');
Route::get('guru/hapus_permanen_semua', 'GuruController@hapus_permanen_semua');

Route::get('pengguna', 'PenggunaController@index');

Route::get('articles', 'WebController@index');

Route::get('anggota', 'AHController@index');
