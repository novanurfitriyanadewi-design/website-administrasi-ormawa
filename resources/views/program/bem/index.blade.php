@extends('layouts.app')

@section('title', 'Program Kerja BEM')

@section('content')

<section class="relative min-h-screen flex items-center overflow-hidden bg-gray-950 -mt-20">

    {{-- Background Image --}}
    <img src="{{ asset('images/bem_struktur2.jpeg') }}"
         class="absolute inset-0 w-full h-full object-cover opacity-20">

    {{-- Subtle grid overlay --}}
    <div class="absolute inset-0"
         style="background-image: linear-gradient(rgba(255,255,255,0.03) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,0.03) 1px, transparent 1px); background-size: 60px 60px;">
    </div>

    {{-- Gradient fade bottom --}}
    <div class="absolute bottom-0 inset-x-0 h-40 bg-gradient-to-t from-gray-950 to-transparent"></div>

    {{-- Content --}}
    <div class="relative z-10 max-w-5xl mx-auto px-8 py-32">

        <span class="inline-block text-xs tracking-[6px] uppercase text-amber-400 font-medium mb-8">
            Badan Eksekutif Mahasiswa — 2025/2026
        </span>

        <h1 class="text-6xl md:text-8xl font-black text-white leading-[1.05] mb-8 tracking-tight">
            Program<br>
            <span class="text-amber-400">Kerja</span>
        </h1>

        <p class="text-gray-400 text-lg max-w-xl leading-relaxed">
            Menjadi wadah pengembangan mahasiswa melalui kegiatan kreatif,
            kolaboratif, dan pengabdian sosial demi lingkungan kampus yang
            aktif serta inspiratif.
        </p>

        {{-- Scroll hint --}}
        <div class="mt-16 flex items-center gap-3 text-gray-500 text-sm">
            <div class="w-6 h-10 border border-gray-700 rounded-full flex items-start justify-center p-1">
                <div class="w-1 h-2 bg-amber-400 rounded-full animate-bounce"></div>
            </div>
            Scroll untuk melihat program
        </div>

    </div>

</section>

