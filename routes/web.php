<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\OrmawaController;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\SuratKeluarController;
use App\Http\Controllers\LaporanController;

/* HOME  */
Route::get('/', function () {
    return view('beranda.index'); 
})->name('home');


/* PERKENALAN  */
Route::get('/perkenalan', function () {
    return '<h1>Halo! Nama saya Nova Nurfitriyana</h1>
            <p>NIM: 4124051 | Prodi: Sistem Informasi</p>
            <p>Saya siap belajar Laravel! 🚀</p>';
});


/* KOLABORATOR  */
Route::get('/badrus-sholeh', function () {
    return "Halo, saya M. Badrus Sholeh (Kolaborator)";
});

Route::get('/bimoadi', function () {
    return "Halo, saya Bimoadi (Kolaborator)";
});


/* ORMAWA */
Route::get('/ormawa', [OrmawaController::class, 'index'])
    ->name('ormawa.index');
Route::get('/ormawa/{nama}', [OrmawaController::class, 'show'])
    ->name('ormawa.show');


/* PROFIL */
Route::get('/profil', [ProfilController::class, 'index'])
    ->name('profil.index');
Route::get('/profil/{id}', [ProfilController::class, 'show'])
    ->name('profil.show');


/*  PROGRAM  */
Route::prefix('program')->name('program.')->group(function () {
Route::get('/', [KatalogController::class, 'index'])
        ->name('index');
Route::get('/detail/{slug}', [KatalogController::class, 'show'])
        ->name('show');
});


/* SURAT */
Route::resource('surat-masuk', SuratMasukController::class);
Route::resource('surat-keluar', SuratKeluarController::class);

/* LAPORAN */
Route::get('/laporan', [LaporanController::class, 'perKategori'])->name('laporan');