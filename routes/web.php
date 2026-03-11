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
 return "Halo, saya Bimoadi (Kolaborator)";
});

/* ROUTE PROFIL */

Route::get('/profil', [ProfilController::class, 'index']);

Route::get('/profil/{id}', [ProfilController::class, 'show']);
=======
    return "Halo, saya bimoadi (Kolaborator)";
}); 

/* ROUTE NOVA */

Route::get('/tentang', function () {
    return "<h1>Tentang Sistem Administrasi Ormawa</h1>
            <p>Website ini dibuat untuk mengelola administrasi organisasi mahasiswa SAINTEK UNIPDU JOMBANG.</p>";
})->name('tentang.index');
>>>>>>> a17358f (Menambahkan route tentang dan controller profil)
