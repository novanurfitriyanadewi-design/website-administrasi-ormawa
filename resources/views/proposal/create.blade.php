@extends('layouts.admin')

@section('title', 'Ajukan Proposal')

@section('content')

<div class="max-w-2xl mx-auto px-4 py-8">

    <h1 class="text-2xl font-bold mb-6 text-gray-800">
        Pengajuan Proposal
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
          action="{{ route('proposal.store') }}"
          enctype="multipart/form-data"
          class="bg-white rounded-xl shadow-md p-8 space-y-6">

        @csrf

        {{-- INSTANSI --}}
        <div>

            <label class="block text-sm font-medium text-gray-700 mb-2">
                Nama Instansi
            </label>

            <input type="text"
                   value="{{ strtoupper(auth()->user()->role) }}"
                   readonly
                   class="w-full bg-gray-100 border border-gray-300 rounded-lg px-4 py-3">

        </div>

        {{-- NAMA KEGIATAN --}}
        <div>

            <label class="block text-sm font-medium text-gray-700 mb-2">
                Nama Kegiatan
            </label>

            <input type="text"
                   name="nama_kegiatan"
                   value="{{ old('nama_kegiatan') }}"
                   class="w-full border border-gray-300 rounded-lg px-4 py-3"
                   placeholder="Masukkan nama kegiatan">

        </div>

        {{-- JUDUL PROPOSAL --}}
        <div>

            <label class="block text-sm font-medium text-gray-700 mb-2">
                Judul Proposal
            </label>

            <input type="text"
                   name="judul"
                   value="{{ old('judul') }}"
                   class="w-full border border-gray-300 rounded-lg px-4 py-3"
                   placeholder="Masukkan judul proposal">

        </div>

        {{-- FILE --}}
        <div>

            <label class="block text-sm font-medium text-gray-700 mb-2">
                Upload Proposal (PDF)
            </label>

            <input type="file"
                   name="file_proposal"
                   accept=".pdf"
                   class="w-full border border-gray-300 rounded-lg px-4 py-3">

        </div>

        {{-- BUTTON --}}
        <div class="flex justify-between items-center pt-2">

            <a href="{{ route('proposal.index') }}"
               class="bg-gray-500 hover:bg-gray-600 text-white px-5 py-2 rounded-lg">

                Kembali

            </a>

            <button type="submit"
                    class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-lg">

                Ajukan Proposal

            </button>

        </div>

    </form>

</div>

@endsection