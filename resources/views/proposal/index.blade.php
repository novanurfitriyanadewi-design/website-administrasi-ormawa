@extends('layouts.admin')

@section('content')

<div class="container mx-auto px-4 py-6">

    <div class="flex justify-between items-center mb-6">

        <h1 class="text-2xl font-bold">
            Daftar Proposal
        </h1>

        @if(auth()->user()->role != 'dpm')
            <a href="{{ route('proposal.create') }}"
               class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
                + Ajukan Proposal
            </a>
        @endif

    </div>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto">
        <table class="w-full border border-gray-300">

            <thead class="bg-gray-100">
                <tr>
                    <th class="border p-2">No</th>
                    <th class="border p-2">Instansi</th>
                    <th class="border p-2">Nama Kegiatan</th>
                    <th class="border p-2">Judul Proposal</th>
                    <th class="border p-2">Status</th>
                    <th class="border p-2">Catatan DPM</th>
                    <th class="border p-2">File</th>

                    @if(auth()->user()->role == 'dpm')
                        <th class="border p-2">Proses</th>
                    @endif
                </tr>
            </thead>

            <tbody>

            @forelse($proposals as $proposal)

                <tr>

                    {{-- NO --}}
                    <td class="border p-2 text-center">
                        {{ $loop->iteration }}
                    </td>

                    {{-- INSTANSI --}}
                    <td class="border p-2">
                        {{ $proposal->nama_instansi }}
                    </td>

                    {{-- NAMA KEGIATAN --}}
                    <td class="border p-2">
                        {{ $proposal->nama_kegiatan }}
                    </td>

                    {{-- JUDUL --}}
                    <td class="border p-2">
                        {{ $proposal->judul }}
                    </td>

                    {{-- STATUS --}}
                    <td class="border p-2 text-center">

                        @if($proposal->status == 'sedang_diperiksa')
                            <span class="bg-yellow-500 text-white px-3 py-1 rounded">
                                Sedang Diperiksa
                            </span>

                        @elseif($proposal->status == 'revisi')
                            <span class="bg-red-500 text-white px-3 py-1 rounded">
                                Revisi
                            </span>

                        @elseif($proposal->status == 'diterima')
                            <span class="bg-green-500 text-white px-3 py-1 rounded">
                                Diterima
                            </span>

                        @else
                            <span class="bg-gray-500 text-white px-3 py-1 rounded">
                                Menunggu
                            </span>
                        @endif

                    </td>

                    {{-- CATATAN --}}
                    <td class="border p-2">
                        {{ $proposal->catatan ?? '-' }}
                    </td>

                    {{-- FILE --}}
                    <td class="border p-2 text-center">

                        @if($proposal->file_proposal)
                            <a href="{{ asset('storage/' . $proposal->file_proposal) }}"
                               target="_blank"
                               class="text-blue-600 hover:underline">
                                Lihat PDF
                            </a>
                        @else
                            -
                        @endif

                    </td>

                    {{-- KHUSUS DPM --}}
                    @if(auth()->user()->role == 'dpm')

                    <td class="border p-2">

                        <div class="flex gap-2 justify-center">

                            {{-- PERIKSA --}}
                            <form action="{{ route('proposal.update', $proposal->id) }}"
                                  method="POST">

                                @csrf
                                @method('PUT')

                                <input type="hidden"
                                       name="status"
                                       value="sedang_diperiksa">

                                <button type="submit"
                                        class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">
                                    Periksa
                                </button>

                            </form>

                            {{-- TERIMA --}}
                            <form action="{{ route('proposal.update', $proposal->id) }}"
                                  method="POST">

                                @csrf
                                @method('PUT')

                                <input type="hidden"
                                       name="status"
                                       value="diterima">

                                <button type="submit"
                                        class="bg-green-500 text-white px-3 py-1 rounded hover:bg-green-600">
                                    Terima
                                </button>

                            </form>

                            {{-- REVISI --}}
                            <button
                                onclick="openModal({{ $proposal->id }})"
                                class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">
                                Revisi
                            </button>

                        </div>

                    </td>

                    @endif

                </tr>

            @empty

                <tr>
                    <td colspan="{{ auth()->user()->role == 'dpm' ? 8 : 7 }}"
                        class="border p-4 text-center">
                        Belum ada proposal.
                    </td>
                </tr>

            @endforelse

            </tbody>

        </table>
    </div>

</div>

{{-- MODAL REVISI --}}
<div id="modalRevisi"
     class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">

    <div class="bg-white w-[500px] rounded-lg p-6">

        <h2 class="text-xl font-bold mb-4">
            Catatan Revisi Proposal
        </h2>

        <form id="formRevisi" method="POST">

            @csrf
            @method('PUT')

            <textarea
                name="catatan"
                rows="5"
                required
                class="w-full border rounded p-2"
                placeholder="Masukkan catatan revisi"></textarea>

            <div class="flex justify-end gap-2 mt-4">

                <button
                    type="button"
                    onclick="closeModal()"
                    class="bg-gray-500 text-white px-4 py-2 rounded">
                    Batal
                </button>

                <button
                    type="submit"
                    class="bg-red-500 text-white px-4 py-2 rounded">
                    Kirim Revisi
                </button>

            </div>

        </form>

    </div>

</div>

<script>

function openModal(id)
{
    document.getElementById('modalRevisi')
        .classList.remove('hidden');

    document.getElementById('formRevisi')
        .action = '/proposal/' + id + '/revisi';
}

function closeModal()
{
    document.getElementById('modalRevisi')
        .classList.add('hidden');
}

</script>

@endsection