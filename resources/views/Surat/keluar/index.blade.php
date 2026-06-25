@extends('layouts.admin')

@section('title', 'Surat Keluar')

@section('content')

<div class="max-w-7xl mx-auto py-10 px-4">

    {{-- HEADER --}}
    <div class="flex justify-between items-center mb-6">

        <h1 class="text-2xl font-bold text-gray-800">
            Data Surat Keluar
        </h1>

        <a href="{{ route('surat-keluar.create') }}"
           class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg shadow text-sm">

            + Tambah Surat

        </a>

    </div>

    {{-- SEARCH --}}
<form action="{{ route('surat-keluar.index') }}"
      method="GET"
      class="mb-5 flex gap-2">

    <input type="text"
           name="q"
           value="{{ request('q') }}"
           placeholder="Cari nomor surat / perihal / kepada..."
           class="border border-gray-300 rounded-lg px-4 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-400">

    <button type="submit"
            class="bg-gray-700 hover:bg-gray-800 text-white px-5 py-2 rounded-lg">

        Cari
    </button>

</form>

    <div class="overflow-x-auto bg-white rounded-xl shadow border border-gray-200">

    <table class="min-w-full text-sm text-gray-700">

        <thead class="bg-gray-100 text-xs uppercase tracking-wider">

            <tr>

                <th class="px-5 py-4 text-left">No</th>

                <th class="px-5 py-4 text-left">Instansi</th>

                <th class="px-5 py-4 text-left">Nama Kegiatan</th>

                <th class="px-5 py-4 text-left">Judul Proposal</th>

                <th class="px-5 py-4 text-center">Status</th>

                <th class="px-5 py-4 text-left">Catatan DPM</th>

                <th class="px-5 py-4 text-center">File</th>

                @if(auth()->user()->role == 'dpm')
                    <th class="px-5 py-4 text-center">Proses</th>
                @endif

            </tr>

        </thead>

        <tbody class="divide-y divide-gray-200">

            @forelse($proposals as $i => $proposal)

                <tr class="hover:bg-gray-50 transition">

                    <td class="px-5 py-3">
                        {{ $i + 1 }}
                    </td>

                    <td class="px-5 py-3 font-medium">
                        {{ $proposal->nama_instansi }}
                    </td>

                    <td class="px-5 py-3">
                        {{ $proposal->nama_kegiatan }}
                    </td>

                    <td class="px-5 py-3">
                        {{ $proposal->judul }}
                    </td>

                    <td class="px-5 py-3 text-center">

                        @if($proposal->status == 'sedang_diperiksa')
                            <span class="bg-yellow-500 text-white px-3 py-1 rounded text-xs">
                                Diperiksa
                            </span>

                        @elseif($proposal->status == 'revisi')
                            <span class="bg-red-500 text-white px-3 py-1 rounded text-xs">
                                Revisi
                            </span>

                        @elseif($proposal->status == 'diterima')
                            <span class="bg-green-500 text-white px-3 py-1 rounded text-xs">
                                Diterima
                            </span>

                        @elseif($proposal->status == 'diteruskan_bpkm')
                            <span class="bg-blue-500 text-white px-3 py-1 rounded text-xs">
                                Ke BPKM
                            </span>
                        @endif

                    </td>

                    <td class="px-5 py-3">
                        {{ $proposal->catatan ?? '-' }}
                    </td>

                    <td class="px-5 py-3 text-center">

                        <a href="{{ asset('storage/'.$proposal->file_proposal) }}"
                           target="_blank"
                           class="bg-green-500 hover:bg-green-600 text-white px-3 py-1 rounded text-xs">

                            Lihat PDF

                        </a>

                    </td>

                    @if(auth()->user()->role == 'dpm')
                    <td class="px-5 py-3 text-center">

                        <div class="flex justify-center gap-2">

                            {{-- DITERIMA --}}
                            <form action="{{ route('proposal.update',$proposal->id) }}"
                                  method="POST">

                                @csrf
                                @method('PUT')

                                <input type="hidden"
                                       name="status"
                                       value="diterima">

                                <button
                                    class="bg-green-500 hover:bg-green-600 text-white px-3 py-1 rounded text-xs">

                                    Terima

                                </button>

                            </form>

                            {{-- REVISI --}}
                            <button
                                onclick="openModal({{ $proposal->id }})"
                                class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-xs">

                                Revisi

                            </button>

                        </div>

                    </td>
                    @endif

                </tr>

            @empty

                <tr>

                    <td colspan="8"
                        class="text-center py-8 text-gray-500">

                        Belum ada proposal

                    </td>

                </tr>

            @endforelse

        </tbody>

    </table>

</div>
@endsection