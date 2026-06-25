<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\OrmawaController;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\SuratKeluarController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\DpmController;
use App\Http\Controllers\ProposalController;
use App\Http\Controllers\KandidatController;

/*
|--------------------------------------------------------------------------
| HOME
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('beranda.index');
})->name('home');


/*
|--------------------------------------------------------------------------
| PERKENALAN
|--------------------------------------------------------------------------
*/

Route::get('/perkenalan', function () {
    return '
        <h1>Halo! Nama saya Nova Nurfitriyana</h1>
        <p>NIM: 4124051 | Prodi: Sistem Informasi</p>
        <p>Saya siap belajar Laravel! 🚀</p>
    ';
});


/*
|--------------------------------------------------------------------------
| KOLABORATOR
|--------------------------------------------------------------------------
*/

Route::get('/badrus-sholeh', function () {
    return "Halo, saya M. Badrus Sholeh (Kolaborator)";
});

Route::get('/bimoadi', function () {
    return "Halo, saya Bimoadi (Kolaborator)";
});


/*
|--------------------------------------------------------------------------
| ORMAWA
|--------------------------------------------------------------------------
*/

Route::get('/ormawa', [OrmawaController::class, 'index'])
    ->name('ormawa.index');

Route::get('/ormawa/{nama}', [OrmawaController::class, 'show'])
    ->name('ormawa.show');


/*
|--------------------------------------------------------------------------
| HALAMAN ORGANISASI
|--------------------------------------------------------------------------
*/

Route::get('/bem', function () {
    return view('ormawa.bem');
})->name('bem');

Route::get('/dpm', function () {
    return view('ormawa.dpm');
})->name('dpm');

Route::get('/himasi', function () {
    return view('ormawa.himasi');
})->name('himasi');


/*
|--------------------------------------------------------------------------
| PROFIL
|--------------------------------------------------------------------------
*/

Route::get('/profil', [ProfilController::class, 'index'])
    ->name('profil.index');

Route::get('/profil/{id}', [ProfilController::class, 'show'])
    ->name('profil.show');


/*
|--------------------------------------------------------------------------
| PROGRAM KERJA
|--------------------------------------------------------------------------
*/

Route::view('/program', 'program.index')
    ->name('program');

Route::view('/program/bem', 'program.bem.index')
    ->name('program.bem');

Route::get('/program/dpm', [DpmController::class, 'index'])
    ->name('program.dpm');

Route::get('/program/dpm/create', [DpmController::class, 'create'])
    ->name('dpm.create');

Route::post('/program/dpm/store', [DpmController::class, 'store'])
    ->name('dpm.store');

Route::view('/program/himasi', 'program.himasi.index')
    ->name('program.himasi');


/*
|--------------------------------------------------------------------------
| SURAT
|--------------------------------------------------------------------------
*/

Route::resource('surat-masuk', SuratMasukController::class);
Route::resource('surat-keluar', SuratKeluarController::class);


/*
|--------------------------------------------------------------------------
| LAPORAN
|--------------------------------------------------------------------------
*/

Route::get('/laporan', [LaporanController::class, 'perKategori'])
    ->name('laporan');


/*
|--------------------------------------------------------------------------
| AREA LOGIN
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {

    /*
    |--------------------------------------------------------------------------
    | DASHBOARD
    |--------------------------------------------------------------------------
    */

    Route::get('/dashboard', [LaporanController::class, 'perKategori'])
        ->name('dashboard');

    /*
    |--------------------------------------------------------------------------
    | PROPOSAL
    |--------------------------------------------------------------------------
    */

    Route::resource('proposal', ProposalController::class);

    Route::put('/proposal/{proposal}/revisi',
        [ProposalController::class, 'revisi'])
        ->name('proposal.revisi');

    /*
    |--------------------------------------------------------------------------
    | KANDIDAT KETUA BEM / HIMASI
    |--------------------------------------------------------------------------
    */

    Route::resource('kandidat', KandidatController::class);

    /*
    |--------------------------------------------------------------------------
    | VERIFIKASI KANDIDAT OLEH DPM
    |--------------------------------------------------------------------------
    */

    Route::get('/verifikasi-kandidat',
        [KandidatController::class, 'verifikasi'])
        ->name('verifikasi.kandidat');

    Route::post('/approve/{id}',
        [KandidatController::class, 'approve'])
        ->name('kandidat.approve');

    Route::post('/reject/{id}',
        [KandidatController::class, 'reject'])
        ->name('kandidat.reject');
});


/*
|--------------------------------------------------------------------------
| AUTH
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';