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

Route::get('/', function () {
  return redirect('home');
});


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('universitas', 'UniversitasController');

Route::resource('fakultas', 'FakultasController');

Route::resource('jurusans', 'JurusanController');

Route::resource('prodis', 'ProdiController');

Route::resource('programStudis', 'Program_StudiController');

Route::resource('jurusans', 'JurusanController');

Route::resource('jurusans', 'JurusanController');

Route::resource('dataBeritaUnivs', 'DataBeritaUnivController');

Route::resource('dataBeritaFaks', 'DataBeritaFakController');

Route::resource('dataBeritaJurs', 'DataBeritaJurController');

Route::resource('pendaftarans', 'PendaftaranController');

Route::resource('pendaftaranBeasiswas', 'PendaftaranBeasiswaController');

Route::resource('jurusans', 'JurusanController');

Route::resource('jurusans', 'JurusanController');

Route::resource('pendaftarans', 'PendaftaranController');

Route::resource('pendaftarans', 'PendaftaranController');

Route::resource('pendaftarans', 'PendaftaranController');

Route::resource('pendaftars', 'PendaftarController');

Route::resource('fakultas', 'FakultasController');

Route::resource('mahasiswas', 'MahasiswaController');

Route::resource('beasiswas', 'BeasiswaController');