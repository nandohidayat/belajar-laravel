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

Route::get('pegawai/{nama}', 'PegawaiController@index');
Route::get('formulir', 'PegawaiController@formulir');
Route::post('formulir/proses', 'PegawaiController@proses');