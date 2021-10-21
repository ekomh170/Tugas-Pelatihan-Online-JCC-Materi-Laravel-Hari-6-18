<?php

// use Illuminate\Routing\Route;
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
//     return view('welcome');
// });

// Route Halaman Utama
Route::get('/', 'HomeController@index');

// Register Route
Route::get('/register', 'AuthController@register');

//Route Halaman Setelah Login
Route::post('/welcome', 'AuthController@welcome');