{{-- PROGRAM KERJA --}}
<section class="bg-white py-28">

    <div class="max-w-6xl mx-auto px-8">

        {{-- Header --}}
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-20 gap-6">

            <div>
                <p class="text-xs tracking-[5px] uppercase text-amber-500 font-medium mb-4">
                    Program Kerja
                </p>
                <h2 class="text-4xl md:text-5xl font-black text-gray-900 leading-tight">
                    Kegiatan<br>Unggulan BEM
                </h2>
            </div>

            <p class="text-gray-500 max-w-sm leading-relaxed text-sm md:text-right">
                Empat program utama dirancang untuk membangun solidaritas,
                mengembangkan bakat, dan memperluas relasi mahasiswa.
            </p>

        </div>

        {{-- Program Cards --}}
        <div class="grid md:grid-cols-2 gap-px bg-gray-100 border border-gray-100 rounded-2xl overflow-hidden">

            {{-- TOSS --}}
            <div class="bg-white p-10 group hover:bg-amber-50 transition-colors duration-300">
                <div class="flex items-start justify-between mb-8">
                    <span class="text-xs tracking-[4px] uppercase text-gray-400 font-medium">01</span>
                    <span class="w-8 h-8 rounded-full bg-amber-100 flex items-center justify-center">
                        <svg class="w-4 h-4 text-amber-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </span>
                </div>
                <h3 class="text-2xl font-black text-gray-900 mb-1">TOSS</h3>
                <p class="text-amber-600 text-sm font-medium mb-5 tracking-wide">
                    Togetherness Of Solidarity
                </p>
                <p class="text-gray-500 text-sm leading-relaxed">
                    Mempererat hubungan antar mahasiswa melalui team building,
                    diskusi, dan aktivitas kolaboratif untuk menciptakan rasa
                    solidaritas dan kekeluargaan dalam organisasi.
                </p>
                <div class="mt-8 pt-6 border-t border-gray-100 text-xs text-gray-400 tracking-wide">
                    Oktober 2025
                </div>
            </div>

            {{-- SMO --}}
            <div class="bg-white p-10 group hover:bg-amber-50 transition-colors duration-300">
                <div class="flex items-start justify-between mb-8">
                    <span class="text-xs tracking-[4px] uppercase text-gray-400 font-medium">02</span>
                    <span class="w-8 h-8 rounded-full bg-amber-100 flex items-center justify-center">
                        <svg class="w-4 h-4 text-amber-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064"/>
                        </svg>
                    </span>
                </div>
                <h3 class="text-2xl font-black text-gray-900 mb-1">SMO</h3>
                <p class="text-amber-600 text-sm font-medium mb-5 tracking-wide">
                    SMA Se-Jawa Timur
                </p>
                <p class="text-gray-500 text-sm leading-relaxed">
                    SAINTEK MATH Olympiad merupakan kompetisi matematika tingkat SMA
                     se-Jawa Timur yang diselenggarakan untuk meningkatkan kemampuan
                      berpikir logis, analitis, dan kreatif para pelajar. Kegiatan ini
                       menjadi wadah bagi siswa untuk menunjukkan potensi akademik,
                         memperluas relasi, serta menumbuhkan semangat kompetitif dan
                          sportivitas dalam bidang matematika.
                </p>
                <div class="mt-8 pt-6 border-t border-gray-100 text-xs text-gray-400 tracking-wide">
                    Februari 2026
                </div>
            </div>

            {{-- ESPORT --}}
            <div class="bg-white p-10 group hover:bg-amber-50 transition-colors duration-300">
                <div class="flex items-start justify-between mb-8">
                    <span class="text-xs tracking-[4px] uppercase text-gray-400 font-medium">03</span>
                    <span class="w-8 h-8 rounded-full bg-amber-100 flex items-center justify-center">
                        <svg class="w-4 h-4 text-amber-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                        </svg>
                    </span>
                </div>
                <h3 class="text-2xl font-black text-gray-900 mb-1">ESPORT</h3>
                <p class="text-amber-600 text-sm font-medium mb-5 tracking-wide">
                    Competition
                </p>
                <p class="text-gray-500 text-sm leading-relaxed">
                    Wadah mahasiswa mengembangkan bakat di bidang digital dan
                    olahraga elektronik, sekaligus meningkatkan sportivitas,
                    kerja sama tim, dan kreativitas generasi muda.
                </p>
                <div class="mt-8 pt-6 border-t border-gray-100 text-xs text-gray-400 tracking-wide">
                    Juli 2026
                </div>
            </div>

            {{-- Bakti Sosial --}}
            <div class="bg-white p-10 group hover:bg-amber-50 transition-colors duration-300">
                <div class="flex items-start justify-between mb-8">
                    <span class="text-xs tracking-[4px] uppercase text-gray-400 font-medium">04</span>
                    <span class="w-8 h-8 rounded-full bg-amber-100 flex items-center justify-center">
                        <svg class="w-4 h-4 text-amber-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                    </span>
                </div>
                <h3 class="text-2xl font-black text-gray-900 mb-1">Bakti Sosial</h3>
                <p class="text-amber-600 text-sm font-medium mb-5 tracking-wide">
                    Pengabdian Masyarakat
                </p>
                <p class="text-gray-500 text-sm leading-relaxed">
                    Kepedulian mahasiswa terhadap masyarakat sekitar melalui
                    kegiatan sosial, berbagi bantuan, kerja bakti, serta edukasi
                    untuk menciptakan dampak positif bagi lingkungan.
                </p>
                <div class="mt-8 pt-6 border-t border-gray-100 text-xs text-gray-400 tracking-wide">
                    Oktober 2026
                </div>
            </div>

        </div>

    </div>

</section>

{{-- TIMELINE --}}
<section class="bg-gray-950 py-28">

    <div class="max-w-4xl mx-auto px-8">

        <div class="mb-20">
            <p class="text-xs tracking-[5px] uppercase text-amber-400 font-medium mb-4">
                Timeline
            </p>
            <h2 class="text-4xl md:text-5xl font-black text-white leading-tight">
                Jadwal Program Kerja
            </h2>
        </div>

        {{-- Timeline Items --}}
        <div class="relative">

            {{-- Vertical line --}}
            <div class="absolute left-[19px] top-2 bottom-2 w-px bg-gray-800"></div>

            <div class="space-y-0">

                
                <div class="relative flex gap-10 pb-14">
                    <div class="w-10 flex-shrink-0 flex items-start justify-center pt-1">
                        <div class="w-5 h-5 rounded-full border-2 border-amber-400 bg-gray-950 z-10"></div>
                    </div>
                    <div class="flex-1 pt-0.5">
                        <p class="text-amber-400 text-xs tracking-[4px] uppercase font-medium mb-2">
                            Oktober 2025
                        </p>
                        <h3 class="text-white text-xl font-bold mb-2">TOSS</h3>
                        <p class="text-gray-500 text-sm leading-relaxed">
                            Kegiatan penguatan solidaritas dan kebersamaan mahasiswa.
                        </p>
                    </div>
                </div>

                
                <div class="relative flex gap-10 pb-14">
                    <div class="w-10 flex-shrink-0 flex items-start justify-center pt-1">
                        <div class="w-5 h-5 rounded-full border-2 border-amber-400 bg-gray-950 z-10"></div>
                    </div>
                    <div class="flex-1 pt-0.5">
                        <p class="text-amber-400 text-xs tracking-[4px] uppercase font-medium mb-2">
                            Februari 2026
                        </p>
                        <h3 class="text-white text-xl font-bold mb-2">SMO Jawa Timur</h3>
                        <p class="text-gray-500 text-sm leading-relaxed">
                             kompetisi matematika tingkat SMA se-Jawa Timur 
                        </p>
                    </div>
                </div>

                
                <div class="relative flex gap-10 pb-14">
                    <div class="w-10 flex-shrink-0 flex items-start justify-center pt-1">
                        <div class="w-5 h-5 rounded-full border-2 border-amber-400 bg-gray-950 z-10"></div>
                    </div>
                    <div class="flex-1 pt-0.5">
                        <p class="text-amber-400 text-xs tracking-[4px] uppercase font-medium mb-2">
                            Februari 2026
                        </p>
                        <h3 class="text-white text-xl font-bold mb-2">ESPORT Competition</h3>
                        <p class="text-gray-500 text-sm leading-relaxed">
                            Kompetisi esport antar mahasiswa dengan berbagai kategori pertandingan.
                        </p>
                    </div>
                </div>

                
                <div class="relative flex gap-10">
                    <div class="w-10 flex-shrink-0 flex items-start justify-center pt-1">
                        <div class="w-5 h-5 rounded-full border-2 border-amber-400 bg-gray-950 z-10"></div>
                    </div>
                    <div class="flex-1 pt-0.5">
                        <p class="text-amber-400 text-xs tracking-[4px] uppercase font-medium mb-2">
                            Juni 2026
                        </p>
                        <h3 class="text-white text-xl font-bold mb-2">Bakti Sosial</h3>
                        <p class="text-gray-500 text-sm leading-relaxed">
                            Pengabdian masyarakat melalui kegiatan sosial dan bantuan kemanusiaan.
                        </p>
                    </div>
                </div>

            </div>
        </div>

    </div>

</section>

{{-- GALLERY --}}
<section class="bg-white py-28">

    <div class="max-w-6xl mx-auto px-8">

        <div class="mb-16">
            <p class="text-xs tracking-[5px] uppercase text-amber-500 font-medium mb-4">
                Galeri
            </p>
            <h2 class="text-4xl md:text-5xl font-black text-gray-900 leading-tight">
                Dokumentasi Kegiatan
            </h2>
        </div>

        <div class="grid md:grid-cols-3 gap-4">

            <div class="relative overflow-hidden rounded-2xl aspect-[4/5] group">
                <img src="{{ asset('images/ESPORT.jpeg') }}"
                     class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-gray-950/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition duration-300">
                    <div class="absolute bottom-5 left-5">
                        <p class="text-white font-bold">ESPORT</p>
                        <p class="text-gray-300 text-sm">Juli 2026</p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden rounded-2xl aspect-[4/5] group md:mt-10">
                <img src="{{ asset('images/SMO.jpeg') }}"
                     class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-gray-950/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition duration-300">
                    <div class="absolute bottom-5 left-5">
                        <p class="text-white font-bold">SMO</p>
                        <p class="text-gray-300 text-sm">April 2026</p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden rounded-2xl aspect-[4/5] group">
                <img src="{{ asset('images/TOSS.jpeg') }}"
                     class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-gray-950/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition duration-300">
                    <div class="absolute bottom-5 left-5">
                        <p class="text-white font-bold">TOSS</p>
                        <p class="text-gray-300 text-sm">Februari 2026</p>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section>

{{-- QUOTE / CTA --}}
<section class="bg-gray-950 py-28 relative overflow-hidden">

    {{-- Decorative circle --}}
    <div class="absolute -right-32 -top-32 w-96 h-96 rounded-full border border-gray-800"></div>
    <div class="absolute -right-16 -top-16 w-64 h-64 rounded-full border border-gray-800"></div>

    <div class="max-w-4xl mx-auto px-8 relative z-10">

        <div class="max-w-2xl">

            <span class="text-5xl text-amber-400 font-black leading-none">"</span>

            <h2 class="text-3xl md:text-4xl font-black text-white leading-tight mt-2 mb-8">
                Bersama bergerak, bersama berkembang,
                dan bersama menciptakan perubahan.
            </h2>

            <div class="w-12 h-0.5 bg-amber-400 mb-8"></div>

            <p class="text-gray-400 text-sm leading-relaxed max-w-lg">
                BEM hadir sebagai ruang kolaborasi mahasiswa untuk membangun
                kreativitas, kepedulian sosial, serta semangat kepemimpinan
                demi masa depan yang lebih baik.
            </p>

        </div>

    </div>

</section>

@endsection