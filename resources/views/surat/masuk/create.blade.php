@extends('layouts.admin')

@section('title', 'Tambah Surat Masuk')

@section('content')
<div class="max-w-2xl mx-auto px-4 py-8">

    <h1 class="text-2xl font-bold mb-6 text-gray-800">
        Tambah Surat Masuk
    </h1>

    {{-- ERROR --}}
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
          action="{{ route('surat-masuk.store') }}"
          enctype="multipart/form-data"
          class="bg-white rounded-xl shadow-md p-8 space-y-6">

        @csrf

        {{-- JENIS SURAT --}}
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">
                Jenis Surat
            </label>

            <select name="jenis_surat_id"
                    class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500">

                <option value="">-- Pilih Jenis Surat --</option>

                @foreach($jenis as $item)
                    <option value="{{ $item->id }}">
                        {{ $item->nama }}
                    </option>
                @endforeach

            </select>
        </div>

        {{-- NOMOR SURAT --}}
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">
                Nomor Surat
            </label>

            <input type="text"
                   name="nomor_surat"
                   value="{{ old('nomor_surat') }}"
                   class="w-full border rounded-lg px-4 py-2"
                   placeholder="Contoh: 001/SM/V/2026">
        </div>

        {{-- TANGGAL SURAT (FIX) --}}
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">
                Tanggal Surat
            </label>

            <input type="date"
                   name="tanggal_surat"
                   value="{{ old('tanggal_surat') }}"
                   class="w-full border rounded-lg px-4 py-2">
        </div>

        {{-- PENGIRIM --}}
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">
                Pengirim
            </label>

            <input type="text"
                   name="pengirim"
                   value="{{ old('pengirim') }}"
                   class="w-full border rounded-lg px-4 py-2"
                   placeholder="Nama instansi / orang">
        </div>

        {{-- PERIHAL --}}
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">
                Perihal
            </label>

            <textarea name="perihal"
                      class="w-full border rounded-lg px-4 py-2"
                      placeholder="Isi perihal surat...">{{ old('perihal') }}</textarea>
        </div>

        {{-- UPLOAD FILE --}}
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">
                Upload File Surat
            </label>

            <input type="file"
                   name="file"
                   class="w-full border border-gray-300 rounded-lg px-4 py-3">
        </div>

        {{-- BUTTON --}}
        <div class="flex justify-between">

            <a href="{{ route('surat-masuk.index') }}"
               class="px-4 py-2 bg-gray-400 hover:bg-gray-500 text-white rounded">
                Kembali
            </a>

            <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded">
                Simpan
            </button>

        </div>

    </form>

</div>
@endsection