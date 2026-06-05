@extends('layouts.app')

@section('title', 'BEM')

@section('content')


  //* HERO SECTION *//
<div class="w-full">

    <div class="relative h-[90vh] -mt-20">

        {{-- Background Image --}}
        <img src="{{ asset('images/bem_struktur.jpeg') }}"
             class="absolute inset-0 w-full h-full object-cover">

        {{-- Overlay --}}
        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/60 to-black/30"></div>

        {{-- Content --}}
        <div class="relative z-10 flex items-center justify-center h-full text-center text-white px-6">

            <div class="max-w-4xl">

                <h1 class="text-5xl md:text-7xl font-bold tracking-wide leading-tight">
                    BEM F.SAINTEK
                </h1>

                <p class="mt-6 text-lg md:text-2xl text-gray-200">
                    Selamat Datang di Jantung Pergerakan Mahasiswa
                </p>

                {{-- BUTTON --}}
                <div class="mt-10 flex justify-center gap-4 flex-wrap">

                    <a href="#tentang"
                       class="bg-sky-600 hover:bg-sky-500 px-8 py-3 rounded-full text-white font-semibold shadow-lg transition duration-300">
                        Tentang BEM
                    </a>

                    <a href="#struktur"
                       class="bg-white/10 backdrop-blur-md hover:bg-white/20 px-8 py-3 rounded-full text-white font-semibold border border-white/30 transition duration-300">
                        Struktur Pengurus
                    </a>

                </div>

            </div>

        </div>

    </div>

</div>

{{-- ================================================================
     ABOUT SECTION
     ================================================================ --}}
<section id="tentang" class="bg-white py-20">

    <div class="max-w-6xl mx-auto px-6">

        <div class="grid md:grid-cols-2 gap-12 items-center">

            {{-- Image --}}
            <div>
                <img src="{{ asset('images/bem.png') }}"
                     class="w-full max-w-md mx-auto drop-shadow-xl">
            </div>

            {{-- Text --}}
            <div>

                <h2 class="text-4xl font-bold text-sky-900 mb-6">
                    Tentang BEM
                </h2>

                <p class="text-gray-700 leading-relaxed text-lg">
                    Badan Eksekutif Mahasiswa (BEM) merupakan organisasi mahasiswa
                    yang menjadi pusat aspirasi, kolaborasi, dan pengembangan potensi
                    mahasiswa dalam menciptakan lingkungan kampus yang aktif,
                    progresif, dan inspiratif.
                </p>

                <p class="text-gray-700 leading-relaxed text-lg mt-4">
                    Melalui berbagai program kerja dan kegiatan kemahasiswaan,
                    BEM hadir sebagai wadah untuk membangun kepemimpinan,
                    kreativitas, serta semangat pengabdian bagi seluruh mahasiswa.
                </p>

            </div>

        </div>

    </div>

</section>

{{-- ================================================================
     VISI MISI
     ================================================================ --}}
