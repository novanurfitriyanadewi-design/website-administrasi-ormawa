@extends('layouts.app')

@section('title', 'HIMASI')

@section('content')

@php

$programKerja = [
    [
        'no' => '01',
        'judul' => 'Mystery',
        'desc' => 'Kegiatan internal HIMASI untuk membangun solidaritas, teamwork, dan kreativitas mahasiswa Sistem Informasi.',
        'icon' => '🧩'
    ],
    [
        'no' => '02',
        'judul' => 'Seminar IT',
        'desc' => 'Seminar teknologi bersama praktisi dan profesional di bidang digital serta pengembangan software.',
        'icon' => '💻'
    ],
    [
        'no' => '03',
        'judul' => 'HITC',
        'desc' => 'Ajang kompetisi teknologi dan kreativitas mahasiswa dalam bidang IT dan digital innovation.',
        'icon' => '🏆'
    ],
    [
        'no' => '04',
        'judul' => 'Webinar',
        'desc' => 'Webinar edukatif mengenai perkembangan teknologi, UI/UX, AI, dan dunia digital.',
        'icon' => '🎥'
    ]
];

$timeline = [
    [
        'bulan' => 'Agustus',
        'agenda' => 'Mystery',
        'ket' => 'Pengenalan dan bonding anggota baru HIMASI.'
    ],
    [
        'bulan' => 'September',
        'agenda' => 'Seminar IT',
        'ket' => 'Seminar perkembangan teknologi digital.'
    ],
    [
        'bulan' => 'November',
        'agenda' => 'HITC',
        'ket' => 'Kompetisi teknologi tingkat mahasiswa.'
    ],
    [
        'bulan' => 'Desember',
        'agenda' => 'Webinar',
        'ket' => 'Webinar nasional bersama praktisi IT.'
    ]
];

@endphp


{{-- HERO --}}
<section class="relative min-h-screen overflow-hidden bg-white -mt-20">

    {{-- Background Shape --}}
    <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-sky-100 rounded-full blur-3xl opacity-70"></div>

    <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-cyan-100 rounded-full blur-3xl opacity-60"></div>

    {{-- Content --}}
    <div class="relative z-10 max-w-7xl mx-auto px-6 py-32">

        <div class="grid lg:grid-cols-2 gap-16 items-center">

            {{-- Left --}}
            <div>

                <span class="inline-flex items-center px-4 py-2 rounded-full bg-sky-100 text-sky-700 text-sm font-semibold">
                    Himpunan Mahasiswa Sistem Informasi
                </span>

                <h1 class="mt-8 text-6xl md:text-7xl font-black text-gray-900 leading-tight">

                    HIMASI

                    <span class="block text-sky-500">
                        SAINTEK
                    </span>

                </h1>

                <p class="mt-8 text-gray-600 text-lg leading-relaxed max-w-2xl">
                    HIMASI merupakan organisasi mahasiswa Sistem Informasi
                    yang menjadi wadah pengembangan kreativitas, teknologi,
                    inovasi, serta kolaborasi mahasiswa di era digital.
                </p>

                {{-- Button --}}
                <div class="mt-10 flex flex-wrap gap-4">

                    <a href="#program"
                        class="
                            px-8
                            py-4
                            rounded-2xl
                            bg-sky-500
                            text-white
                            font-semibold
                            hover:bg-sky-600
                            transition
                        ">

                        Explore HIMASI

                    </a>

                    <a href="#timeline"
                        class="
                            px-8
                            py-4
                            rounded-2xl
                            border
                            border-gray-300
                            text-gray-700
                            font-semibold
                            hover:border-sky-400
                            hover:text-sky-500
                            transition
                        ">

                        Timeline Kegiatan

                    </a>

                </div>

            </div>

            {{-- Right --}}
            <div class="relative">

                <div class="relative overflow-hidden rounded-[40px] shadow-2xl">

                    {{-- FOTO NAVBAR / HERO --}}
                    <img
                        src="{{ asset('images/himasi_struktur.jpeg') }}"
                        alt="HIMASI"
                        class="w-full h-[650px] object-cover"
                    >

                    {{-- Overlay --}}
                    <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>

                    {{-- Text --}}
                    <div class="absolute bottom-0 left-0 p-10">

                        <h3 class="text-white text-3xl font-black">
                            HIMASI Creative Space
                        </h3>

                        <p class="text-white/80 mt-3">
                            Digital • Technology • Innovation
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- PROGRAM KERJA --}}
<section id="program" class="py-28 bg-gray-50">

    <div class="max-w-7xl mx-auto px-6">

        {{-- Heading --}}
        <div class="text-center mb-20">

            <span class="text-sky-500 uppercase tracking-[5px] text-sm font-semibold">
                Program Kerja
            </span>

            <h2 class="text-5xl font-black text-gray-900 mt-5">
                Agenda HIMASI
            </h2>

            <p class="text-gray-500 mt-6 max-w-2xl mx-auto">
                Berbagai program unggulan HIMASI dalam pengembangan
                kreativitas, teknologi, dan inovasi mahasiswa.
            </p>

        </div>

        {{-- Grid --}}
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">

            @foreach($programKerja as $item)

                <div
                    class="
                        bg-white
                        rounded-[32px]
                        p-8
                        border border-gray-100
                        shadow-sm
                        hover:shadow-2xl
                        hover:-translate-y-2
                        transition-all
                        duration-300
                    ">

                    <div class="flex items-center justify-between">

                        <div
                            class="
                                w-16
                                h-16
                                rounded-2xl
                                bg-sky-100
                                flex
                                items-center
                                justify-center
                                text-3xl
                            ">

                            {{ $item['icon'] }}

                        </div>

                        <span class="text-sky-500 font-black text-xl">
                            {{ $item['no'] }}
                        </span>

                    </div>

                    <h3 class="text-2xl font-bold text-gray-900 mt-8">
                        {{ $item['judul'] }}
                    </h3>

                    <p class="text-gray-500 mt-4 leading-relaxed">
                        {{ $item['desc'] }}
                    </p>

                </div>

            @endforeach

        </div>

    </div>

