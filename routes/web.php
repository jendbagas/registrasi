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

//bagian mahasiswa
//Route::get('mahasiswa','MahasiswaController@index');
//Route::get('mahasiswa/create','MahasiswaController@create');
//Route::get('mahasiswa/{id}/edit','MahasiswaController@edit');
//Route::post('mahasiswa','MahasiswaController@store');
//Route::put('mahasiswa/{id}','MahasiswaController@update');
//Route::delete('mahasiswa/{id}','MahasiswaController@delete');


Route::get('/mahasiswa', 'MahasiswaController@index')->name('mahasiswa.index');
Route::get('/mahasiswa/create', 'MahasiswaController@create')->name('mahasiswa.create');
Route::post('/mahasiswa/create','MahasiswaController@store');
Route::get('/mahasiswa/{mahasiswa}/edit', 'MahasiswaController@edit')->name('mahasiswa.edit');
Route::patch('/mahasiswa/{mahasiswa}/edit', 'MahasiswaController@update')->name('mahasiswa.update');
Route::delete('/mahasiswa/{mahasiswa}/delete', 'MahasiswaController@destroy')->name('mahasiswa.destroy');



Route::get('/jurusan', 'JurusanController@index')->name('jurusan.index');
Route::get('/jurusan/create', 'JurusanController@create')->name('jurusan.create');
Route::post('/jurusan/create','JurusanController@store');
Route::get('/jurusan/{jurusan}/edit', 'JurusanController@edit')->name('jurusan.edit');
Route::patch('/jurusan/{jurusan}/edit', 'JurusanController@update')->name('jurusan.update');
Route::delete('/jurusan/{jurusan}/delete', 'JurusanController@destroy')->name('jurusan.destroy');


Route::get('/herregistrasi', 'HerController@index')->name('herregistrasi.index');
Route::get('/herregistrasi/create', 'HerController@create')->name('herregistrasi.create');
Route::post('/herregistrasi/create','HerController@store');
Route::get('/herregistrasi/{herregistrasi}/edit', 'HerController@edit')->name('herregistrasi.edit');
Route::patch('/herregistrasi/{herregistrasi}/edit', 'HerController@update')->name('herregistrasi.update');
Route::delete('/herregistrasi/{herregistrasi}/delete', 'HerController@destroy')->name('herregistrasi.destroy');
//bagian jurusan
// Route::get('/jurusan','JurusanController@index');
// Route::get('/jurusan/create','JurusanController@create');
// Route::post('/jurusan/create','JurusanController@store');
// Route::get('/jurusan/{id}/edit','JurusanController@edit')->name('jurusan.edit');
// Route::put('/jurusan/{id}','JurusanController@update')->name('jurusan.update');
// Route::delete('/jurusan/{id}','JurusanController@delete');

//bagian herregistrasi
// Route::get('/herregistrasi','HerController@index');
// Route::get('/herregistrasi/create','HerController@create');
// Route::post('/herregistrasi','HerController@store');
// Route::get('/herregistrasi/{id}/edit','HerController@edit');
// Route::put('/herregistrasi/{id}','HerController@update');
// Route::delete('/herregistrasi/{id}','HerController@delete');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