<section class="bg-slate-100 py-20">

    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-14">

            <h2 class="text-4xl font-bold text-sky-900">
                VISI & MISI
            </h2>

            <p class="text-gray-600 mt-3">
                Landasan utama gerak organisasi mahasiswa
            </p>

        </div>

        <div class="grid md:grid-cols-2 gap-8">

            {{-- VISI --}}
            <div class="bg-white rounded-3xl p-8 shadow-lg border-t-4 border-sky-700">

                <h3 class="text-2xl font-bold text-sky-800 mb-5">
                    VISI
                </h3>

                <p class="text-gray-700 leading-relaxed">
                    Menjadikan BEM FST sebagai entitas dinamis yang proaktif
                    dalam mengoptimalkan potensi mahasiswa, sehingga mampu
                    membangun citra fakultas di wilayah intra dan ekstra kampus
                    dengan baik.
                </p>

            </div>

            {{-- MISI --}}
            <div class="bg-white rounded-3xl p-8 shadow-lg border-t-4 border-yellow-400">

                <h3 class="text-2xl font-bold text-sky-800 mb-5">
                    MISI
                </h3>

                <ul class="space-y-4 text-gray-700">

                    <li class="flex gap-3">
                        <span class="font-bold text-sky-700">1.</span>
                        <span>Mendorong Partisipasi Aktif Mahasiswa.</span>
                    </li>

                    <li class="flex gap-3">
                        <span class="font-bold text-sky-700">2.</span>
                        <span>Membangun Komunikasi dan Kolaborasi yang Efektif.</span>
                    </li>

                    <li class="flex gap-3">
                        <span class="font-bold text-sky-700">3.</span>
                        <span>Mengoptimalkan Media dan Teknologi Informasi.</span>
                    </li>

                    <li class="flex gap-3">
                        <span class="font-bold text-sky-700">4.</span>
                        <span>Mendorong Inovasi dan Kreativitas dalam Kegiatan Kemahasiswaan.</span>
                    </li>

                    <li class="flex gap-3">
                        <span class="font-bold text-sky-700">5.</span>
                        <span>Menjaga Integritas dan Profesionalisme Organisasi.</span>
                    </li>

                </ul>

            </div>

        </div>

    </div>

</section>

{{-- ================================================================
     STRUKTUR PENGURUS
     ================================================================ --}}
