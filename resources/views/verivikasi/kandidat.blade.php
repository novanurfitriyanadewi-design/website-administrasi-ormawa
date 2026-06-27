@extends('layouts.admin')

@section('content')

<h1 class="text-3xl font-bold mb-5">
    Verifikasi Kandidat
</h1>

<div class="bg-white rounded-xl shadow overflow-x-auto">
    <table class="min-w-full border-collapse">
        <thead class="bg-gray-100">
            <tr>
                <th class="px-4 py-3 text-left">Nama</th>
                <th class="px-4 py-3 text-left">Organisasi</th>
                <th class="px-4 py-3 text-left">Status</th>
                <th class="px-4 py-3 text-center">Aksi</th>
            </tr>
        </thead>

        <tbody>
            @forelse($kandidats as $kandidat)
                <tr class="border-b hover:bg-gray-50">
                    <td class="p-3 font-semibold">{{ $kandidat->nama }}</td>
                    <td class="p-3">{{ $kandidat->organisasi }}</td>
                    <td class="p-3">
                        @if($kandidat->status == 'disetujui')
                            <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs">
                                Disetujui
                            </span>
                        @elseif($kandidat->status == 'ditolak')
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
                        <div class="flex gap-2 justify-center">
                            <form action="/approve/{{ $kandidat->id }}" method="POST">
                                @csrf
                                <button class="bg-green-600 hover:bg-green-700 text-white px-3 py-1 rounded text-xs">
                                    Setujui
                                </button>
                            </form>

                            <form action="/reject/{{ $kandidat->id }}" method="POST">
                                @csrf
                                <button class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded text-xs">
                                    Tolak
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center p-5 text-gray-500">
                        Belum ada kandidat untuk diverifikasi
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection
