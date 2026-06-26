@extends('layouts.admin')

@section('title', 'Surat Masuk')

@section('content')

<div class="max-w-7xl mx-auto py-10 px-4">

    {{-- Header --}}
    <div class="flex flex-col md:flex-row justify-between md:items-center gap-4 mb-6">

        <h1 class="text-2xl font-bold text-gray-800">
            Data Surat Masuk
        </h1>

        <a href="{{ route('surat-masuk.create') }}"
           class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg shadow transition">
            + Tambah Surat
        </a>

    </div>

    {{-- Search --}}
    <form action="{{ route('surat-masuk.index') }}"
          method="GET"
          class="flex gap-2 mb-6">

        <input
            type="text"
            name="q"
            value="{{ request('q') }}"
            placeholder="Cari nomor surat, pengirim atau perihal..."
            class="flex-1 border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">

        <button
            type="submit"
            class="bg-gray-700 hover:bg-gray-800 text-white px-5 rounded-lg transition">
            Cari
        </button>

    </form>

    {{-- Flash Message --}}
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
                        Pengirim
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

                        {{ $s->pengirim }}

                    </td>

                    <td class="px-4 py-4">

                        {{ $s->perihal }}

                    </td>

                    {{-- File --}}
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
                                       bg-red-100 text-red-500
                                       text-xl">

                                ❌

                            </span>

                        @endif

                    </td>

                    {{-- Aksi --}}
                    <td class="px-4 py-4">

                        <div class="flex justify-center gap-2">
                                                        {{-- Edit --}}
                            <a href="{{ route('surat-masuk.edit', $s->id) }}"
                               title="Edit"
                               class="inline-flex items-center justify-center
                                      w-10 h-10 rounded-full
                                      bg-yellow-100 hover:bg-yellow-200
                                      transition">

                                <svg xmlns="http://www.w3.org/2000/svg"
                                     class="w-5 h-5 text-yellow-600"
                                     fill="none"
                                     viewBox="0 0 24 24"
                                     stroke="currentColor">

                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5M16.5 3.5a2.121 2.121 0 013 3L12 14l-4 1 1-4 7.5-7.5z"/>

                                </svg>

                            </a>

                            {{-- Hapus --}}
                            <form action="{{ route('surat-masuk.destroy', $s->id) }}"
                                  method="POST"
                                  onsubmit="return confirm('Yakin ingin menghapus data ini?')">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        title="Hapus"
                                        class="inline-flex items-center justify-center
                                               w-10 h-10 rounded-full
                                               bg-red-100 hover:bg-red-200
                                               transition">

                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         class="w-5 h-5 text-red-600"
                                         fill="none"
                                         viewBox="0 0 24 24"
                                         stroke="currentColor">

                                        <path stroke-linecap="round"
                                              stroke-linejoin="round"
                                              stroke-width="2"
                                              d="M19 7L5 7M10 11v6M14 11v6M6 7l1 12a2 2 0 002 2h6a2 2 0 002-2l1-12M9 7V4a1 1 0 011-1h4a1 1 0 011 1v3"/>

                                    </svg>

                                </button>

                            </form>

                        </div>

                    </td>

                </tr>

            @empty

                <tr>

                    <td colspan="7"
                        class="text-center py-10 text-gray-500">

                        Belum ada data surat masuk.

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