<section id="struktur" class="bg-gray-100 py-24">

    <div class="max-w-5xl mx-auto px-6">

        {{-- JUDUL --}}
        <div class="text-center mb-16">

            <h2 class="text-4xl font-bold text-gray-900">
                Struktur Pengurus
            </h2>

            <p class="text-gray-500 mt-3">
                Susunan Pengurus Badan Eksekutif Mahasiswa
            </p>

        </div>

        {{-- KETUA --}}
        <div class="flex justify-center mb-10">

            <div class="bg-sky-950 text-white rounded-2xl shadow-lg px-14 py-8 w-full max-w-md text-center border-b-4 border-orange-400">

                <p class="text-orange-400 text-xs font-bold uppercase tracking-widest mb-2">
                    Ketua
                </p>

                <h3 class="text-2xl font-bold">
                    Farhan Dzaki Ilmi Yuliayasa
                </h3>

            </div>

        </div>

        {{-- BARIS 2 --}}
        <div class="grid md:grid-cols-2 gap-6 mb-6">

            {{-- WAKIL --}}
            <div class="bg-white rounded-2xl border border-gray-200 p-6 text-center shadow-sm">

                <p class="text-gray-400 text-xs font-bold uppercase mb-2">
                    Wakil Ketua
                </p>

                <h3 class="text-lg font-semibold text-gray-800">
                    M.Aldin Akbar Fahruli
                </h3>

            </div>

            {{-- SEKRETARIS 1 --}}
            <div class="bg-white rounded-2xl border border-gray-200 p-6 text-center shadow-sm">

                <p class="text-gray-400 text-xs font-bold uppercase mb-2">
                    Sekretaris 1
                </p>

                <h3 class="text-lg font-semibold text-gray-800">
                    Nur Kholivah
                </h3>

            </div>

        </div>

        {{-- BARIS 3 --}}
        <div class="grid md:grid-cols-2 gap-6 mb-12">

            {{-- SEKRETARIS 2 --}}
            <div class="bg-white rounded-2xl border border-gray-200 p-6 text-center shadow-sm">

                <p class="text-gray-400 text-xs font-bold uppercase mb-2">
                    Sekretaris 2
                </p>

                <h3 class="text-lg font-semibold text-gray-800">
                    Nukhi Alfin Rahmadani
                </h3>

            </div>

            {{-- BENDAHARA --}}
            <div class="bg-white rounded-2xl border border-gray-200 p-6 text-center shadow-sm">

                <p class="text-gray-400 text-xs font-bold uppercase mb-2">
                    Bendahara
                </p>

                <h3 class="text-lg font-semibold text-gray-800">
                    Yosefira Maulidina
                </h3>

            </div>

        </div>

        {{-- DEPARTEMEN --}}
        <div class="grid md:grid-cols-3 gap-6">

            {{-- DEPARTEMEN 1 --}}
            <div class="bg-white rounded-2xl border border-gray-200 p-6 text-center shadow-sm hover:shadow-md transition">

                <h3 class="text-orange-500 font-bold mb-4">
                    ✦ Departemen Keagamaan & Sosial
                </h3>

                <div class="space-y-2 text-gray-700 text-sm">

                    <div>
                        <p class="text-gray-400 text-xs">Koordinator</p>
                        <p>Immayatus Sa'adah Ayu Pramudita</p>
                    </div>

                    <div>
                        <p class="text-gray-400 text-xs">Anggota</p>
                        <p>Tiara Rohmaniyah</p>
                        <p>M.Lie Ulin Nuha</p>
                        <p>Nova Nurfitriyana Dewi</p>
                        <p>Fauziah Martha Aula</p>
                        <p>Wahyuni Devi Agustin</p>
                        <p>M.Zulkhi Mujitahid</p>
                    </div>

                </div>

            </div>

            {{-- DEPARTEMEN 2 --}}
            <div class="bg-white rounded-2xl border border-gray-200 p-6 text-center shadow-sm hover:shadow-md transition">

                <h3 class="text-orange-500 font-bold mb-4">
                    ✦ Departemen Pendidikan & Budaya
                </h3>

                <div class="space-y-2 text-gray-700 text-sm">

                    <div>
                        <p class="text-gray-400 text-xs">Koordinator</p>
                        <p>Muh. Fahmil Haq</p>
                    </div>

                    <div>
                        <p class="text-gray-400 text-xs">Anggota</p>
                        <p>Abimanyu Pujiandika Maryadi</p>
                        <p>Muhammad Hobir Sastrawan</p>
                        <p>Moh. Fauzan Haqiqi</p>
                        <p>Nabila Khustia Rohmah</p>
                        <p>Dara Putri Nata Sukma</p>
                        <p>Nur Rida'atul Mawardi</p>
                    </div>

                </div>

            </div>

            {{-- DEPARTEMEN 3 --}}
            <div class="bg-white rounded-2xl border border-gray-200 p-6 text-center shadow-sm hover:shadow-md transition">

                <h3 class="text-orange-500 font-bold mb-4">
                    ✦ Departemen Komunikasi & Informasi
                </h3>

                <div class="space-y-2 text-gray-700 text-sm">

                    <div>
                        <p class="text-gray-400 text-xs">Koordinator</p>
                        <p>Bayu Ardiansyah</p>
                    </div>

                    <div>
                        <p class="text-gray-400 text-xs">Anggota</p>
                        <p>Ahmad Riadus Sa'id</p>
                        <p>Bimo Adi Nugroho</p>
                        <p>Hardiansyah</p>
                        <p>Siti Masitoh</p>
                        <p>Febrinna Annisa</p>
                        <p>Syariah Gustianti Putri</p>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

{{-- ================================================================
     SECTION: BERITA & PENGUMUMAN
     ================================================================ --}}
