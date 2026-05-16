@extends('layouts.app')

@section('title', 'Edit Surat Masuk')

@section('content')

<div class="max-w-2xl mx-auto px-4 py-8">

    <h1 class="text-2xl font-bold mb-6 text-gray-800">
        Edit Surat Masuk
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
          action="{{ route('surat-masuk.update', $suratMasuk->id) }}"
          enctype="multipart/form-data"
          class="bg-white p-6 rounded-lg shadow space-y-5">

        @csrf
        @method('PUT')

        {{-- JENIS SURAT --}}
        <div>
            <label class="block mb-1 font-medium">Jenis Surat</label>

            <select name="jenis_surat_id"
                    class="w-full border rounded px-3 py-2">

                <option value="">-- Pilih Jenis --</option>

                @foreach ($jenis as $j)
                    <option value="{{ $j->id }}"
                        {{ old('jenis_surat_id', $suratMasuk->jenis_surat_id) == $j->id ? 'selected' : '' }}>
                        {{ $j->nama }}
                    </option>
                @endforeach

            </select>
        </div>

        {{-- NOMOR SURAT --}}
        <div>
            <label class="block mb-1 font-medium">Nomor Surat</label>

            <input type="text"
                   name="nomor_surat"
                   value="{{ old('nomor_surat', $suratMasuk->nomor_surat) }}"
                   class="w-full border rounded px-3 py-2">
        </div>

        {{-- PERIHAL --}}
        <div>
            <label class="block mb-1 font-medium">Perihal</label>

            <input type="text"
                   name="perihal"
                   value="{{ old('perihal', $suratMasuk->perihal) }}"
                   class="w-full border rounded px-3 py-2">
        </div>

        {{-- PENGIRIM --}}
        <div>
            <label class="block mb-1 font-medium">Pengirim</label>

            <input type="text"
                   name="pengirim"
                   value="{{ old('pengirim', $suratMasuk->pengirim) }}"
                   class="w-full border rounded px-3 py-2">
        </div>

        {{-- TANGGAL --}}
        <div>
            <label class="block mb-1 font-medium">Tanggal Surat</label>

            <input type="date"
                   name="tanggal_surat"
                   value="{{ old('tanggal_surat', $suratMasuk->tanggal_surat) }}"
                   class="w-full border rounded px-3 py-2">
        </div>

        {{-- FILE LAMA --}}
        @if($suratMasuk->file)
            <div>
                <label class="block mb-2 font-medium">File Saat Ini</label>

                <a href="{{ asset('storage/' . $suratMasuk->file) }}"
                   target="_blank"
                   class="text-white bg-blue-600 px-4 py-2 rounded inline-block">
                    Lihat File
                </a>
            </div>
        @endif

        {{-- UPLOAD FILE BARU --}}
        <div>
            <label class="block mb-1 font-medium">Upload File Baru</label>

            <input type="file"
                   name="file"
                   class="w-full border rounded px-3 py-2">
        </div>

        {{-- BUTTON --}}
        <div class="flex justify-between pt-4">

            <a href="{{ route('surat-masuk.index') }}"
               class="bg-gray-500 text-white px-4 py-2 rounded">
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