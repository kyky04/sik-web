<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('universitas', 'UniversitasAPIController');

Route::resource('fakultas', 'FakultasAPIController');
Route::post('fakultas-univ', 'FakultasAPIController@showByUniv');

Route::resource('jurusans', 'JurusanAPIController');
Route::post('jurusan-univ', 'JurusanAPIController@showByUniv');

Route::resource('berita-univ', 'DataBeritaUnivAPIController');
Route::get('berita-universitas/{id_univ}', 'DataBeritaUnivAPIController@showByUniv');

Route::resource('data_berita_faks', 'DataBeritaFakAPIController');
Route::post('berita-fakultas', 'DataBeritaFakAPIController@showByUniv');

Route::resource('data_berita_jurs', 'DataBeritaJurAPIController');
Route::post('berita-jurusan', 'DataBeritaJurAPIController@showByUniv');


Route::resource('pendaftars', 'PendaftarAPIController');

Route::resource('fakultas', 'FakultasAPIController');

Route::resource('mahasiswas', 'MahasiswaAPIController');

Route::post('login', 'LoginController@index');

Route::resource('beasiswas', 'BeasiswaAPIController');