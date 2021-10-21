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

// Route::get('/', function () {
//     return view('__example_welcome.blade.php');
// });
// Route::get('/table', function () {
//     return view('table');
// });
// Route::get('/data-tables', function () {
//     return view('data_tables');
// });

Route::get('/master', function () {
    return view('template.master');
});
Route::get('/', function () {
    return view('dashboard');
});

// Route Menampilkan Data
Route::get('/cast', 'CastController@index');
// Route Menampilkan Data

// Route Menambahkan Data
Route::get('/cast/create', 'CastController@create');
Route::post('/cast', 'CastController@store');
// Route Menambahkan Data

// Route Menampilkan Data Berdasarkan ID
Route::get('/cast/{id}', 'CastController@show');
// Route Menampilkan Data Berdasarkan ID

// Route Ubah Data
Route::get('/cast/{id}/edit', 'CastController@edit');
Route::put('/cast/{id}', 'CastController@update');
// Route Ubah Data

// Route Menghapus
Route::delete('/cast/{id}', 'CastController@destroy');
// Route Menghapus