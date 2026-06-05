<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') — Ormawa Saintek</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>

<body class="bg-[#f8f9fb] antialiased">
    

    {{-- NAVBAR --}}
    <nav class="fixed top-0 left-0 w-full z-50 bg-[#0c2d4e]/95 backdrop-blur-md border-b border-white/5">
        <div class="max-w-7xl mx-auto px-6 h-16 flex items-center justify-between">

            {{-- LOGO --}}
            <a href="/" class="flex items-center gap-3 group">
                <div class="w-8 h-8 bg-blue-600 rounded-lg flex items-center justify-center
                            font-bold text-white text-sm flex-shrink-0">O</div>
                <div>
                    <div class="font-bold text-white text-[15px] leading-tight"
                         style="font-family:'Playfair Display',serif">
                        Ormawa Saintek
                    </div>
                    <div class="text-[10px] text-white/40 font-normal tracking-wide">
                        Administrasi Organisasi Mahasiswa
                    </div>
                </div>
            </a>

            {{-- MENU (desktop) --}}
            <div class="hidden md:flex items-center gap-1">
                @foreach([
                    ['/', 'Beranda'],
                    ['/bem', 'BEM'],
                    ['/dpm', 'DPM'],
                    ['/himasi', 'HIMASI'],
                    ['/program', 'Program Kerja'],
                ] as [$url, $label])
                <a href="{{ $url }}"
                   class="px-3 py-1.5 rounded-lg text-[13px] font-medium text-white/60
                          hover:bg-white/8 hover:text-white transition
                          {{ request()->is(ltrim($url, '/') ?: '/') ? 'bg-white/10 text-white' : '' }}">
                    {{ $label }}
                </a>
                @endforeach

                <div class="w-px h-5 bg-white/10 mx-2"></div>

                @guest
                    <a href="{{ route('login') }}"
                       class="bg-blue-600 hover:bg-blue-700 text-white text-[13px] font-semibold
                              px-4 py-2 rounded-lg transition">
                        Login
                    </a>
                @endguest

                @auth
                    <a href="{{ route('dashboard') }}"
                       class="bg-blue-600 hover:bg-blue-700 text-white text-[13px] font-semibold
                              px-4 py-2 rounded-lg transition flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                             viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z"/>
                        </svg>
                        Dashboard
                    </a>
                @endauth
            </div>

            {{-- HAMBURGER (mobile) --}}
            <button id="menuBtn"
                    class="md:hidden text-white/70 hover:text-white p-2 rounded-lg hover:bg-white/8 transition">
                <svg id="iconOpen" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                     viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M3.75 17.25h16.5"/>
                </svg>
                <svg id="iconClose" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 hidden" fill="none"
                     viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>

        </div>

        {{-- MOBILE MENU --}}
        <div id="mobileMenu"
             class="md:hidden hidden bg-[#0a2440] border-t border-white/5 px-6 py-3">
            @foreach([['/', 'Beranda'],['/bem','BEM'],['/dpm','DPM'],['/himasi','HIMASI'],['/program','Program Kerja']] as [$url,$label])
            <a href="{{ $url }}"
               class="block py-2.5 text-[13px] font-medium text-white/60 hover:text-white
                      border-b border-white/5 last:border-0 transition">
                {{ $label }}
            </a>
            @endforeach
            <div class="pt-3 pb-1">
                @guest
                    <a href="{{ route('login') }}"
                       class="block text-center bg-blue-600 text-white text-[13px] font-semibold
                              px-4 py-2.5 rounded-lg">Login</a>
                @endguest
                @auth
                    <a href="{{ route('dashboard') }}"
                       class="block text-center bg-blue-600 text-white text-[13px] font-semibold
                              px-4 py-2.5 rounded-lg">Dashboard</a>
                @endauth
            </div>
        </div>
    </nav>

    {{-- CONTENT --}}
    <main class="pt-16 min-h-screen">
        @yield('content')
    </main>

    {{-- FOOTER --}}
    <footer class="bg-[#0a1f33]">

        <div class="max-w-7xl mx-auto px-6 py-12 grid md:grid-cols-3 gap-10">

            {{-- BRAND --}}
            <div>
                <div class="w-9 h-9 bg-blue-800 rounded-xl flex items-center justify-center
                            font-bold text-white text-base mb-3">O</div>
                <h2 class="font-bold text-white text-lg mb-2"
                    style="font-family:'Playfair Display',serif">
                    Ormawa Saintek
                </h2>
                <p class="text-[12px] text-white/40 leading-relaxed">
                    Website Administrasi Organisasi Mahasiswa Fakultas Sains dan Teknologi —
                    media informasi, administrasi surat, dan pengajuan proposal kegiatan mahasiswa.
                </p>
            </div>

            {{-- NAVIGASI --}}
            <div>
                <h3 class="text-[11px] font-semibold text-white/80 uppercase tracking-widest mb-4
                           flex items-center gap-2 before:w-4 before:h-0.5 before:bg-blue-500 before:rounded">
                    Navigasi
                </h3>
                <ul class="space-y-2">
                    @foreach([['/', 'Beranda'],['/bem','BEM'],['/dpm','DPM'],['/himasi','HIMASI'],['/program-kerja','Program Kerja']] as [$url,$label])
                    <li>
                        <a href="{{ $url }}"
                           class="text-[12px] text-white/40 hover:text-blue-300 transition flex items-center gap-2">
                            <span class="text-white/15">›</span>{{ $label }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- KONTAK --}}
            <div>
                <h3 class="text-[11px] font-semibold text-white/80 uppercase tracking-widest mb-4
                           flex items-center gap-2 before:w-4 before:h-0.5 before:bg-blue-500 before:rounded">
                    Kontak
                </h3>
                <div class="space-y-3">
                    @foreach([
                        ['🏛', 'Fakultas Sains dan Teknologi'],
                        ['🎓', 'Universitas Pesantren Tinggi Darul Ulum'],
                        ['📍', 'Jombang, Jawa Timur'],
                        ['✉️', 'ormawa@saintek.ac.id'],
                    ] as [$icon, $text])
                    <div class="flex items-start gap-2.5">
                        <span class="text-sm mt-px flex-shrink-0">{{ $icon }}</span>
                        <span class="text-[12px] text-white/40 leading-relaxed">{{ $text }}</span>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>

        {{-- COPYRIGHT --}}
        <div class="border-t border-white/5">
            <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between flex-wrap gap-3">
                <span class="text-[11px] text-white/25">
                    © {{ date('Y') }} Ormawa Saintek — All Rights Reserved
                </span>
                <div class="flex gap-2">
                    @foreach(['BEM','DPM','HIMASI'] as $tag)
                    <span class="text-[10px] font-semibold text-white/30 bg-white/5
                                 border border-white/8 rounded-full px-2.5 py-0.5">
                        {{ $tag }}
                    </span>
                    @endforeach
                </div>
            </div>
        </div>

    </footer>

    <script>
        const btn = document.getElementById('menuBtn');
        const menu = document.getElementById('mobileMenu');
        const iconO = document.getElementById('iconOpen');
        const iconC = document.getElementById('iconClose');
        btn?.addEventListener('click', () => {
            menu.classList.toggle('hidden');
            iconO.classList.toggle('hidden');
            iconC.classList.toggle('hidden');
        });
    </script>

</body>
</html>