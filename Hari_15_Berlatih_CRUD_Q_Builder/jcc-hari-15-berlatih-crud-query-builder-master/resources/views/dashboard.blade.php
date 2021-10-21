@extends('template.master')
@section('judul')
| Dashboard
@endsection
@section('content')
<h3>Selamat Datang</h3>
<div class="mb-2">Dashboard adalah halaman berisi tentang ringkasan informasi.</div>
<hr>
<h4 class="mt-2">Tugas laravel 6 | Hari 15 – Berlatih CRUD Query Builder</h4>
<div class="mb-3">Notes : Ini Adalah Sebuah Link Alternatif Menuju Menu Cast :</div>
<div class="col-lg-3 col-6">
    <div class="small-box bg-dark">
        <div class="inner">
            <h3>#</h3>
            <p>Menu Data Cast</p>
        </div>
        <div class="icon">
            <i class="ion ion-person-add"></i>
        </div>
        <a href="/cast" class="small-box-footer">Data Menu Cast <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>
@endsection
