@extends('layouts.app')

@section('title', 'Program Kerja')

@section('content')

{{-- HERO --}}
<div class="relative h-72 -mt-20 overflow-hidden"
     style="background: linear-gradient(135deg, #0f2540 0%, #1a3a5c 50%, #0f4c81 100%)">

    {{-- Grid texture --}}
    <div class="absolute inset-0"
         style="background-image:
           repeating-linear-gradient(0deg,transparent,transparent 39px,rgba(255,255,255,.03) 39px,rgba(255,255,255,.03) 40px),
           repeating-linear-gradient(90deg,transparent,transparent 39px,rgba(255,255,255,.03) 39px,rgba(255,255,255,.03) 40px)">
    </div>

    {{-- Blobs --}}
    <div class="absolute -top-20 right-20 w-72 h-72 rounded-full opacity-15"
         style="background:#3b82f6;filter:blur(60px)"></div>
    <div class="absolute -bottom-10 left-24 w-48 h-48 rounded-full opacity-15"
         style="background:#0ea5e9;filter:blur(60px)"></div>

    {{-- Content --}}
    <div class="relative z-10 flex flex-col justify-end h-full px-10 pb-8">

        <span class="inline-flex items-center gap-1.5 w-fit
                     bg-white/10 border border-white/20 rounded-full
                     px-3 py-1 text-xs font-semibold text-white/70
                     uppercase tracking-widest mb-3">
            🏛 Fakultas Saintek
        </span>

        <h1 class="text-3xl md:text-4xl font-extrabold text-white leading-tight"
            style="font-family:'Playfair Display',serif">
            Program Kerja <span class="text-blue-400">Ormawa</span>
        </h1>
        <p class="mt-1 text-sm text-white/50">Pilih organisasi untuk melihat rencana dan agenda kegiatan</p>

        <div class="flex items-center gap-6 mt-4">
            @foreach([['3','Organisasi'],['2024','Periode'],['47','Total Proker']] as [$num,$lbl])
            <div class="flex flex-col">
                <span class="text-xl font-bold text-white">{{ $num }}</span>
                <span class="text-[10px] text-white/40 uppercase tracking-wider">{{ $lbl }}</span>
            </div>
            @if(!$loop->last)
            <div class="self-stretch w-px bg-white/10"></div>
            @endif
            @endforeach
        </div>

    </div>
</div>

{{-- CARDS --}}
<div class="max-w-6xl mx-auto px-6 py-10">

    <p class="flex items-center gap-2 text-xs font-semibold uppercase tracking-widest
              text-gray-400 mb-5 after:flex-1 after:h-px after:bg-gray-200">
        Daftar Organisasi
    </p>

    <div class="grid md:grid-cols-3 gap-5">

        @foreach([
            [
                'nama'   => 'BEM',
                'slug'   => 'bem',
                'tag'    => 'Eksekutif',
                'proker' => 18,
                'desc'   => 'Badan Eksekutif Mahasiswa sebagai penggerak utama kegiatan dan aspirasi kampus.',
                'accent' => 'from-blue-600 to-blue-400',
                'icon_bg'=> 'bg-blue-50',
                'icon_c' => 'text-blue-600',
                'tag_bg' => 'bg-blue-50 text-blue-700',
                'cta_c'  => 'text-blue-600',
            ],
            [
                'nama'   => 'DPM',
                'slug'   => 'dpm',
                'tag'    => 'Legislatif',
                'proker' => 12,
                'desc'   => 'Lembaga legislatif mahasiswa yang mengawasi dan mengevaluasi kinerja organisasi.',
                'accent' => 'from-cyan-600 to-cyan-400',
                'icon_bg'=> 'bg-cyan-50',
                'icon_c' => 'text-cyan-600',
                'tag_bg' => 'bg-cyan-50 text-cyan-700',
                'cta_c'  => 'text-cyan-600',
            ],
            [
                'nama'   => 'HIMASI',
                'slug'   => 'himasi',
                'tag'    => 'Himpunan',
                'proker' => 17,
                'desc'   => 'Fokus pada pengembangan akademik dan teknologi mahasiswa Sistem Informasi.',
                'accent' => 'from-violet-600 to-violet-400',
                'icon_bg'=> 'bg-violet-50',
                'icon_c' => 'text-violet-600',
                'tag_bg' => 'bg-violet-50 text-violet-700',
                'cta_c'  => 'text-violet-600',
            ],
        ] as $org)

        <a href="{{ route('program.' . $org['slug']) }}"
           class="group bg-white border border-gray-100 rounded-2xl overflow-hidden
                  shadow-sm hover:shadow-md hover:-translate-y-1 transition duration-200">

            {{-- Accent bar --}}
            <div class="h-1 w-full bg-gradient-to-r {{ $org['accent'] }}"></div>

            <div class="p-5">

                {{-- Icon + tag --}}
                <div class="flex items-start justify-between mb-4">
                    <div class="w-9 h-9 rounded-xl flex items-center justify-center
                                {{ $org['icon_bg'] }} {{ $org['icon_c'] }} text-lg">
                        ◈
                    </div>
                    <span class="text-[10px] font-semibold uppercase tracking-wider
                                 px-2.5 py-1 rounded-full {{ $org['tag_bg'] }}">
                        {{ $org['tag'] }}
                    </span>
                </div>

                {{-- Name --}}
                <h2 class="text-2xl font-extrabold text-gray-900 leading-tight"
                    style="font-family:'Playfair Display',serif">
                    {{ $org['nama'] }}
                </h2>
                <p class="text-[11px] font-semibold text-gray-400 uppercase tracking-wider mt-0.5 mb-3">
                    Saintek &middot; Aktif
                </p>

                {{-- Desc --}}
                <p class="text-xs text-gray-500 leading-relaxed mb-4">
                    {{ $org['desc'] }}
                </p>

                <hr class="border-gray-100 mb-4">

                {{-- Footer --}}
                <div class="flex items-center justify-between">
                    <span class="text-xs text-gray-400">
                        <strong class="text-gray-700">{{ $org['proker'] }}</strong> program kerja
                    </span>
                    <span class="text-xs font-semibold flex items-center gap-1
                                 {{ $org['cta_c'] }} group-hover:gap-2 transition-all">
                        Lihat detail →
                    </span>
                </div>

            </div>
        </a>

        @endforeach
    </div>

    {{-- Bottom info bar --}}
    <div class="mt-5 flex items-center justify-between px-5 py-3
                bg-white border border-gray-100 rounded-xl text-xs text-gray-400">
        <span>ℹ Data diperbarui untuk periode 2024/2025</span>
        <button class="text-gray-600 border border-gray-200 rounded-lg px-3 py-1.5 hover:bg-gray-50 transition">
            ↺ Perbarui data
        </button>
    </div>

</div>

@endsection