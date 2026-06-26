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

    {{-- FLASH MESSAGE --}}
    @if(session('success'))
        <div class="bg-green-100 border border-green-300 text-green-700 p-3 rounded-lg mb-4">
            {{ session('success') }}
        </div>
    @endif

    {{-- TABLE --}}
    <div class="overflow-x-auto bg-white rounded-xl shadow border border-gray-200">

        <table class="min-w-full">

            <thead class="bg-gray-100 border-b">

                <tr>

                    <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">
                        No
                    </th>

                    <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700 min-w-[320px]">
                        Nomor Surat
                    </th>

                    <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">
                        Tanggal
                    </th>

                    <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">
                        Kepada
                    </th>

                    <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700 min-w-[250px]">
                        Perihal
                    </th>

                    <th class="px-4 py-3 text-center text-sm font-semibold text-gray-700">
                        File
                    </th>

                    <th class="px-4 py-3 text-center text-sm font-semibold text-gray-700">
                        Aksi
                    </th>

                </tr>

            </thead>

            <tbody class="divide-y divide-gray-200">

                @forelse($data as $i => $s)

                    <tr class="hover:bg-gray-50 transition">

                        <td class="px-4 py-4 text-sm text-gray-700">
                            {{ $data->firstItem() + $i }}
                        </td>

                        <td class="px-4 py-4 text-sm font-medium text-gray-800 whitespace-nowrap">
                            {{ $s->nomor_surat }}
                        </td>

                        <td class="px-4 py-4 text-sm text-gray-700 whitespace-nowrap">
                            {{ \Carbon\Carbon::parse($s->tanggal_surat)->format('d-m-Y') }}
                        </td>

                        <td class="px-4 py-4 text-sm text-gray-700 whitespace-nowrap">
                            {{ $s->kepada }}
                        </td>

                        <td class="px-4 py-4 text-sm text-gray-700">
                            {{ $s->perihal }}
                        </td>

                        <td class="px-4 py-4 text-center">

                            @if($s->file)

                                <a href="{{ asset('storage/' . $s->file) }}"
                                   target="_blank"
                                   class="bg-green-500 hover:bg-green-600 text-white px-3 py-2 rounded-lg text-xs transition">
                                    Lihat File
                                </a>

                            @else

                                <span class="text-gray-400 text-xs">
                                    Tidak ada file
                                </span>

                            @endif

                        </td>

                        <td class="px-4 py-4">

                            <div class="flex justify-center gap-2">

                                <a href="{{ route('surat-keluar.edit', $s->id) }}"
                                   class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-2 rounded-lg text-xs transition">
                                    Edit
                                </a>

                                <form action="{{ route('surat-keluar.destroy', $s->id) }}"
                                      method="POST"
                                      onsubmit="return confirm('Hapus data ini?')">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="bg-red-500 hover:bg-red-600 text-white px-3 py-2 rounded-lg text-xs transition">
                                        Hapus
                                    </button>

                                </form>

                            </div>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="7"
                            class="text-center py-8 text-gray-500">
                            Data surat keluar belum tersedia
                        </td>

                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

    <div class="mt-5">
        {{ $data->links() }}
    </div>

</div>

@endsection
