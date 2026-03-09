<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/perkenalan', function () {

    return '<h1>Halo! Nama saya Nova Nurfitriyana Dewi</h1>

            <p>NIM: 4124051 | Prodi: Sistem Informasi</p>

            <p>Saya siap belajar Laravel! 🚀</p>';

});
Route::get('/badrus-sholeh', function () {
    return "Halo, saya Badrus Sholeh (Kolaborator)";
});            

Route::get('/bimoadi', function () {
    return "Halo, saya bimoadi (Kolaborator)";
}); 

/* ROUTE NOVA */

Route::get('/tentang', function () {
    return "<h1>Tentang Sistem Administrasi Ormawa</h1>
            <p>Website ini dibuat untuk mengelola administrasi organisasi mahasiswa SAINTEK UNIPDU JOMBANG.</p>";
})->name('tentang.index');

Route::get('/contact', function () {
    return "<h1>contact</h1>
})->name('contact.index');