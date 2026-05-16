@extends('layouts.app')

@section('title', 'Tambah Surat Keluar')

@section('content')

<div class="max-w-2xl mx-auto px-4 py-8">

    <h1 class="text-2xl font-bold mb-6 text-gray-800">
        Tambah Surat Keluar
    </h1>

    @if ($errors->any())

        <div class="bg-red-100 border border-red-300 text-red-700 px-4 py-3 rounded-lg mb-5">

            <ul class="list-disc pl-5 text-sm">

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif

    <form method="POST"
          action="{{ route('surat-keluar.store') }}"
          enctype="multipart/form-data"
          class="bg-white rounded-xl shadow-md p-8 space-y-6">

        @csrf

        {{-- NOMOR SURAT --}}
        <div>

            <label class="block text-sm font-medium text-gray-700 mb-2">
                Nomor Surat
            </label>

            <input type="text"
                   name="nomor_surat"
                   value="{{ old('nomor_surat') }}"
                   class="w-full border border-gray-300 rounded-lg px-4 py-3">

        </div>

        {{-- JENIS SURAT --}}
        <div>

            <label class="block text-sm font-medium text-gray-700 mb-2">
                Jenis Surat
            </label>

            <select name="jenis_surat_id"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3">

                <option value="">
                    -- Pilih Jenis Surat --
                </option>

                @foreach($jenis as $item)

                    <option value="{{ $item->id }}">

                        {{ $item->nama }}

                    </option>

                @endforeach

            </select>

        </div>

        {{-- PERIHAL --}}
        <div>

            <label class="block text-sm font-medium text-gray-700 mb-2">
                Perihal
            </label>

            <input type="text"
                   name="perihal"
                   value="{{ old('perihal') }}"
                   class="w-full border border-gray-300 rounded-lg px-4 py-3">

        </div>

        {{-- KEPADA --}}
        <div>

            <label class="block text-sm font-medium text-gray-700 mb-2">
                Kepada
            </label>

            <input type="text"
                   name="kepada"
                   value="{{ old('kepada') }}"
                   class="w-full border border-gray-300 rounded-lg px-4 py-3">

        </div>

        {{-- TANGGAL --}}
        <div>

            <label class="block text-sm font-medium text-gray-700 mb-2">
                Tanggal Surat
            </label>

            <input type="date"
                   name="tanggal_surat"
                   value="{{ old('tanggal_surat') }}"
                   class="w-full border border-gray-300 rounded-lg px-4 py-3">

        </div>

        {{-- FILE --}}
        <div>

            <label class="block text-sm font-medium text-gray-700 mb-2">
                Upload File
            </label>

            <input type="file"
                   name="file"
                   class="w-full border border-gray-300 rounded-lg px-4 py-3">

        </div>

        {{-- BUTTON --}}
        <div class="flex justify-between items-center pt-2">

            <a href="{{ route('surat-keluar.index') }}"
               class="bg-gray-500 hover:bg-gray-600 text-white px-5 py-2 rounded-lg">

                Kembali

            </a>

            <button type="submit"
                    class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-lg">

                Simpan

            </button>

        </div>

    </form>

</div>

@endsection