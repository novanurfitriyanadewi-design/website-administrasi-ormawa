@extends('layouts.admin')

@section('content')

<h1 class="text-3xl font-bold mb-6">
    Dashboard
</h1>

<!-- GRID STATISTIK -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">

    <div class="bg-white shadow rounded-lg p-6">
        <h2 class="text-sm font-medium text-gray-500">Surat Masuk</h2>
        <p class="text-2xl font-bold text-sky-700 mt-2">
            {{ $jumlahSuratMasuk ?? 0 }}
        </p>
    </div>

    <div class="bg-white shadow rounded-lg p-6">
        <h2 class="text-sm font-medium text-gray-500">Surat Keluar</h2>
        <p class="text-2xl font-bold text-sky-700 mt-2">
            {{ $jumlahSuratKeluar ?? 0 }}
        </p>
    </div>

    <div class="bg-white shadow rounded-lg p-6">
        <h2 class="text-sm font-medium text-gray-500">Proposal</h2>
        <p class="text-2xl font-bold text-sky-700 mt-2">
            {{ $jumlahProposal ?? 0 }}
        </p>
    </div>

    <div class="bg-white shadow rounded-lg p-6">
        <h2 class="text-sm font-medium text-gray-500">Kandidat</h2>
        <p class="text-2xl font-bold text-sky-700 mt-2">
            {{ $jumlahKandidat ?? 0 }}
        </p>
    </div>

</div>

<!-- WELCOME CARD -->
<div class="bg-white shadow rounded-lg p-8">
    <h2 class="text-xl font-semibold mb-3">Selamat Datang, {{ auth()->user()->name }}</h2>
    <p class="text-gray-600 leading-relaxed">
        Anda login sebagai <span class="font-bold">{{ auth()->user()->role }}</span>. 
        Gunakan menu di sidebar untuk mengelola surat, proposal, dan verifikasi kandidat.
    </p>
</div>

@endsection