<section id="berita" class="bg-white py-24">

    <div class="max-w-7xl mx-auto px-6">

        {{-- HEADER --}}
        <div class="text-center mb-16">

            <span class="inline-block bg-sky-100 text-sky-700 text-xs font-bold uppercase tracking-widest px-4 py-1.5 rounded-full mb-4">
                Info Terkini
            </span>

            <h2 class="text-4xl font-bold text-gray-900">
                Berita & Pengumuman
            </h2>

            <p class="text-gray-500 mt-3 max-w-xl mx-auto">
                Informasi terbaru seputar kegiatan, agenda, dan pengumuman resmi dari BEM F.SAINTEK
            </p>

        </div>

        {{-- GRID BERITA --}}
        <div class="grid md:grid-cols-3 gap-8">

            {{-- CARD FEATURED — COMING SOON OPEN RECRUITMENT --}}
            <div class="md:col-span-2 relative overflow-hidden rounded-3xl bg-gradient-to-br from-sky-950 via-sky-900 to-indigo-900 text-white shadow-2xl">

                {{-- Decorative circles --}}
                <div class="absolute -top-10 -right-10 w-56 h-56 bg-white/5 rounded-full"></div>
                <div class="absolute -bottom-16 -left-10 w-72 h-72 bg-white/5 rounded-full"></div>
                <div class="absolute top-1/2 right-1/4 w-24 h-24 bg-orange-400/10 rounded-full blur-xl"></div>

                {{-- Gambar ilustrasi open recruitment --}}
                <div class="absolute right-0 bottom-0 w-48 md:w-64 opacity-10 pointer-events-none select-none">
                    <img src="{{ asset('images/bem.png') }}" alt="" class="w-full object-contain">
                </div>

                <div class="relative z-10 p-8 md:p-10 flex flex-col h-full min-h-[360px] justify-between">

                    <div>

                        {{-- Badge --}}
                        <div class="flex items-center gap-3 mb-6">
                            <span class="flex items-center gap-2 bg-orange-400 text-orange-950 text-xs font-bold uppercase tracking-widest px-3 py-1.5 rounded-full">
                                <span class="w-2 h-2 bg-orange-800 rounded-full animate-pulse"></span>
                                Coming Soon
                            </span>
                            <span class="text-sky-300 text-xs font-medium">Open Recruitment</span>
                        </div>

                        {{-- Title --}}
                        <h3 class="text-3xl md:text-4xl font-bold leading-tight mb-4">
                            Open Recruitment<br>
                            <span class="text-orange-400">Anggota BEM</span><br>
                            F.SAINTEK 2025
                        </h3>

                        <p class="text-sky-200 text-sm leading-relaxed max-w-md">
                            Jadilah bagian dari penggerak mahasiswa! Kami membuka kesempatan bagi seluruh
                            mahasiswa aktif F.SAINTEK untuk bergabung dan berkontribusi bersama BEM.
                            Informasi lengkap segera hadir.
                        </p>

                    </div>

                    {{-- Countdown & CTA --}}
                    <div class="mt-8">

                        <p class="text-sky-400 text-xs uppercase tracking-widest font-semibold mb-3">
                            Segera Hadir Dalam
                        </p>

                        {{-- Countdown Timer --}}
                        <div class="flex items-center gap-3 mb-6" id="countdown-wrap">

                            <div class="text-center">
                                <div class="bg-white/10 backdrop-blur-sm rounded-xl px-4 py-3 min-w-[60px]">
                                    <span class="text-2xl font-bold tabular-nums" id="cd-days">--</span>
                                </div>
                                <p class="text-sky-400 text-xs mt-1">Hari</p>
                            </div>

                            <span class="text-sky-400 text-2xl font-bold pb-5">:</span>

                            <div class="text-center">
                                <div class="bg-white/10 backdrop-blur-sm rounded-xl px-4 py-3 min-w-[60px]">
                                    <span class="text-2xl font-bold tabular-nums" id="cd-hours">--</span>
                                </div>
                                <p class="text-sky-400 text-xs mt-1">Jam</p>
                            </div>

                            <span class="text-sky-400 text-2xl font-bold pb-5">:</span>

                            <div class="text-center">
                                <div class="bg-white/10 backdrop-blur-sm rounded-xl px-4 py-3 min-w-[60px]">
                                    <span class="text-2xl font-bold tabular-nums" id="cd-mins">--</span>
                                </div>
                                <p class="text-sky-400 text-xs mt-1">Menit</p>
                            </div>

                            <span class="text-sky-400 text-2xl font-bold pb-5">:</span>

                            <div class="text-center">
                                <div class="bg-white/10 backdrop-blur-sm rounded-xl px-4 py-3 min-w-[60px]">
                                    <span class="text-2xl font-bold tabular-nums" id="cd-secs">--</span>
                                </div>
                                <p class="text-sky-400 text-xs mt-1">Detik</p>
                            </div>

                        </div>

                        {{-- CTA Button --}}
                        <a href="#kontak"
                           class="inline-flex items-center gap-2 bg-orange-400 hover:bg-orange-300 text-orange-950 font-bold px-6 py-3 rounded-full transition duration-300 text-sm shadow-lg shadow-orange-900/30">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6 6 0 00-5-5.917V5a1 1 0 10-2 0v.083A6 6 0 006 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                            </svg>
                            Ingatkan Saya
                        </a>

                    </div>

                </div>

            </div>

            {{-- KOLOM KANAN — 2 Card Pengumuman --}}
            <div class="flex flex-col gap-6">

                {{-- Card Pengumuman 1 --}}
                <div class="bg-slate-50 hover:bg-sky-50 border border-gray-100 hover:border-sky-200 rounded-3xl p-6 flex flex-col justify-between transition duration-300 shadow-sm hover:shadow-md flex-1 group">

                    {{-- Icon atas --}}
                    <div class="w-10 h-10 bg-green-100 rounded-xl flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>

                    <div>
                        <span class="inline-block bg-green-100 text-green-700 text-xs font-bold uppercase tracking-wide px-3 py-1 rounded-full mb-3">
                            Agenda
                        </span>
                        <h4 class="text-gray-900 font-bold text-base leading-snug mb-2">
                            Rapat Koordinasi Perdana Departemen
                        </h4>
                        <p class="text-gray-500 text-sm leading-relaxed">
                            Seluruh koordinator departemen diharapkan hadir dalam rapat koordinasi pembentukan program kerja semester ini.
                        </p>
                    </div>

                    <div class="flex items-center justify-between mt-5">
                        <span class="text-gray-400 text-xs flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            Juni 2025
                        </span>
                        <a href="#" class="text-sky-600 hover:text-sky-800 text-xs font-semibold transition group-hover:underline">
                            Selengkapnya →
                        </a>
                    </div>

                </div>

                {{-- Card Pengumuman 2 --}}
                <div class="bg-slate-50 hover:bg-sky-50 border border-gray-100 hover:border-sky-200 rounded-3xl p-6 flex flex-col justify-between transition duration-300 shadow-sm hover:shadow-md flex-1 group">

                    {{-- Icon atas --}}
                    <div class="w-10 h-10 bg-yellow-100 rounded-xl flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                        </svg>
                    </div>

                    <div>
                        <span class="inline-block bg-yellow-100 text-yellow-700 text-xs font-bold uppercase tracking-wide px-3 py-1 rounded-full mb-3">
                            Informasi
                        </span>
                        <h4 class="text-gray-900 font-bold text-base leading-snug mb-2">
                            Pelantikan Pengurus BEM Periode 2025
                        </h4>
                        <p class="text-gray-500 text-sm leading-relaxed">
                            Pengurus BEM F.SAINTEK periode 2025 telah resmi dilantik dan siap menjalankan amanah organisasi.
                        </p>
                    </div>

                    <div class="flex items-center justify-between mt-5">
                        <span class="text-gray-400 text-xs flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            Mei 2025
                        </span>
                        <a href="#" class="text-sky-600 hover:text-sky-800 text-xs font-semibold transition group-hover:underline">
                            Selengkapnya →
                        </a>
                    </div>

                </div>

            </div>

        </div>

        {{-- TOMBOL LIHAT SEMUA --}}
        <div class="text-center mt-12">
            <a href="#"
               class="inline-flex items-center gap-2 border border-gray-300 hover:border-sky-400 hover:text-sky-700 text-gray-600 font-semibold px-7 py-3 rounded-full transition duration-300 text-sm">
                Lihat Semua Pengumuman
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                </svg>
            </a>
        </div>

    </div>

