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

    <div class="space-y-6">

@forelse($kandidats as $kandidat)

<div class="bg-white rounded-xl shadow border p-6">

    <div class="grid md:grid-cols-4 gap-6">

        <div class="flex justify-center">

            @if($kandidat->foto)

                <img src="{{ asset('storage/'.$kandidat->foto) }}"
                    class="w-40 h-48 rounded-lg object-cover border">

            @else

                <div class="w-40 h-48 rounded-lg bg-gray-100 flex items-center justify-center text-gray-400">
                    Tidak Ada Foto
                </div>

            @endif

        </div>

        <div class="md:col-span-3">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                <div>
                    <label class="font-semibold text-gray-600">Nama</label>
                    <div class="border rounded p-2">{{ $kandidat->nama }}</div>
                </div>

                <div>
                    <label class="font-semibold text-gray-600">NIM</label>
                    <div class="border rounded p-2">{{ $kandidat->nim }}</div>
                </div>

                <div>
                    <label class="font-semibold text-gray-600">Program Studi</label>
                    <div class="border rounded p-2">{{ $kandidat->prodi }}</div>
                </div>

                <div>
                    <label class="font-semibold text-gray-600">Organisasi</label>
                    <div class="border rounded p-2">{{ $kandidat->organisasi }}</div>
                </div>

                <div>
                    <label class="font-semibold text-gray-600">IPK</label>
                    <div class="border rounded p-2">{{ $kandidat->ipk }}</div>
                </div>

                <div>
                    <label class="font-semibold text-gray-600">Status</label>

                    <div class="mt-2">

                        @if($kandidat->status=='disetujui')

                            <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">
                                Disetujui
                            </span>

                        @elseif($kandidat->status=='ditolak')

                            <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm">
                                Ditolak
                            </span>

                        @else

                            <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-sm">
                                Menunggu
                            </span>

                        @endif

                    </div>

                </div>

            </div>

            <div class="mt-5">

                <label class="font-semibold text-gray-600">
                    Visi
                </label>

                <div class="border rounded p-3 mt-1">
                    {{ $kandidat->visi }}
                </div>

            </div>

            <div class="mt-4">

                <label class="font-semibold text-gray-600">
                    Misi
                </label>

                <div class="border rounded p-3 mt-1">
                    {{ $kandidat->misi }}
                </div>

            </div>

            <div class="flex gap-3 mt-6">

                <a href="{{ route('kandidat.show',$kandidat->id) }}"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg">
                    Detail
                </a>

                <a href="{{ route('kandidat.edit',$kandidat->id) }}"
                    class="bg-yellow-500 hover:bg-yellow-600 text-white px-5 py-2 rounded-lg">
                    Edit
                </a>

                <form action="{{ route('kandidat.destroy',$kandidat->id) }}"
                    method="POST">

                    @csrf
                    @method('DELETE')

                    <button
                        onclick="return confirm('Hapus kandidat?')"
                        class="bg-red-600 hover:bg-red-700 text-white px-5 py-2 rounded-lg">

                        Hapus

                    </button>

                </form>

            </div>

        </div>

    </div>

</div>

@empty

<div class="bg-white rounded-xl shadow p-8 text-center text-gray-500">

    Belum ada data kandidat.

</div>

@endforelse

</div>

@endsection