@extends('layouts.app')

@section('title', 'Program Kerja')

@section('content')

{{-- HERO --}}
<div class="w-full">

    <div class="relative h-[80vh] -mt-20">

        <img src="{{ asset('images/TOSS.jpeg') }}"
             class="absolute inset-0 w-full h-full object-cover">

        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/50 to-black/20"></div>

        <div class="relative z-10 flex items-center justify-center h-full text-white text-center px-4">
            <div>
                <h1 class="text-4xl md:text-6xl font-bold tracking-wide">
                    PROGRAM KERJA ORMAWA
                </h1>

                <p class="mt-4 text-lg text-gray-200">
                    Pilih organisasi untuk melihat program kerja
                </p>
            </div>
        </div>

    </div>
</div>

{{-- SECTION CARD --}}
<div class="max-w-7xl mx-auto px-6 py-16">

    <div class="grid md:grid-cols-3 gap-8">

        @foreach([
            [
                'nama' => 'BEM',
                'desc' => 'Badan Eksekutif Mahasiswa sebagai penggerak utama kegiatan kampus'
            ],
            [
                'nama' => 'DPM',
                'desc' => 'Lembaga legislatif mahasiswa yang mengawasi organisasi'
            ],
            [
                'nama' => 'HIMASI',
                'desc' => 'Fokus pada pengembangan akademik dan teknologi mahasiswa IT'
            ],
        ] as $item)

        <a href="{{ route('program.' . strtolower($item['nama'])) }}"
   class="bg-sky-700 text-white p-6 rounded-2xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition duration-300 group">

            <h2 class="text-2xl font-bold mb-2 group-hover:underline">
                {{ $item['nama'] }}
            </h2>

            <p class="text-sm text-white/70 mb-4">
                FAKULTAS SAINTEK
            </p>

            <hr class="border-white/20 mb-4">

            <p class="text-sm mb-6 leading-relaxed text-white/90">
                {{ $item['desc'] }}
            </p>

            <span class="text-yellow-300 font-semibold text-sm group-hover:underline">
                LIHAT SELENGKAPNYA →
            </span>

        </a>

        @endforeach

    </div>

</div>

@endsection