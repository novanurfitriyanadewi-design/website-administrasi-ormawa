@extends('layouts.admin')

@section('content')

<div class="max-w-7xl mx-auto py-8">

    <div class="flex justify-between items-center mb-6">

        <h1 class="text-3xl font-bold">
            Data Calon Ketua
        </h1>

        <a href="{{ route('kandidat.create') }}"
            class="bg-green-600 hover:bg-green-700 text-white px-5 py-2 rounded-lg">
            + Tambah Kandidat
        </a>

    </div>

    @if(session('success'))
        <div class="bg-green-100 border border-green-300 text-green-700 p-3 rounded mb-5">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white rounded-xl shadow overflow-x-auto">

        <table class="min-w-full">

            <thead class="bg-gray-100">

                <tr>

                    <th class="px-4 py-3">No</th>

                    <th class="px-4 py-3">Foto</th>

                    <th class="px-4 py-3">Nama</th>

                    <th class="px-4 py-3">NIM</th>

                    <th class="px-4 py-3">Prodi</th>

                    <th class="px-4 py-3">Organisasi</th>

                    <th class="px-4 py-3">IPK</th>

                    <th class="px-4 py-3">Visi</th>

                    <th class="px-4 py-3">Misi</th>

                    <th class="px-4 py-3">Status</th>

                    <th class="px-4 py-3 text-center">
                        Aksi
                    </th>

                </tr>

            </thead>

            <tbody>

            @forelse($kandidats as $kandidat)

                <tr class="border-b hover:bg-gray-50">

                    <td class="p-3">
                        {{ $loop->iteration }}
                    </td>

                    <td class="p-3">

                        @if($kandidat->foto)

                            <img src="{{ asset('storage/'.$kandidat->foto) }}"
                                 class="w-16 h-16 rounded-lg object-cover">

                        @else

                            <span class="text-gray-400">
                                Tidak ada
                            </span>

                        @endif

                    </td>

                    <td class="p-3 font-semibold">
                        {{ $kandidat->nama }}
                    </td>

                    <td class="p-3">
                        {{ $kandidat->nim }}
                    </td>

                    <td class="p-3">
                        {{ $kandidat->prodi }}
                    </td>

                    <td class="p-3">
                        {{ $kandidat->organisasi }}
                    </td>

                    <td class="p-3">
                        {{ $kandidat->ipk }}
                    </td>

                    <td class="p-3">
                        {{ Str::limit($kandidat->visi,40) }}
                    </td>

                    <td class="p-3">
                        {{ Str::limit($kandidat->misi,40) }}
                    </td>

                    <td class="p-3">

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

                        <div class="flex gap-2">

                            <a href="{{ route('kandidat.show',$kandidat->id) }}"
                                class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-2 rounded text-xs">
                                Detail
                            </a>

                            <a href="{{ route('kandidat.edit',$kandidat->id) }}"
                                class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-2 rounded text-xs">
                                Edit
                            </a>

                            <form action="{{ route('kandidat.destroy',$kandidat->id) }}"
                                method="POST"
                                onsubmit="return confirm('Hapus kandidat?')">

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

                    <td colspan="11"
                        class="text-center p-5">

                        Belum ada kandidat

                    </td>

                </tr>

            @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection