@extends('layouts.app')

@section('title', 'DPM')

@section('content')

@php
    $cardClass = "
        bg-gray-950/70
        backdrop-blur-xl
        border border-gray-800
        rounded-3xl
        p-8
        hover:border-cyan-500
        hover:-translate-y-2
        hover:shadow-[0_0_35px_rgba(6,182,212,.15)]
        transition-all
        duration-300
    ";

    $divisi = [
        [
            'kode' => '01',
            'nama' => 'Ketua',
            'deskripsi' => 'Manajemen seluruh visi dan misi yang dilaksanakan oleh seluruh komisi dalam DPM.'
        ],
        [
            'kode' => '02',
            'nama' => 'Sekretaris',
            'deskripsi' => 'Melengkapi kebutuhan administrasi internal maupun eksternal organisasi DPM.'
        ],
        [
            'kode' => '03',
            'nama' => 'Bendahara',
            'deskripsi' => 'Bertanggung jawab terhadap manajemen keuangan internal DPM secara transparan.'
        ],
        [
            'kode' => 'Komisi A',
            'nama' => 'Administrasi',
            'deskripsi' => 'Melakukan pengecekan administrasi lembaga eksekutif dan memastikan administrasi berjalan sesuai aturan.'
        ],
        [
            'kode' => 'Komisi B',
            'nama' => 'Aspirasi',
            'deskripsi' => 'Menjadi wadah serap aspirasi seluruh mahasiswa untuk disampaikan kepada lembaga terkait.'
        ],
        [
            'kode' => 'Komisi C',
            'nama' => 'Keuangan',
            'deskripsi' => 'Melakukan controlling dan budgeting lembaga eksekutif seperti BEM dan Himpunan.'
        ],
        [
            'kode' => 'Komisi D',
            'nama' => 'Media & Hubungan Eksternal',
            'deskripsi' => 'Bertanggung jawab terhadap manajemen media, publikasi, dokumentasi, serta hubungan eksternal antar DPM luar kampus.'
        ],
    ];
@endphp


{{-- HERO SECTION --}}
<section class="relative min-h-screen flex items-center overflow-hidden bg-black -mt-20">

    {{-- Background Logo --}}
    <img
        src="{{ asset('images/dpm.png') }}"
        alt="Logo DPM"
        class="absolute inset-0 w-full h-full object-contain opacity-20 scale-90 z-0"
    >

    {{-- Glow Effect --}}
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(6,182,212,0.25),transparent_65%)]"></div>

    {{-- Overlay --}}
    <div class="absolute inset-0 bg-gradient-to-b from-black/70 via-black/80 to-black"></div>

    {{-- Content --}}
    <div class="relative z-10 max-w-5xl mx-auto px-6 text-center">

        <span class="uppercase tracking-[7px] text-cyan-400 text-xs">
            Dewan Perwakilan Mahasiswa — SAINTEK
        </span>

        <h1 class="mt-8 text-6xl md:text-8xl font-black text-white leading-tight">
            DPM

            <span class="block text-cyan-400 drop-shadow-[0_0_25px_rgba(6,182,212,.7)]">
                SAINTEK
            </span>
        </h1>

        <p class="mt-8 text-gray-400 max-w-2xl mx-auto leading-relaxed">
            Lembaga legislatif mahasiswa yang menjalankan fungsi pengawasan,
            aspirasi, penganggaran, serta penguatan administrasi demi tata kelola
            organisasi yang profesional dan transparan.
        </p>

        {{-- Statistik --}}
        <div class="mt-16 grid grid-cols-1 sm:grid-cols-3 gap-5 max-w-3xl mx-auto">

            <div class="bg-white/5 backdrop-blur-xl border border-gray-800 rounded-2xl p-6">
                <h3 class="text-cyan-400 text-3xl font-black">4</h3>
                <p class="text-gray-500 text-sm mt-2">Komisi DPM</p>
            </div>

            <div class="bg-white/5 backdrop-blur-xl border border-gray-800 rounded-2xl p-6">
                <h3 class="text-cyan-400 text-3xl font-black">3</h3>
                <p class="text-gray-500 text-sm mt-2">Program Utama</p>
            </div>

            <div class="bg-white/5 backdrop-blur-xl border border-gray-800 rounded-2xl p-6">
                <h3 class="text-cyan-400 text-3xl font-black">24/7</h3>
                <p class="text-gray-500 text-sm mt-2">Aspirasi Mahasiswa</p>
            </div>

        </div>

    </div>

</section>


{{-- STRUKTUR ORGANISASI --}}
<section class="bg-black border-t border-gray-900 py-28">

    <div class="max-w-6xl mx-auto px-6">

        {{-- Heading --}}
        <div class="text-center mb-20">

            <p class="uppercase tracking-[5px] text-cyan-400 text-xs">
                Struktur Organisasi
            </p>

            <h2 class="text-5xl font-black text-white mt-5">
                Divisi & Tugas DPM
            </h2>

        </div>

        {{-- Card Grid --}}
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

            @foreach($divisi as $item)

                <div class="{{ $cardClass }}">

                    <div class="text-cyan-400 text-sm tracking-[4px] uppercase">
                        {{ $item['kode'] }}
                    </div>

                    <h3 class="text-white text-2xl font-bold mt-5">
                        {{ $item['nama'] }}
                    </h3>

                    <p class="text-gray-400 mt-4 leading-relaxed">
                        {{ $item['deskripsi'] }}
                    </p>

                </div>

            @endforeach

        </div>

    </div>

