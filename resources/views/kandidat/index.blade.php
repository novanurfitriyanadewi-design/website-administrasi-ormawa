@extends('layouts.admin')

@section('content')

<div class="max-w-7xl mx-auto py-8 px-4">

    <div class="flex flex-col md:flex-row justify-between md:items-center gap-4 mb-6">

        <h1 class="text-3xl font-bold text-gray-800">
            Data Calon Ketua
        </h1>

        <a href="{{ route('kandidat.create') }}"
            class="bg-green-600 hover:bg-green-700 text-white px-5 py-2 rounded-lg shadow">
            + Tambah Kandidat
        </a>

    </div>

    @if(session('success'))
        <div class="bg-green-100 border border-green-300 text-green-700 p-3 rounded-lg mb-5">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white rounded-xl shadow border">

    <table class="w-full table-fixed border-collapse">

        <thead class="bg-gray-100">

            <tr>

                <th class="w-12 p-3">No</th>
                <th class="w-24 p-3">Foto</th>
                <th class="w-40 p-3">Nama</th>
                <th class="w-32 p-3">NIM</th>
                <th class="w-40 p-3">Prodi</th>
                <th class="w-32 p-3">Organisasi</th>
                <th class="w-20 p-3">IPK</th>
                <th class="w-52 p-3">Visi</th>
                <th class="w-52 p-3">Misi</th>
                <th class="w-28 p-3">Status</th>
                <th class="w-52 p-3">Aksi</th>

            </tr>

        </thead>

        <tbody>

        @forelse($kandidats as $kandidat)

        <tr class="border-b hover:bg-gray-50 align-top">

            <td class="p-3 text-center">
                {{ $loop->iteration }}
            </td>

            <td class="p-3 text-center">

                @if($kandidat->foto)

                    <img src="{{ asset('storage/'.$kandidat->foto) }}"
                        class="w-16 h-16 rounded-lg object-cover mx-auto">

                @else

                    <div class="w-16 h-16 bg-gray-100 rounded-lg flex items-center justify-center text-xs mx-auto">
                        Tidak Ada
                    </div>

                @endif

            </td>

            <td class="p-3 break-words">
                {{ $kandidat->nama }}
            </td>

            <td class="p-3 break-words">
                {{ $kandidat->nim }}
            </td>

            <td class="p-3 break-words">
                {{ $kandidat->prodi }}
            </td>

            <td class="p-3 break-words">
                {{ $kandidat->organisasi }}
            </td>

            <td class="p-3 text-center">
                {{ $kandidat->ipk }}
            </td>

            <td class="p-3 break-words whitespace-normal">
                {{ $kandidat->visi }}
            </td>

            <td class="p-3 break-words whitespace-normal">
                {{ $kandidat->misi }}
            </td>

            <td class="p-3 text-center">

                @if($kandidat->status=='disetujui')

                    <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs">
                        Disetujui
                    </span>

                @elseif($kandidat->status=='ditolak')

                    <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-xs">
                        Ditolak
                    </span>

                @else

                    <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-xs">
                        Menunggu
                    </span>

                @endif

            </td>

            <td class="p-3">

                <div class="flex flex-col gap-2">

                    <a href="{{ route('kandidat.show',$kandidat->id) }}"
                        class="bg-blue-600 text-white rounded py-2 text-center text-xs">
                        Detail
                    </a>

                    <a href="{{ route('kandidat.edit',$kandidat->id) }}"
                        class="bg-yellow-500 text-white rounded py-2 text-center text-xs">
                        Edit
                    </a>

                    <form action="{{ route('kandidat.destroy',$kandidat->id) }}"
                        method="POST">

                        @csrf
                        @method('DELETE')

                        <button
                            class="w-full bg-red-600 text-white rounded py-2 text-xs"
                            onclick="return confirm('Hapus kandidat?')">

                            Hapus

                        </button>

                    </form>

                </div>

            </td>

        </tr>

        @empty

        <tr>

            <td colspan="11" class="text-center p-5">

                Belum ada data kandidat

            </td>

        </tr>

        @endforelse

        </tbody>

    </table>

</div>

@endsection