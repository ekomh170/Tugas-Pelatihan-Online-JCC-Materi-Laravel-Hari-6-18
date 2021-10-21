<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        //Ini Adalah Controllers Halaman Pendaftaran
        return view('Auth.register');
        //Ini Adalah Controllers Halaman Pendaftaran
    }

    public function welcome(Request $request)
    {
        //Ini Adalah Controllers Halaman Setelah Login
        $nama = ucwords($request['nama_dpn'] . ' ' . $request['nama_bkg']);
        return view('Auth.welcomelogin', ["nama" => $nama]);
        //Ini Adalah Controllers Halaman Setelah Login

    }
}