</section>


{{-- PROGRAM KERJA --}}
<section class="bg-black py-28 border-t border-gray-900">

    <div class="max-w-6xl mx-auto px-6">

        {{-- Heading --}}
        <div class="text-center mb-20">

            <p class="text-cyan-400 uppercase tracking-[5px] text-xs">
                Program Kerja
            </p>

            <h2 class="text-white text-5xl font-black mt-5">
                Agenda Utama DPM
            </h2>

        </div>

        {{-- Program Grid --}}
        <div class="grid md:grid-cols-3 gap-6">

            <div class="{{ $cardClass }}">

                <div class="text-cyan-400 text-3xl font-black mb-5">
                    01
                </div>

                <h3 class="text-white font-bold text-xl mb-4">
                    Konferensi Musyawarah Mahasiswa
                </h3>

                <p class="text-gray-400 text-sm leading-relaxed">
                    Forum musyawarah mahasiswa untuk membahas kebijakan,
                    evaluasi, serta arah gerak organisasi mahasiswa.
                </p>

            </div>

            <div class="{{ $cardClass }}">

                <div class="text-cyan-400 text-3xl font-black mb-5">
                    02
                </div>

                <h3 class="text-white font-bold text-xl mb-4">
                    Paripurna
                </h3>

                <p class="text-gray-400 text-sm leading-relaxed">
                    Forum pengambilan keputusan strategis organisasi
                    secara demokratis dan transparan.
                </p>

            </div>

            <div class="{{ $cardClass }}">

                <div class="text-cyan-400 text-3xl font-black mb-5">
                    03
                </div>

                <h3 class="text-white font-bold text-xl mb-4">
                    Serap Aspirasi
                </h3>

                <p class="text-gray-400 text-sm leading-relaxed">
                    Menjadi wadah penampung aspirasi mahasiswa untuk
                    diteruskan kepada pihak terkait.
                </p>

            </div>

        </div>

    </div>

</section>


{{-- PENGAJUAN ADMINISTRASI --}}
<section class="bg-black py-28 border-t border-gray-900">

    <div class="max-w-5xl mx-auto px-6 text-center">

        <div class="bg-gradient-to-r from-cyan-500/10 to-transparent border border-cyan-500/20 rounded-[32px] p-12">

            <h2 class="text-4xl md:text-5xl font-black text-white">
                Pengajuan Administrasi
            </h2>

            <p class="text-gray-400 mt-6 max-w-2xl mx-auto leading-relaxed">
                Pengajuan proposal, surat kegiatan, SK,
                dan kebutuhan administrasi organisasi lainnya.
            </p>

            <a
                href="{{ route('dpm.create') }}"
                class="
                    inline-flex
                    items-center
                    justify-center
                    mt-10
                    px-8
                    py-4
                    rounded-full
                    bg-cyan-500
                    text-black
                    font-bold
                    hover:scale-105
                    hover:bg-cyan-400
                    transition
                "
            >
                Buka Form Pengajuan
            </a>

        </div>

    </div>

</section>


{{-- FOOTER --}}
<footer class="bg-black border-t border-gray-900 py-20">

    <div class="max-w-6xl mx-auto px-6">

        <div class="grid md:grid-cols-3 gap-10">

            {{-- About --}}
            <div>

                <h3 class="text-white font-black text-xl mb-6">
                    DPM SAINTEK
                </h3>

                <p class="text-gray-500 leading-relaxed">
                    Lembaga legislatif mahasiswa yang mengedepankan
                    transparansi, aspirasi, dan profesionalisme.
                </p>

            </div>

            {{-- Contact --}}
            <div>

                <h4 class="text-cyan-400 font-semibold mb-5">
                    Kontak
                </h4>

                <p class="text-gray-400">
                    ✉ dpm.saintek@gmail.com
                </p>

                <p class="text-gray-400 mt-2">
                    📷 @dpm_saintek
                </p>

            </div>

            {{-- Address --}}
            <div>

                <h4 class="text-cyan-400 font-semibold mb-5">
                    Sekretariat
                </h4>

                <p class="text-gray-400">
                    Sekretariat Ormawa
                </p>

                <p class="text-gray-400 mt-2">
                    Kampus SAINTEK
                </p>

            </div>

        </div>

        {{-- Copyright --}}
        <div class="mt-16 pt-8 border-t border-gray-900 text-center text-gray-600 text-sm">
            © {{ date('Y') }} DPM SAINTEK. All rights reserved.
        </div>

    </div>

</footer>

@endsection