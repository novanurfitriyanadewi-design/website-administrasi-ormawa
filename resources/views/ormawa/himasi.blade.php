@extends('layouts.app')

@section('title', 'BEM')

@section('content')

{{-- HERO --}}
<section class="relative h-[650px] overflow-hidden -mt-[80px]">

    {{-- BACKGROUND IMAGE --}}
    <img src="{{ asset('images/himasi_struktur.jpeg') }}"
        class="absolute inset-0 w-full h-full object-cover"
        alt="HIMASI">

    {{-- OVERLAY --}}
    <div class="absolute inset-0 bg-black/55"></div>

    {{-- CONTENT --}}
    <div class="relative z-10 flex flex-col items-center justify-center h-full text-center px-6">

        <span class="px-5 py-2 rounded-full bg-purple-500/30 text-purple-200 text-sm font-semibold mb-6 backdrop-blur-md border border-white/20">
            ORGANISASI MAHASISWA
        </span>

        <h1 class="text-5xl md:text-7xl font-extrabold text-white drop-shadow-lg">
            HIMASI
        </h1>

        <p class="text-xl md:text-2xl text-gray-200 mt-4 font-medium">
            Himpunan Mahasiswa Sistem Informasi
        </p>

    </div>

</section>

{{-- CONTENT --}}
<section class="bg-[#f5f5f5] py-20">

    <div class="max-w-6xl mx-auto px-6">

        {{-- CARD --}}
        <div class="grid lg:grid-cols-3 gap-8">

            {{-- LEFT --}}
            <div class="lg:col-span-2 bg-white rounded-3xl p-10 shadow-md border border-gray-100">

                <div class="flex items-center gap-3 mb-6">

                    <div class="w-12 h-12 rounded-full bg-purple-100 flex items-center justify-center">
                        🎓
                    </div>

                    <h2 class="text-3xl font-bold text-gray-800">
                        Tentang HIMASI
                    </h2>

                </div>

                <div class="border-b mb-6"></div>

                <p class="text-gray-600 leading-relaxed mb-5">
                    Himpunan Mahasiswa Sistem Informasi (HIMASI) menjadi wadah bagi mahasiswa Sistem Informasi untuk berkembang dalam bidang akademik, teknologi, organisasi, dan kreativitas.
                </p>

                <p class="text-gray-600 leading-relaxed mb-5">
                    HIMASI hadir untuk membangun solidaritas, meningkatkan kompetensi, serta menciptakan generasi mahasiswa yang inovatif dan siap menghadapi perkembangan dunia digital.
                </p>

                {{-- VISI --}}
                <h3 class="text-2xl font-bold text-gray-800 mt-10 mb-4">
                    Visi
                </h3>

                <p class="text-gray-600 leading-relaxed">
                    Mewujudkan HIMASI sebagai organisasi yang berkontribusi terhadap kualitas akademik mahasiswa dan mewadahi minat bakat mahasiswa Sistem Informasi.
                </p>

                {{-- MISI --}}
                <h3 class="text-2xl font-bold text-gray-800 mt-10 mb-4">
                    Misi
                </h3>

                <ul class="space-y-3 text-gray-600 leading-relaxed">

                    <li>
                        • Menjalin komunikasi secara intens terhadap mahasiswa Fakultas Saintek
                    </li>

                    <li>
                        • Mengembangkan program kerja berbasis pelatihan dan seminar yang dibutuhkan mahasiswa Sistem Informasi
                    </li>

                    <li>
                        • Membuat kelas belajar sesuai kebutuhan mahasiswa Sistem Informasi
                    </li>

                    <li>
                        • Membangun jaringan kerja sama antar himpunan luar untuk memperluas relasi informasi lomba di luar kampus
                    </li>

                </ul>

            </div>

            {{-- RIGHT --}}
            <div class="bg-white rounded-3xl p-10 shadow-md border border-gray-100 text-center h-fit">

                <div class="w-36 h-36 mx-auto rounded-full bg-gray-100 flex items-center justify-center overflow-hidden border-4 border-gray-200">

                    <img src="{{ asset('images/himasi.jpeg') }}"
                        class="w-24 h-24 object-contain"
                        alt="HIMASI">

                </div>

                <h3 class="text-2xl font-bold text-gray-800 mt-8">
                    HIMASI
                </h3>

                <p class="text-gray-500 mt-2">
                    Himpunan Mahasiswa Sistem Informasi
                </p>

            </div>

        </div>

    </div>

</section>

