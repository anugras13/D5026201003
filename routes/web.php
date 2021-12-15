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
    return view('welcome');
});

Route::get('tugas4', function () {
    return view('tugas4js');
});

Route::get('praktikum2', function () {
    return view('praktikum2');
});

Route::get('ets', 'ViewController@ETS');
Route::get('tugphp', 'ViewController@tugphp');
Route::get('/pegawai', 'PegawaiController@index');
Route::get('/pegawai/tambah', 'PegawaiController@tambah');
Route::post('/pegawai/store', 'PegawaiController@store');
Route::get('/pegawai/edit/{id}', 'PegawaiController@edit');
Route::post('/pegawai/update', 'PegawaiController@update');
Route::get('/pegawai/hapus/{id}', 'PegawaiController@hapus');
Route::get('/pendapatan', 'PendapatanController@index');
Route::get('/pendapatan/tambah', 'PendapatanController@tambah');
Route::post('/pendapatan/store', 'PendapatanController@store');
Route::get('/pendapatan/edit/{id}', 'PendapatanController@edit');
Route::post('/pendapatan/update', 'PendapatanController@update');
Route::get('/pendapatan/hapus/{id}', 'PendapatanController@hapus');
Route::get('/absen', 'AbsenController@index');
Route::get('/absen/tambah', 'AbsenController@tambah');
Route::post('/absen/store', 'AbsenController@store');
Route::get('/absen/edit/{id}', 'AbsenController@edit');
Route::post('/absen/update', 'AbsenController@update');
Route::get('/absen/hapus/{id}', 'AbsenController@hapus');

Route::get('/pegawai/cari', 'PegawaiController@cari');
Route::get('/pegawai/detail/{id}', 'PegawaiController@view');
Route::get('/absen/cari', 'AbsenController@cari');
Route::get('/pendapatan/cari', 'PendapatanController@cari');

Route::get('/meja','MejaController@index');
Route::get('/meja/tambah','MejaController@tambah');
Route::post('/meja/store','MejaController@store');
Route::get('/meja/edit/{id}','MejaController@edit');
Route::post('/meja/update','MejaController@update');
Route::get('/meja/hapus/{id}','MejaController@hapus');
Route::get('/meja/cari','MejaController@cari');
Route::get('/meja/detail/{id}','MejaController@view');

Route::get('/karyawan1','Karyawan1Controller@index');
Route::get('/karyawan1/tambah','Karyawan1Controller@tambah');
Route::post('/karyawan1/store','Karyawan1Controller@store');
Route::get('/karyawan1/edit/{id}','Karyawan1Controller@edit');
Route::post('/karyawan1/update','Karyawan1Controller@update');
Route::get('/karyawan1/hapus/{id}','Karyawan1Controller@hapus');
Route::get('/karyawan1/cari','Karyawan1Controller@cari');
Route::get('/karyawan1/detail/{id}','Karyawan1Controller@view');