</section>

{{-- ================================================================
     SECTION: KONTAK & MEDIA SOSIAL
     ================================================================ --}}
<section id="kontak" class="bg-sky-950 py-24 relative overflow-hidden">

    {{-- Decorative background blobs --}}
    <div class="absolute inset-0 pointer-events-none overflow-hidden">
        <div class="absolute top-10 left-10 w-80 h-80 bg-sky-800/30 rounded-full blur-3xl"></div>
        <div class="absolute bottom-10 right-10 w-96 h-96 bg-indigo-900/40 rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-orange-500/5 rounded-full blur-2xl"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-6">

        {{-- HEADER --}}
        <div class="text-center mb-16">

            <span class="inline-block bg-orange-400/20 text-orange-300 text-xs font-bold uppercase tracking-widest px-4 py-1.5 rounded-full mb-4">
                Hubungi Kami
            </span>

            <h2 class="text-4xl font-bold text-white">
                Kontak & Media Sosial
            </h2>

            <p class="text-sky-300 mt-3 max-w-xl mx-auto">
                Sampaikan aspirasi, pertanyaan, atau sekadar sapa kami melalui kanal berikut
            </p>

        </div>

        <div class="grid lg:grid-cols-2 gap-10 items-start">

            {{-- KIRI — Media Sosial + Lokasi --}}
            <div>

                <h3 class="text-white font-bold text-lg mb-6">
                    Temukan Kami Di
                </h3>

                <div class="space-y-4">

                    {{-- Instagram --}}
                    <a href="https://instagram.com/bem.fsaintek"
                       target="_blank" rel="noopener noreferrer"
                       class="flex items-center gap-4 bg-white/5 hover:bg-white/10 border border-white/10 hover:border-pink-400/40 rounded-2xl px-5 py-4 transition duration-300 group">

                        <div class="w-12 h-12 rounded-xl flex items-center justify-center flex-shrink-0"
                             style="background: linear-gradient(135deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%)">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </div>

                        <div class="flex-1">
                            <p class="text-white font-semibold text-sm">Instagram</p>
                            <p class="text-sky-300 text-xs mt-0.5">@bem.fsaintek</p>
                        </div>

                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-sky-500 group-hover:text-pink-300 transition" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                        </svg>

                    </a>

                    {{-- YouTube --}}
                    <a href="https://youtube.com/@bemfsaintek"
                       target="_blank" rel="noopener noreferrer"
                       class="flex items-center gap-4 bg-white/5 hover:bg-white/10 border border-white/10 hover:border-red-400/40 rounded-2xl px-5 py-4 transition duration-300 group">

                        <div class="w-12 h-12 bg-red-600 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                            </svg>
                        </div>

                        <div class="flex-1">
                            <p class="text-white font-semibold text-sm">YouTube</p>
                            <p class="text-sky-300 text-xs mt-0.5">BEM F.SAINTEK Official</p>
                        </div>

                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-sky-500 group-hover:text-red-300 transition" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                        </svg>

                    </a>

                    {{-- WhatsApp --}}
                    <a href="https://wa.me/6281234567890"
                       target="_blank" rel="noopener noreferrer"
                       class="flex items-center gap-4 bg-white/5 hover:bg-white/10 border border-white/10 hover:border-green-400/40 rounded-2xl px-5 py-4 transition duration-300 group">

                        <div class="w-12 h-12 bg-green-500 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                            </svg>
                        </div>

                        <div class="flex-1">
                            <p class="text-white font-semibold text-sm">WhatsApp</p>
                            <p class="text-sky-300 text-xs mt-0.5">+62 812-3456-7890</p>
                        </div>

                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-sky-500 group-hover:text-green-300 transition" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                        </svg>

                    </a>

                    {{-- Email --}}
                    <a href="mailto:bem.fsaintek@uinsa.ac.id"
                       class="flex items-center gap-4 bg-white/5 hover:bg-white/10 border border-white/10 hover:border-sky-400/40 rounded-2xl px-5 py-4 transition duration-300 group">

                        <div class="w-12 h-12 bg-sky-600 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>

                        <div class="flex-1">
                            <p class="text-white font-semibold text-sm">Email Resmi</p>
                            <p class="text-sky-300 text-xs mt-0.5">bem.fsaintek@uinsa.ac.id</p>
                        </div>

                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-sky-500 group-hover:text-sky-200 transition" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                        </svg>

                    </a>

                </div>

                {{-- Lokasi Sekretariat --}}
                <div class="mt-6 bg-white/5 border border-white/10 rounded-2xl px-5 py-5 flex items-start gap-4">

                    <div class="w-10 h-10 bg-orange-400/20 rounded-xl flex items-center justify-center flex-shrink-0 mt-0.5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-orange-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>

                    <div>
                        <p class="text-white font-semibold text-sm mb-1">Sekretariat BEM</p>
                        <p class="text-sky-300 text-xs leading-relaxed">
                            Gedung Fakultas Saintek Lt. 1<br>
                            Universitas Islam Negeri Sunan Ampel Surabaya<br>
                            Jl. A. Yani No.117, Surabaya 60237
                        </p>
                    </div>

                </div>

            </div>

            {{-- KANAN — Form Aspirasi --}}
            <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-3xl p-8">

                <div class="flex items-center gap-3 mb-2">
                    <div class="w-9 h-9 bg-orange-400/20 rounded-xl flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-orange-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                        </svg>
                    </div>
                    <h3 class="text-white font-bold text-lg">
                        Kirim Aspirasi
                    </h3>
                </div>

                <p class="text-sky-300 text-sm mb-7">
                    Punya saran, masukan, atau pertanyaan? Kami siap mendengar.
                </p>

                <form action="#" method="POST" class="space-y-5" id="form-aspirasi">
                    @csrf

                    {{-- Nama --}}
                    <div>
                        <label for="nama" class="block text-sky-200 text-xs font-semibold uppercase tracking-wide mb-2">
                            Nama Lengkap
                        </label>
                        <input type="text"
                               id="nama"
                               name="nama"
                               placeholder="Masukkan nama kamu"
                               required
                               class="w-full bg-white/10 border border-white/20 focus:border-sky-400 focus:bg-white/15 rounded-xl px-4 py-3 text-white placeholder-sky-400/60 text-sm outline-none transition duration-300">
                    </div>

                    {{-- Email & NIM --}}
                    <div class="grid grid-cols-2 gap-4">

                        <div>
                            <label for="email_form" class="block text-sky-200 text-xs font-semibold uppercase tracking-wide mb-2">
                                Email
                            </label>
                            <input type="email"
                                   id="email_form"
                                   name="email"
                                   placeholder="email@example.com"
                                   class="w-full bg-white/10 border border-white/20 focus:border-sky-400 focus:bg-white/15 rounded-xl px-4 py-3 text-white placeholder-sky-400/60 text-sm outline-none transition duration-300">
                        </div>

                        <div>
                            <label for="nim" class="block text-sky-200 text-xs font-semibold uppercase tracking-wide mb-2">
                                NIM
                            </label>
                            <input type="text"
                                   id="nim"
                                   name="nim"
                                   placeholder="NIM kamu"
                                   class="w-full bg-white/10 border border-white/20 focus:border-sky-400 focus:bg-white/15 rounded-xl px-4 py-3 text-white placeholder-sky-400/60 text-sm outline-none transition duration-300">
                        </div>

                    </div>

                    {{-- Jenis Pesan --}}
                    <div>
                        <label for="jenis" class="block text-sky-200 text-xs font-semibold uppercase tracking-wide mb-2">
                            Jenis Pesan
                        </label>
                        <select id="jenis"
                                name="jenis"
                                class="w-full bg-white/10 border border-white/20 focus:border-sky-400 rounded-xl px-4 py-3 text-white text-sm outline-none transition duration-300 cursor-pointer">
                            <option value="" class="bg-sky-950 text-white">-- Pilih jenis pesan --</option>
                            <option value="aspirasi" class="bg-sky-950 text-white">Aspirasi / Saran</option>
                            <option value="pertanyaan" class="bg-sky-950 text-white">Pertanyaan</option>
                            <option value="kerjasama" class="bg-sky-950 text-white">Permohonan Kerjasama</option>
                            <option value="rekrutmen" class="bg-sky-950 text-white">Info Open Recruitment</option>
                            <option value="lainnya" class="bg-sky-950 text-white">Lainnya</option>
                        </select>
                    </div>

                    {{-- Pesan --}}
                    <div>
                        <label for="pesan" class="block text-sky-200 text-xs font-semibold uppercase tracking-wide mb-2">
                            Pesan
                        </label>
                        <textarea id="pesan"
                                  name="pesan"
                                  rows="4"
                                  placeholder="Tulis pesan, saran, atau pertanyaan kamu di sini..."
                                  required
                                  class="w-full bg-white/10 border border-white/20 focus:border-sky-400 focus:bg-white/15 rounded-xl px-4 py-3 text-white placeholder-sky-400/60 text-sm outline-none transition duration-300 resize-none"></textarea>
                    </div>

                    {{-- Submit --}}
                    <button type="submit"
                            class="w-full bg-orange-400 hover:bg-orange-300 active:bg-orange-500 text-orange-950 font-bold py-3.5 rounded-xl transition duration-300 text-sm flex items-center justify-center gap-2 shadow-lg shadow-orange-900/20">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                        </svg>
                        Kirim Pesan
                    </button>

                    {{-- Pesan sukses --}}
                    <div id="success-msg" class="hidden bg-green-500/20 border border-green-400/30 rounded-xl px-4 py-3 text-green-300 text-sm text-center">
                        ✓ Pesan berhasil dikirim! Kami akan segera menghubungi kamu.
                    </div>

                </form>

            </div>

        </div>

    </div>

