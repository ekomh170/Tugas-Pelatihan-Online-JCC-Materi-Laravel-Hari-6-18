@extends('template.master')
@section('judul')
| Dashboard
@endsection
@section('content')
<h3>Selamat Datang</h3>
<h5>Tugas laravel 6 | Hari 13 – Memasangkan Template dengan Laravel Blade </h5>
<p>Tujuan Halaman Ini dibuat Hanya Agar Tidak Terlihat Kosong Saja dan hanya sebagai catatan saja,
    Maaf bila halaman ini mengganggu:)</p>
<div>Ini adalah link alternatif Tugas :
    <ul>
        <li>
            yang mengarah ke route <b>/table</b> adalah tombol yang bernama <b>Table</b>
        </li>
        <li>
            yang mengarah ke route <b>/data-tables</b> adalah tombol yang bernama <b>Data Tables</b>
        </li>
    </ul>
</div>
<P class="ml-5">
    <a href="table"><button type="button" class="btn btn-outline-primary">Table</button></a>
    <a href="data-tables"><button type="button" class="btn btn-outline-danger">Data Tables</button></a>
    <a href="master"><button type="button" class="btn btn-outline-warning">Template Full Tanpa
            Konten</button></a>
</p>
@endsection