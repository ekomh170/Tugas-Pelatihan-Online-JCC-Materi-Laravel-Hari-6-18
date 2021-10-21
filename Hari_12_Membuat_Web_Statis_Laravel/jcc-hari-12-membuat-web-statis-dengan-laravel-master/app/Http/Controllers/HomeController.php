<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        //Ini Adalah Controllers Halaman Utama
        return view('index');
        //Ini Adalah Controllers Halaman Utama

    }
}