</section>

{{-- ================================================================
     SCRIPT: COUNTDOWN TIMER + FORM HANDLER
     ⚠️  Ganti targetDate sesuai tanggal buka Open Recruitment
     ================================================================ --}}
<script>
(function () {

    // ── COUNTDOWN ──────────────────────────────────────────────────
    // Format: new Date(TAHUN, BULAN-1, TANGGAL, JAM, MENIT, DETIK)
    // Contoh: 1 Agustus 2025 pukul 08:00 WIB
    const targetDate = new Date(2025, 7, 1, 8, 0, 0);

    function pad(n) { return String(n).padStart(2, '0'); }

    function setEl(id, val) {
        const el = document.getElementById(id);
        if (el) el.textContent = val;
    }

    function tick() {
        const diff = targetDate - new Date();

        if (diff <= 0) {
            const wrap = document.getElementById('countdown-wrap');
            if (wrap) {
                wrap.innerHTML = '<span class="text-orange-300 font-bold text-lg">🎉 Open Recruitment Sudah Dibuka!</span>';
            }
            return;
        }

        setEl('cd-days',  pad(Math.floor(diff / 86400000)));
        setEl('cd-hours', pad(Math.floor((diff % 86400000) / 3600000)));
        setEl('cd-mins',  pad(Math.floor((diff % 3600000) / 60000)));
        setEl('cd-secs',  pad(Math.floor((diff % 60000) / 1000)));
    }

    tick();
    setInterval(tick, 1000);

    // ── FORM HANDLER (demo) ─────────────────────────────────────────
    // Ganti dengan AJAX / Livewire / route POST sesuai kebutuhan
    const form = document.getElementById('form-aspirasi');
    if (form) {
        form.addEventListener('submit', function (e) {
            e.preventDefault(); // hapus baris ini jika pakai action route asli
            const msg = document.getElementById('success-msg');
            if (msg) {
                msg.classList.remove('hidden');
                form.reset();
                setTimeout(() => msg.classList.add('hidden'), 5000);
            }
        });
    }

})();
</script>

@endsection