</section>
{{-- STRUKTUR KEPENGURUSAN --}}
<section id="struktur" class="bg-[#f5f5f5] py-20">

    <div class="max-w-6xl mx-auto px-6">

        {{-- TITLE --}}
        <div class="text-center mb-16">

            <h2 class="text-4xl font-bold text-gray-800 mb-3">
                Struktur Pengurus
            </h2>

            <div class="w-20 h-1 bg-purple-500 mx-auto rounded-full"></div>

        </div>

        {{-- PIMPINAN --}}
        <div class="flex flex-wrap justify-center items-end gap-12 mb-20">

            {{-- WAKIL --}}
            <div class="text-center">

                <div class="w-28 h-28 rounded-full bg-sky-400
                            flex items-center justify-center
                            text-white text-3xl font-bold
                            shadow-xl border-[6px] border-white mx-auto">

                    DM

                </div>

                <h3 class="mt-5 font-bold text-gray-800 text-lg">
                    Dio Ananda Maulana Wijaya
                </h3>

                <span class="inline-block mt-3 px-5 py-1 rounded-full
                            bg-sky-100 text-sky-600 text-xs font-semibold">

                    WAKIL KETUA

                </span>

            </div>

            {{-- KETUA --}}
            <div class="text-center">

                <div class="w-36 h-36 rounded-full
                            bg-gradient-to-br from-purple-500 to-violet-700
                            flex items-center justify-center
                            text-white text-5xl font-bold
                            shadow-2xl border-[6px] border-white mx-auto">

                    AR

                </div>

                <h3 class="mt-5 font-bold text-gray-800 text-xl">
                    Ainur Rohman Hardini
                </h3>

                <span class="inline-block mt-3 px-6 py-2 rounded-full
                            bg-purple-600 text-white text-sm font-semibold shadow">

                    KETUA

                </span>

            </div>

            {{-- SEKRETARIS --}}
            <div class="text-center">

                <div class="w-28 h-28 rounded-full bg-slate-500
                            flex items-center justify-center
                            text-white text-3xl font-bold
                            shadow-xl border-[6px] border-white mx-auto">

                    AZ

                </div>

                <h3 class="mt-5 font-bold text-gray-800 text-lg">
                    Azalia Zulhia Fatimah
                </h3>

                <span class="inline-block mt-3 px-5 py-1 rounded-full
                            bg-slate-200 text-slate-700 text-xs font-semibold">

                    SEKRETARIS 1

                </span>

            </div>

        </div>
        {{-- STAFF --}}
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4 mb-10">

            <div class="bg-white rounded-2xl p-4 shadow border text-center">
                <h4 class="text-xs text-purple-500 font-bold uppercase">
                    Sekretaris 2
                </h4>

                <p class="text-gray-700 mt-2 font-medium">
                    Uhti Amelia
                </p>
            </div>

            <div class="bg-white rounded-2xl p-4 shadow border text-center">
                <h4 class="text-xs text-purple-500 font-bold uppercase">
                    Bendahara 1
                </h4>

                <p class="text-gray-700 mt-2 font-medium">
                    Tiana Permatasari
                </p>
            </div>

            <div class="bg-white rounded-2xl p-4 shadow border text-center">
                <h4 class="text-xs text-purple-500 font-bold uppercase">
                    Koordinator Ristekbang
                </h4>

                <p class="text-gray-700 mt-2 font-medium">
                    M.Genio Brillian
                </p>
            </div>

            <div class="bg-white rounded-2xl p-4 shadow border text-center">
                <h4 class="text-xs text-purple-500 font-bold uppercase">
                    Koordinator Medkominfo
                </h4>

                <p class="text-gray-700 mt-2 font-medium">
                    Muhammad Eka Saputra
                </p>
            </div>

        </div>

        {{-- DIVISI --}}
        <div class="grid md:grid-cols-2 gap-6">

            {{-- CARD --}}
            <div class="bg-white rounded-2xl p-6 border shadow-sm">

                <h3 class="text-lg font-bold text-purple-600 mb-4">
                    🎨 Divisi Media
                </h3>

                <ul class="space-y-2 text-gray-600 text-sm">

                    <li>• Husain Aziz Al Rosyid</li>
                    <li>• Lailatul Nur Aifa</li>
                    <li>• Denis Mawar Sania</li>

                </ul>

            </div>

            {{-- CARD --}}
            <div class="bg-white rounded-2xl p-6 border shadow-sm">

                <h3 class="text-lg font-bold text-purple-600 mb-4">
                    💻 Divisi Riset & Teknologi
                </h3>

                <ul class="space-y-2 text-gray-600 text-sm">

                    <li>• Mirza Fahmi</li>
                    <li>• Elsa Dwi Lestari</li>
                    <li>• M. Fauzian Afshor</li>

                </ul>

            </div>

            {{-- CARD --}}
            <div class="bg-white rounded-2xl p-6 border shadow-sm">

                <h3 class="text-lg font-bold text-purple-600 mb-4">
                    📢 Divisi Komunikasi
                </h3>

                <ul class="space-y-2 text-gray-600 text-sm">

                    <li>• Muhammad Teddy</li>
                    <li>• Asykaril Kafifulloh</li>

                </ul>

            </div>

            {{-- CARD --}}
            <div class="bg-white rounded-2xl p-6 border shadow-sm">

                <h3 class="text-lg font-bold text-purple-600 mb-4">
                    🚀 Divisi Pengembangan
                </h3>

                <ul class="space-y-2 text-gray-600 text-sm">

                    <li>• Muhammad Syarif</li>
                    <li>• Yafi Mahardika</li>
                    <li>• Nela Ulivatul</li>

                </ul>

            </div>

        </div>

    </div>

</section>
@endsection