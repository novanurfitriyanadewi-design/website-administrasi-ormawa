@extends('layouts.admin')

@section('title', 'Surat Keluar')

@section('content')

<div class="max-w-7xl mx-auto py-10 px-4">

    {{-- Header --}}
    <div class="flex flex-col md:flex-row justify-between md:items-center gap-4 mb-6">

        <h1 class="text-2xl font-bold text-gray-800">
            Data Surat Keluar
        </h1>

        <a href="{{ route('surat-keluar.create') }}"
            class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg shadow transition">
            + Tambah Surat
        </a>

    </div>

    {{-- Search --}}
    <form action="{{ route('surat-keluar.index') }}"
          method="GET"
          class="flex gap-2 mb-6">

        <input
            type="text"
            name="q"
            value="{{ request('q') }}"
            placeholder="Cari nomor surat, perihal atau kepada..."
            class="flex-1 border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">

        <button
            type="submit"
            class="bg-gray-700 hover:bg-gray-800 text-white px-5 rounded-lg transition">
            Cari
        </button>

    </form>

    {{-- Flash --}}
    @if(session('success'))

        <div class="bg-green-100 border border-green-300 text-green-700 px-4 py-3 rounded-lg mb-5">

            {{ session('success') }}

        </div>

    @endif

    <div class="bg-white rounded-xl shadow border overflow-x-auto">

        <table class="min-w-full">

            <thead class="bg-gray-100">

                <tr>

                    <th class="px-4 py-3 text-left font-semibold">
                        No
                    </th>

                    <th class="px-4 py-3 text-left font-semibold">
                        Nomor Surat
                    </th>

                    <th class="px-4 py-3 text-left font-semibold">
                        Tanggal
                    </th>

                    <th class="px-4 py-3 text-left font-semibold">
                        Kepada
                    </th>

                    <th class="px-4 py-3 text-left font-semibold">
                        Perihal
                    </th>

                    <th class="px-4 py-3 text-center font-semibold">
                        File
                    </th>

                    <th class="px-4 py-3 text-center font-semibold">
                        Aksi
                    </th>

                </tr>

            </thead>

            <tbody class="divide-y divide-gray-200">

            @forelse($data as $i => $s)

                <tr class="hover:bg-gray-50 transition">

                    <td class="px-4 py-4">

                        {{ $data->firstItem() + $i }}

                    </td>

                    <td class="px-4 py-4 font-semibold whitespace-nowrap">

                        {{ $s->nomor_surat }}

                    </td>

                    <td class="px-4 py-4 whitespace-nowrap">

                        {{ \Carbon\Carbon::parse($s->tanggal_surat)->format('d-m-Y') }}

                    </td>

                    <td class="px-4 py-4">

                        {{ $s->kepada }}

                    </td>

                    <td class="px-4 py-4">

                        {{ $s->perihal }}

                    </td>

                    {{-- FILE --}}
                    <td class="px-4 py-4 text-center">

                        @if($s->file)

                            <a href="{{ asset('storage/'.$s->file) }}"
                               target="_blank"
                               title="Lihat File"
                               class="inline-flex items-center justify-center
                                      w-10 h-10 rounded-full
                                      bg-blue-100 hover:bg-blue-200
                                      text-xl transition">

                                📄

                            </a>

                        @else

                            <span
                                class="inline-flex items-center justify-center
                                       w-10 h-10 rounded-full
                                       bg-red-100 text-red-500 text-xl">

                                ❌

                            </span>

                        @endif

                    </td>

                    {{-- AKSI --}}
                    <td class="px-4 py-4">

                        <div class="flex justify-center gap-2">
                                                        {{-- Edit --}}
                            <a href="{{ route('surat-keluar.edit', $s->id) }}"
                               title="Edit"
                               class="inline-flex items-center justify-center
                                      w-10 h-10 rounded-full
                                      bg-yellow-100 hover:bg-yellow-200
                                      text-lg transition">

                                ✏️

                            </a>

                            {{-- Hapus --}}
                            <form action="{{ route('surat-keluar.destroy', $s->id) }}"
                                  method="POST"
                                  onsubmit="return confirm('Yakin ingin menghapus data ini?')">

                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    title="Hapus"
                                    class="inline-flex items-center justify-center
                                           w-10 h-10 rounded-full
                                           bg-red-100 hover:bg-red-200
                                           text-lg transition">

                                    🗑️

                                </button>

                            </form>

                        </div>

                    </td>

                </tr>

            @empty

                <tr>

                    <td colspan="7"
                        class="text-center py-10 text-gray-500">

                        Belum ada data surat keluar.

                    </td>

                </tr>

            @endforelse

            </tbody>

        </table>

    </div>

    {{-- Pagination --}}
    <div class="mt-6">

        {{ $data->links() }}

    </div>

</div>

@endsection