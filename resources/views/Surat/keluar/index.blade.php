```blade
@extends('layouts.admin')

@section('title', 'Surat Keluar')

@section('content')

<div class="max-w-7xl mx-auto py-10 px-4">

    {{-- HEADER --}}
    <div class="flex flex-col md:flex-row justify-between md:items-center gap-4 mb-6">

        <h1 class="text-2xl font-bold text-gray-800">
            Data Surat Keluar
        </h1>

        <a href="{{ route('surat-keluar.create') }}"
            class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg shadow">
            + Tambah Surat
        </a>

    </div>

    {{-- SEARCH --}}
    <form action="{{ route('surat-keluar.index') }}"
        method="GET"
        class="flex gap-2 mb-6">

        <input
            type="text"
            name="q"
            value="{{ request('q') }}"
            placeholder="Cari nomor surat, perihal atau kepada..."
            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">

        <button
            class="bg-gray-700 hover:bg-gray-800 text-white px-5 rounded-lg">
            Cari
        </button>

    </form>

    {{-- SUCCESS --}}
    @if(session('success'))
        <div class="bg-green-100 border border-green-300 text-green-700 px-4 py-3 rounded-lg mb-5">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white rounded-xl shadow border overflow-x-auto">

        <table class="min-w-full">

            <thead class="bg-gray-100">

                <tr>

                    <th class="px-4 py-3 text-left">No</th>
                    <th class="px-4 py-3 text-left">Nomor Surat</th>
                    <th class="px-4 py-3 text-left">Tanggal</th>
                    <th class="px-4 py-3 text-left">Kepada</th>
                    <th class="px-4 py-3 text-left">Perihal</th>
                    <th class="px-4 py-3 text-center">File</th>
                    <th class="px-4 py-3 text-center">Aksi</th>

                </tr>

            </thead>

            <tbody class="divide-y">

            @forelse($data as $i => $s)

                <tr class="hover:bg-gray-50">

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

                            <div class="flex flex-col items-center gap-2">

                                <span class="inline-flex items-center gap-1 bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs font-medium">

                                    📄

                                    {{ Str::limit(basename($s->file),25) }}

                                </span>

                                <div class="flex gap-2">

                                    <a href="{{ asset('storage/'.$s->file) }}"
                                        target="_blank"
                                        class="bg-green-600 hover:bg-green-700 text-white px-3 py-1 rounded text-xs">
                                        Lihat
                                    </a>

                                    <a href="{{ asset('storage/'.$s->file) }}"
                                        download
                                        class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded text-xs">
                                        Download
                                    </a>

                                </div>

                            </div>

                        @else

                            <span class="bg-red-100 text-red-600 px-3 py-1 rounded-full text-xs">
                                Tidak ada file
                            </span>

                        @endif

                    </td>

                    {{-- AKSI --}}
                    <td class="px-4 py-4">

                        <div class="flex justify-center gap-2">

                            <a href="{{ route('surat-keluar.edit',$s->id) }}"
                                class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-2 rounded text-xs">
                                Edit
                            </a>

                            <form
                                action="{{ route('surat-keluar.destroy',$s->id) }}"
                                method="POST"
                                onsubmit="return confirm('Yakin ingin menghapus data ini?')">

                                @csrf
                                @method('DELETE')

                                <button
                                    class="bg-red-600 hover:bg-red-700 text-white px-3 py-2 rounded text-xs">
                                    Hapus
                                </button>

                            </form>

                        </div>

                    </td>

                </tr>

            @empty

                <tr>

                    <td colspan="7" class="py-10 text-center text-gray-500">
                        Belum ada data surat keluar.
                    </td>

                </tr>

            @endforelse

            </tbody>

        </table>

    </div>

    <div class="mt-6">
        {{ $data->links() }}
    </div>

</div>

@endsection
```
