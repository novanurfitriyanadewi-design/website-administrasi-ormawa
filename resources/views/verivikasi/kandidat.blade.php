@extends('layouts.admin')

@section('content')

<h1 class="text-3xl font-bold mb-5">
    Verifikasi Kandidat
</h1>

<table class="w-full bg-white shadow">

<thead>

<tr>
    <th>Nama</th>
    <th>Organisasi</th>
    <th>Status</th>
    <th>Aksi</th>
</tr>

</thead>

<tbody>

@foreach($kandidats as $kandidat)

<tr>

    <td>{{ $kandidat->nama }}</td>

    <td>{{ $kandidat->organisasi }}</td>

    <td>{{ $kandidat->status }}</td>

    <td class="flex gap-2">

        <form action="/approve/{{ $kandidat->id }}" method="POST">
            @csrf
            <button class="bg-green-600 text-white px-3 py-1 rounded">
                Setujui
            </button>
        </form>

        <form action="/reject/{{ $kandidat->id }}" method="POST">
            @csrf
            <button class="bg-red-600 text-white px-3 py-1 rounded">
                Tolak
            </button>
        </form>

    </td>

</tr>

@endforeach

</tbody>

</table>

@endsection