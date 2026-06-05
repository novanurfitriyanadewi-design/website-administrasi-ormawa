@extends('layouts.admin')

@section('content')

<h1 class="text-3xl font-bold mb-8">
    Dashboard Administrasi ORMAWA
</h1>

<div class="grid grid-cols-4 gap-6">

    <div class="bg-white p-6 rounded-2xl shadow">
        <h2 class="text-gray-500">Surat Masuk</h2>
        <p class="text-3xl font-bold mt-2">12</p>
    </div>

    <div class="bg-white p-6 rounded-2xl shadow">
        <h2 class="text-gray-500">Surat Keluar</h2>
        <p class="text-3xl font-bold mt-2">8</p>
    </div>

    <div class="bg-white p-6 rounded-2xl shadow">
        <h2 class="text-gray-500">Proposal</h2>
        <p class="text-3xl font-bold mt-2">5</p>
    </div>

    <div class="bg-white p-6 rounded-2xl shadow">
        <h2 class="text-gray-500">Pengecekan</h2>
        <p class="text-3xl font-bold mt-2">10</p>
    </div>

</div>

@endsection