@extends('layouts.admin')

@section('content')

<div class="flex justify-between mb-5">

    <h1 class="text-3xl font-bold">
        Data Calon Ketua
    </h1>

    <a href="{{ route('kandidat.create') }}"
       class="bg-green-600 text-white px-4 py-2 rounded">
        + Tambah Kandidat
    </a>

</div>

<table class="w-full bg-white shadow">

    <thead>
        <tr>
            <th class="p-3">No</th>
            <th>Nama</th>
            <th>Organisasi</th>
            <th>Status</th>
        </tr>
    </thead>

    <tbody>

        @forelse($kandidats as $kandidat)

        <tr>
            <td class="p-3">{{ $loop->iteration }}</td>
            <td>{{ $kandidat->nama }}</td>
            <td>{{ $kandidat->organisasi }}</td>
            <td>{{ $kandidat->status }}</td>
        </tr>

        @empty

        <tr>
            <td colspan="4" class="text-center p-4">
                Belum ada kandidat
            </td>
        </tr>

        @endforelse

    </tbody>

</table>

@endsection