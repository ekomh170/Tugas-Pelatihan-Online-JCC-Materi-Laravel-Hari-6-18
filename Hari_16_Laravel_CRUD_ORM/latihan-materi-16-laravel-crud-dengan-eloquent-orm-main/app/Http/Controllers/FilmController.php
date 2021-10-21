<?php

namespace App\Http\Controllers;

use App\Film;
use App\Genre;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $film = Film::all();
        return view('film_menu.index', compact('film'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genre = Genre::all();
        return view('film_menu.create', compact('genre'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'ringkasan' => 'required',
            'tahun' => 'required',
            'poster' => 'required|max:3000',
            'genre_id' => 'required',
        ]);

        $gambar = $request->poster;
        $new_gambar = time() . ' - ' . $gambar->getClientOriginalName();

        Film::create([
            "judul" => $request["judul"],
            "ringkasan" => $request["ringkasan"],
            "tahun" => $request["tahun"],
            "poster" => $new_gambar,
            "genre_id" => $request["genre_id"],
        ]);

        $gambar->move('img/film/', $new_gambar);
        alert()->success('Berhasil Menambahkan Data Genre', 'Data Genre');
        return redirect('/film');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $film = Film::find($id);
        return view('film_menu.show', compact('film'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */

    // public function edit($id)
    // {
    //     $genre = Genre::all();
    //     $film = Film::find($id);
    //     return view('film_menu.edit', compact('genre', 'film'));
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'ringkasan' => 'required',
            'tahun' => 'required',
            'poster' => 'required',
            'genre_id' => 'required',
        ]);

        $film = film::find($id);

        $film->judul = $request->judul;
        $film->ringkasan = $request->ringkasan;
        $film->tahun = $request->tahun;
        $film->poster = $request->poster;
        $film->genre_id = $request->genre_id;
        $film->update();

        alert()->success('Berhasil Mengubah Data film', 'Data film');
        return redirect('/film');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Film::find($id)->delete();
        alert()->success('Berhasil Menghapus Data Cast', 'Data Cast');
        return redirect('/film');
    }
}