</section>


{{-- TIMELINE --}}
<section id="timeline" class="py-28 bg-white">

    <div class="max-w-5xl mx-auto px-6">

        {{-- Heading --}}
        <div class="text-center mb-20">

            <span class="text-sky-500 uppercase tracking-[5px] text-sm font-semibold">
                Timeline Kegiatan
            </span>

            <h2 class="text-5xl font-black text-gray-900 mt-5">
                Jadwal HIMASI
            </h2>

        </div>

        {{-- Timeline --}}
        <div class="space-y-10">

            @foreach($timeline as $item)

                <div class="flex gap-6 items-start">

                    {{-- Circle --}}
                    <div
                        class="
                            min-w-[70px]
                            h-[70px]
                            rounded-2xl
                            bg-sky-500
                            text-white
                            flex
                            items-center
                            justify-center
                            font-bold
                            shadow-lg
                        ">

                        {{ substr($item['bulan'],0,3) }}

                    </div>

                    {{-- Content --}}
                    <div
                        class="
                            flex-1
                            bg-gray-50
                            rounded-3xl
                            p-8
                            border border-gray-100
                        ">

                        <span class="text-sky-500 text-sm font-semibold uppercase tracking-[3px]">
                            {{ $item['bulan'] }}
                        </span>

                        <h3 class="text-2xl font-bold text-gray-900 mt-3">
                            {{ $item['agenda'] }}
                        </h3>

                        <p class="text-gray-500 mt-4 leading-relaxed">
                            {{ $item['ket'] }}
                        </p>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

</section>

{{-- GALERI --}}
<section class="py-28 bg-gray-50">

    <div class="max-w-7xl mx-auto px-6">

        {{-- Heading --}}
        <div class="text-center mb-20">

            <span class="text-sky-500 uppercase tracking-[5px] text-sm font-semibold">
                Galeri Kegiatan
            </span>

            <h2 class="text-5xl font-black text-gray-900 mt-5">
                Dokumentasi HIMASI
            </h2>

        </div>

        @php

            $galeri = [
                [
                    'img' => 'HITC.jpeg',
                    'title' => 'HITC Competition'
                ],
                [
                    'img' => 'SEMINAR.jpeg',
                    'title' => 'Seminar IT'
                ],
                [
                    'img' => 'kode.jpeg',
                    'title' => 'Webinar Nasional'
                ],
                [
                    'img' => 'seminar.jpeg',
                    'title' => 'Mystery Event'
                ],
                [
                    'img' => 'kode.jpeg',
                    'title' => 'HIMASI Gathering'
                ],
                [
                    'img' => 'HITC.jpeg',
                    'title' => 'Workshop Digital'
                ],
            ];

        @endphp

        {{-- Gallery --}}
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

            @foreach($galeri as $item)

                <div
                    class="
                        group
                        overflow-hidden
                        rounded-[32px]
                        relative
                        bg-white
                        shadow-lg
                    ">

                    {{-- Image --}}
                    <img
                        src="{{ asset('images/' . $item['img']) }}"
                        alt="{{ $item['title'] }}"
                        class="
                            w-full
                            h-[320px]
                            object-cover
                            group-hover:scale-110
                            transition
                            duration-500
                        "
                    >

                    {{-- Overlay --}}
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent"></div>

                    {{-- Text --}}
                    <div class="absolute bottom-0 left-0 p-6">

                        <h3 class="text-white text-2xl font-bold">
                            {{ $item['title'] }}
                        </h3>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

</section>
{{-- CTA --}}
<section class="py-28 bg-white">

    <div class="max-w-5xl mx-auto px-6">

        <div
            class="
                relative
                overflow-hidden
                rounded-[40px]
                bg-gradient-to-r
                from-sky-500
                to-cyan-500
                p-14
                text-center
            ">

            {{-- Blur --}}
            <div class="absolute top-0 right-0 w-72 h-72 bg-white/20 rounded-full blur-3xl"></div>

            <div class="relative z-10">

                <h2 class="text-5xl font-black text-white">
                    Join HIMASI Now
                </h2>

                <p class="text-white/80 mt-6 max-w-2xl mx-auto leading-relaxed">
                    Bersama HIMASI, kembangkan kreativitas,
                    inovasi, dan skill digitalmu untuk masa depan teknologi.
                </p>

                <a href="#"
                    class="
                        inline-flex
                        mt-10
                        px-8
                        py-4
                        rounded-2xl
                        bg-white
                        text-sky-600
                        font-bold
                        hover:scale-105
                        transition
                    ">

                    Bergabung Sekarang

                </a>

            </div>

        </div>

    </div>

</section>

@endsection