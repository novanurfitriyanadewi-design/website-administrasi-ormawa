<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/perkenalan', function () {
    return '<h1>Halo! Nama saya Nova Nurfitriyana </h1>
            <p>NIM: 4124051 | Prodi: Sistem Informasi</p>
            <p>Saya siap belajar Laravel! 🚀</p>';
});

Route::get('/badrus-sholeh', function () {
    return "Halo, saya Badrus Sholeh (Kolaborator)";
});

Route::get('/bimoadi', function () {
<<<<<<< HEAD
 return "Halo, saya Bimoadi (Kolaborator)";
=======

    return "Halo, saya Bimoadi (Kolaborator)";
>>>>>>> c4fae4220c729d688ad05e30fecd3aedee916d5c
});

/* ROUTE ORMAWA */

Route::get('/bem', function () {
    return "<h1>Badan Eksekutif Mahasiswa (BEM)</h1>
            <p>BEM adalah organisasi mahasiswa yang menjalankan program kerja di tingkat fakultas atau universitas.</p>";
});

Route::get('/dpm', function () {
    return "<h1>Dewan Perwakilan Mahasiswa (DPM)</h1>
            <p>DPM bertugas mengawasi kinerja BEM dan mewakili aspirasi mahasiswa.</p>";
});

Route::get('/himasi', function () {
    return "<h1>Himpunan Mahasiswa Sistem Informasi (HIMA)</h1>
            <p>HIMASI adalah organisasi mahasiswa yang berada di tingkat program studi sSistem Informasi.</p>";
});

/* ROUTE PROFIL */

Route::get('/profil', [ProfilController::class, 'index']);

Route::get('/profil/{id}', [ProfilController::class, 'show']);