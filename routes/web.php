<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\OrmawaController;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\SuratKeluarController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\DpmController;
use App\Http\Controllers\ProposalController;
use App\Http\Controllers\KandidatController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;

/* HOME (halaman publik) */
Route::get('/', function () {
    return view('beranda.index');
})->name('home');

/* PERKENALAN */
Route::get('/perkenalan', fn() => '
    <h1>Halo! Nama saya Nova Nurfitriyana</h1>
    <p>NIM: 4124051 | Prodi: Sistem Informasi</p>
    <p>Saya siap belajar Laravel! 🚀</p>
');

/* KOLABORATOR */
Route::get('/badrus-sholeh', fn() => "Halo, saya M. Badrus Sholeh (Kolaborator)");
Route::get('/bimoadi', fn() => "Halo, saya Bimoadi (Kolaborator)");

/* ORMAWA */
Route::get('/ormawa', [OrmawaController::class, 'index'])->name('ormawa.index');
Route::get('/ormawa/{nama}', [OrmawaController::class, 'show'])->name('ormawa.show');

/* HALAMAN ORGANISASI */
Route::view('/bem', 'ormawa.bem')->name('bem');
Route::view('/dpm', 'ormawa.dpm')->name('dpm');
Route::view('/himasi', 'ormawa.himasi')->name('himasi');

/* PROFIL */
Route::get('/profil', [ProfilController::class, 'index'])->name('profil.index');
Route::get('/profil/{id}', [ProfilController::class, 'show'])->name('profil.show');

/* PROGRAM */
Route::view('/program', 'program.index')->name('program');
Route::view('/program/bem', 'program.bem.index')->name('program.bem');
Route::get('/program/dpm', [DpmController::class, 'index'])->name('program.dpm');
Route::get('/program/dpm/create', [DpmController::class, 'create'])->name('dpm.create');
Route::post('/program/dpm/store', [DpmController::class, 'store'])->name('dpm.store');
Route::view('/program/himasi', 'program.himasi.index')->name('program.himasi');

/* SURAT */
Route::resource('surat-masuk', SuratMasukController::class);
Route::resource('surat-keluar', SuratKeluarController::class);

/* LAPORAN (publik) */
Route::get('/laporan', [LaporanController::class, 'perKategori'])->name('laporan');

/* AREA LOGIN (hanya untuk user yang sudah login) */
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [LaporanController::class, 'perKategori'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('proposal', ProposalController::class);
    Route::put('/proposal/{proposal}/revisi', [ProposalController::class, 'revisi'])->name('proposal.revisi');

    Route::resource('kandidat', KandidatController::class);
    Route::get('/verifikasi-kandidat', [KandidatController::class, 'verifikasi'])->name('verifikasi.kandidat');
    Route::post('/approve/{id}', [KandidatController::class, 'approve'])->name('kandidat.approve');
    Route::post('/reject/{id}', [KandidatController::class, 'reject'])->name('kandidat.reject');
});

if (! app()->environment('production')) {
    Route::get('/cek-login', function () {
        return [
            'check' => Auth::check(),
            'user' => Auth::user(),
            'session' => session()->all(),
        ];
    });

    Route::get('/cek-config', function () {
        return [
            'driver' => config('session.driver'),
            'secure' => config('session.secure'),
            'domain' => config('session.domain'),
            'same_site' => config('session.same_site'),
            'app_url' => config('app.url'),
            'connection' => config('session.connection'),
            'table' => config('session.table'),
        ];
    });

    Route::get('/cek-cookie', function () {
        return response()->json([
            'session_cookie_name' => config('session.cookie'),
            'request_cookies' => request()->cookies->all(),
            'session_id' => session()->getId(),
        ]);
    });

    Route::get('/cek-session-config', function () {
        return [
            'driver' => config('session.driver'),
            'cookie' => config('session.cookie'),
            'secure' => config('session.secure'),
            'same_site' => config('session.same_site'),
            'domain' => config('session.domain'),
        ];
    });

    Route::get('/cek-auth', function () {
        return [
            'auth' => Auth::check(),
            'id' => Auth::id(),
            'user' => Auth::user(),
            'session' => session()->all(),
            'session_id' => session()->getId(),
        ];
    });

    Route::get('/cek-app', function () {
        return [
            'app_key' => config('app.key') ? 'ADA' : 'TIDAK ADA',
            'app_url' => config('app.url'),
            'session_driver' => config('session.driver'),
            'session_cookie' => config('session.cookie'),
        ];
    });
}

/* AUTH */
require __DIR__.'/auth.php';

if (app()->environment('production')) {
     URL:: forceScheme('https');
}