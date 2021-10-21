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


Route::get('/', function () {
    return view('dashboard');
});

Route::get('/table', function () {
    return view('table');
});

Route::get('/data-tables', function () {
    return view('data_tables');
});

// Ini Hanyalah Route Tambahan Agar Dashboard Tidak Terlhat Kosong
Route::get('/master', function () {
    return view('template.master');
});
// Ini Hanyalah Route Tambahan Agar Dashboard Tidak Terlhat Kosong