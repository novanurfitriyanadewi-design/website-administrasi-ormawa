@extends('layouts.admin')

@section('content')

<h1 class="text-3xl font-bold mb-5">
    Pendaftaran Calon Ketua
</h1>

<form action="{{ route('kandidat.store') }}"
      method="POST"
      enctype="multipart/form-data"
      class="bg-white p-6 rounded shadow">

    @csrf

    <input
        type="text"
        name="nama"
        placeholder="Nama"
        class="w-full border p-2 mb-3">

    <input
        type="text"
        name="nim"
        placeholder="NIM"
        class="w-full border p-2 mb-3">

    <input
        type="text"
        name="prodi"
        placeholder="Program Studi"
        class="w-full border p-2 mb-3">

    <select
        name="organisasi"
        class="w-full border p-2 mb-3">

        <option value="BEM">BEM</option>
        <option value="HIMASI">HIMASI</option>

    </select>

    <input
        type="number"
        step="0.01"
        min="0"
        max="4"
        name="ipk"
        placeholder="IPK"
        class="w-full border p-2 mb-3">


    <textarea
        name="visi"
        class="w-full border p-2 mb-3"
        placeholder="Visi"></textarea>

    <textarea
        name="misi"
        class="w-full border p-2 mb-3"
        placeholder="Misi"></textarea>

    <input
        type="file"
        name="foto"
        class="mb-3">

    <button
        type="submit"
        class="bg-blue-600 text-white px-4 py-2 rounded">

        Simpan

    </button>

</form>

@endsection