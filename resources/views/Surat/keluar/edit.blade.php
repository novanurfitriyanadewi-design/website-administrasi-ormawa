@extends('layouts.app')

@section('title', 'Edit Surat Keluar')

@section('content')

<div class="max-w-2xl mx-auto px-4 py-8">

    <h1 class="text-2xl font-bold mb-6 text-gray-800">
        Edit Surat Keluar
    </h1>

    {{-- ERROR VALIDASI --}}
    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-4 rounded mb-4">
            <ul class="text-sm list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- FORM --}}
    <form method="POST"
          action="{{ route('surat-keluar.update', $suratKeluar->id) }}"
          enctype="multipart/form-data"
          class="bg-white rounded-xl shadow-md p-8 space-y-6">

        @csrf
        @method('PUT')

        {{-- NOMOR SURAT --}}
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">
                Nomor Surat
            </label>

            <input type="text"
                   name="nomor_surat"
                   value="{{ old('nomor_surat', $suratKeluar->nomor_surat) }}"
                   class="w-full border rounded-lg px-4 py-2">
        </div>

        {{-- JENIS SURAT (DARI TABEL RELASI) --}}
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">
                Jenis Surat
            </label>

            <select name="jenis_surat_id"
                    class="w-full border rounded-lg px-4 py-2">

                <option value="">-- Pilih Jenis --</option>

                @foreach ($jenis as $j)
                    <option value="{{ $j->id }}"
                        {{ old('jenis_surat_id', $suratKeluar->jenis_surat_id) == $j->id ? 'selected' : '' }}>
                        {{ $j->nama }}
                    </option>
                @endforeach

            </select>
        </div>

        {{-- PERIHAL --}}
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">
                Perihal
            </label>

            <input type="text"
                   name="perihal"
                   value="{{ old('perihal', $suratKeluar->perihal) }}"
                   class="w-full border rounded-lg px-4 py-2">
        </div>

        {{-- KEPADA --}}
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">
                Kepada
            </label>

            <input type="text"
                   name="kepada"
                   value="{{ old('kepada', $suratKeluar->kepada) }}"
                   class="w-full border rounded-lg px-4 py-2">
        </div>

        {{-- TANGGAL SURAT --}}
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">
                Tanggal Surat
            </label>

            <input type="date"
                   name="tanggal_surat"
                   value="{{ old('tanggal_surat', $suratKeluar->tanggal_surat) }}"
                   class="w-full border rounded-lg px-4 py-2">
        </div>

        {{-- FILE LAMA --}}
        @if($suratKeluar->file)
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    File Saat Ini
                </label>

                <a href="{{ asset('storage/' . $suratKeluar->file) }}"
                   target="_blank"
                   class="inline-block bg-blue-500 text-white px-4 py-2 rounded-lg">
                    Lihat File
                </a>
            </div>
        @endif

        {{-- UPLOAD FILE BARU --}}
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">
                Upload File Baru
            </label>

            <input type="file"
                   name="file"
                   class="w-full border border-gray-300 rounded-lg px-4 py-2">
        </div>

        {{-- BUTTON --}}
        <div class="flex justify-between pt-4">

            <a href="{{ route('surat-keluar.index') }}"
               class="px-4 py-2 bg-gray-400 text-white rounded">
                Kembali
            </a>

            <button type="submit"
                    class="bg-blue-600 text-white px-6 py-2 rounded">
                Update
            </button>

        </div>

    </form>

</div>

@endsection