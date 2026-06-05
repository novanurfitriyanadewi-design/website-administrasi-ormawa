@extends('layouts.app')

@section('title', 'DPM')

@section('content')

{{-- HERO SECTION --}}
<section class="relative -mt-4 bg-gradient-to-br from-black via-zinc-900 to-slate-950 text-white overflow-hidden">
    {{-- EFFECT --}}
    <div class="absolute inset-0 overflow-hidden">

        <div class="absolute top-0 left-0 w-96 h-96 bg-sky-500/10 rounded-full blur-3xl"></div>

        <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-cyan-400/10 rounded-full blur-3xl"></div>

        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(255,255,255,0.08),transparent_40%)]"></div>

    </div>

    <div class="relative max-w-7xl mx-auto px-6 py-24 lg:py-32">

        <div class="grid lg:grid-cols-2 gap-12 items-center">

            {{-- TEXT --}}
            <div>

                <p class="uppercase tracking-[5px] text-sky-300 text-sm mb-4 font-semibold">
                    Dewan Perwakilan Mahasiswa
                </p>

                <h1 class="text-4xl md:text-6xl font-extrabold leading-tight mb-6">
                    Ruang Aspirasi dan Demokrasi Mahasiswa
                </h1>

                <p class="text-lg text-gray-300 leading-relaxed mb-8">
                    Dewan Perwakilan Mahasiswa (DPM) merupakan lembaga legislatif mahasiswa
                    yang berperan dalam menampung, mengawal, serta menyampaikan aspirasi mahasiswa.
                    DPM hadir sebagai wadah demokrasi kampus yang menjunjung tinggi nilai
                    transparansi, tanggung jawab, dan integritas dalam organisasi kemahasiswaan.
                </p>

                <div class="flex flex-wrap gap-4">

                    <a href="#tentang"
                       class="px-6 py-3 bg-gradient-to-r from-sky-500 to-cyan-500 text-white rounded-full font-semibold hover:scale-105 transition duration-300 shadow-lg shadow-sky-500/30">
                        Tentang DPM
                    </a>

                    <a href="#visi-misi"
                       class="px-6 py-3 border border-sky-500/40 bg-white/5 backdrop-blur-md rounded-full font-semibold hover:bg-sky-500 hover:text-white transition duration-300">
                        Visi & Misi
                    </a>

                </div>

            </div>

            {{-- LOGO --}}
            <div class="flex justify-center lg:justify-end">

                <div class="relative">

                    <div class="absolute inset-0 bg-sky-500/20 blur-3xl rounded-full"></div>

                    <div class="relative bg-white/5 backdrop-blur-xl p-8 rounded-[40px] border border-white/10 shadow-2xl">

                        <img src="{{ asset('images/KMMM.jpeg') }}"
                             alt="Logo DPM"
                             class="w-72 h-72 object-contain drop-shadow-2xl">

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- TENTANG DPM --}}
<section id="tentang" class="relative py-24 bg-gradient-to-b from-zinc-950 via-black to-zinc-950 text-white overflow-hidden">

    <div class="absolute top-0 right-0 w-80 h-80 bg-sky-500/10 rounded-full blur-3xl"></div>

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid lg:grid-cols-2 gap-14 items-center">

            {{-- IMAGE --}}
            <div>

                <div class="relative">

                    <div class="absolute -top-5 -left-5 w-full h-full bg-gradient-to-br from-sky-500/20 to-cyan-500/10 rounded-[35px]"></div>

                    <img src="{{ asset('images/dpm.png') }}"
                         class="relative rounded-[35px] shadow-2xl bg-zinc-900/80 backdrop-blur-md p-10 w-full h-[420px] object-contain border border-white/10">

                </div>

            </div>

            {{-- CONTENT --}}
            <div>

                <p class="text-sky-300 font-semibold uppercase tracking-[4px] mb-3">
                    Tentang DPM
                </p>

                <h2 class="text-4xl font-extrabold text-white mb-6 leading-tight">
                    Menjadi Penghubung Aspirasi Mahasiswa
                </h2>

                <p class="text-gray-300 leading-relaxed mb-5 text-lg">
                    Dewan Perwakilan Mahasiswa (DPM) adalah lembaga kemahasiswaan yang
                    memiliki peran penting dalam menjalankan fungsi legislasi, pengawasan,
                    dan penyaluran aspirasi mahasiswa di lingkungan kampus.
                </p>

                <p class="text-gray-300 leading-relaxed mb-5 text-lg">
                    DPM berkomitmen menciptakan sistem organisasi mahasiswa yang lebih tertib,
                    aktif, dan demokratis melalui pengawasan program kerja, evaluasi kegiatan,
                    serta komunikasi yang terbuka antara mahasiswa dan organisasi kemahasiswaan.
                </p>

                <p class="text-gray-300 leading-relaxed text-lg">
                    Dengan semangat kebersamaan dan tanggung jawab, DPM hadir sebagai ruang
                    diskusi, kritik, dan solusi demi terciptanya kehidupan kampus yang lebih
                    progresif dan berintegritas.
                </p>

            </div>

        </div>

    </div>

</section>


{{-- VISI MISI --}}
<section id="visi-misi" class="relative py-24 bg-black text-white overflow-hidden">

    <div class="absolute left-0 bottom-0 w-96 h-96 bg-cyan-500/10 rounded-full blur-3xl"></div>

    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-16">

            <p class="uppercase tracking-[4px] text-sky-300 font-semibold mb-3">
                Visi & Misi
            </p>

            <h2 class="text-4xl font-extrabold text-white">
                Arah dan Tujuan DPM
            </h2>

        </div>

        <div class="grid lg:grid-cols-2 gap-10">

            {{-- VISI --}}
            <div class="bg-gradient-to-br from-zinc-900 to-black rounded-[35px] shadow-2xl p-10 border border-white/10 hover:border-sky-500/40 transition duration-300">

                <div class="w-16 h-16 rounded-2xl bg-sky-500/20 flex items-center justify-center mb-6">

                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="w-8 h-8 text-sky-300"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke="currentColor">

                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14m-6 0l-4.553 2.276A1 1 0 013 15.382V8.618a1 1 0 011.447-.894L9 10m0 0V6m6 4V6m-6 8v4m6-4v4"/>
                    </svg>

                </div>

                <h3 class="text-3xl font-bold text-white mb-5">
                    Visi
                </h3>

                <p class="text-gray-300 text-lg leading-relaxed">
                    Menjadikan Dewan Perwakilan Mahasiswa sebagai lembaga legislatif
                    mahasiswa yang aspiratif, kritis, transparan, dan berintegritas
                    dalam mewujudkan kehidupan organisasi kemahasiswaan yang demokratis
                    dan berkualitas.
                </p>

            </div>

            {{-- MISI --}}
            <div class="bg-gradient-to-br from-zinc-900 to-black rounded-[35px] shadow-2xl p-10 border border-white/10 hover:border-cyan-500/40 transition duration-300">

                <div class="w-16 h-16 rounded-2xl bg-cyan-500/20 flex items-center justify-center mb-6">

                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="w-8 h-8 text-cyan-300"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke="currentColor">

                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M9 12h6m-6 4h6M7 4h10a2 2 0 012 2v12a2 2 0 01-2 2H7a2 2 0 01-2-2V6a2 2 0 012-2z"/>
                    </svg>

                </div>

                <h3 class="text-3xl font-bold text-white mb-5">
                    Misi
                </h3>

                <ul class="space-y-4 text-gray-300 text-lg">

                    <li class="flex gap-3">
                        <span class="text-sky-300 font-bold">•</span>
                        Menampung dan menyampaikan aspirasi mahasiswa secara terbuka dan bertanggung jawab.
                    </li>

                    <li class="flex gap-3">
                        <span class="text-sky-300 font-bold">•</span>
                        Mengawasi jalannya organisasi kemahasiswaan agar berjalan sesuai aturan dan tujuan bersama.
                    </li>

                    <li class="flex gap-3">
                        <span class="text-sky-300 font-bold">•</span>
                        Membangun budaya demokrasi yang aktif, kritis, dan solutif di lingkungan kampus.
                    </li>

                    <li class="flex gap-3">
                        <span class="text-sky-300 font-bold">•</span>
                        Menjalin komunikasi yang baik antara mahasiswa, organisasi, dan pihak kampus.
                    </li>

                    <li class="flex gap-3">
                        <span class="text-sky-300 font-bold">•</span>
                        Meningkatkan profesionalisme dan integritas dalam menjalankan tugas kelembagaan.
                    </li>

                </ul>

            </div>

        </div>

       </div>

</section>

{{-- STRUKTUR KEPENGURUSAN --}}
<section id="kepengurusan"
         class="relative pt-24 pb-0 bg-gradient-to-b from-zinc-950 via-black to-black text-white overflow-hidden">
    {{-- BACKGROUND EFFECT --}}
    <div class="absolute top-0 left-0 w-96 h-96 bg-sky-500/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-cyan-500/10 rounded-full blur-3xl"></div>

    <div class="relative max-w-7xl mx-auto px-6">

        {{-- HEADER --}}
        <div class="text-center mb-16">

            <p class="uppercase tracking-[4px] text-sky-300 font-semibold mb-3">
                Struktur Organisasi
            </p>

            <h2 class="text-4xl font-extrabold text-white mb-4">
                Kepengurusan DPM
            </h2>

            <p class="text-gray-400 max-w-2xl mx-auto text-lg">
                Struktur kepengurusan Dewan Perwakilan Mahasiswa yang menjalankan
                fungsi legislasi, pengawasan, serta penyaluran aspirasi mahasiswa.
            </p>

        </div>


        {{-- PIMPINAN INTI --}}
        <div class="grid md:grid-cols-3 gap-8 mb-16">

            {{-- KETUA --}}
            <div class="bg-gradient-to-br from-zinc-900 to-black border border-sky-500/20 rounded-[30px] p-8 text-center shadow-2xl hover:-translate-y-2 hover:border-sky-400 transition duration-300">

                <div class="w-24 h-24 mx-auto rounded-full bg-sky-500/20 border border-sky-500/20 flex items-center justify-center text-3xl font-bold mb-6 text-sky-300">
                    A
                </div>

                <p class="text-sky-300 uppercase tracking-[3px] text-sm mb-2">
                    Ketua
                </p>

                <h3 class="text-2xl font-bold">
                    Ahmad Dian Kamal
                </h3>

            </div>


            {{-- SEKRETARIS --}}
            <div class="bg-gradient-to-br from-zinc-900 to-black border border-cyan-500/20 rounded-[30px] p-8 text-center shadow-2xl hover:-translate-y-2 hover:border-cyan-400 transition duration-300">

                <div class="w-24 h-24 mx-auto rounded-full bg-cyan-500/20 border border-cyan-500/20 flex items-center justify-center text-3xl font-bold mb-6 text-cyan-300">
                    M
                </div>

                <p class="text-cyan-300 uppercase tracking-[3px] text-sm mb-2">
                    Sekretaris Umum
                </p>

                <h3 class="text-2xl font-bold">
                    M. Mauludiy Efendi
                </h3>

            </div>


            {{-- BENDAHARA --}}
            <div class="bg-gradient-to-br from-zinc-900 to-black border border-sky-500/20 rounded-[30px] p-8 text-center shadow-2xl hover:-translate-y-2 hover:border-sky-400 transition duration-300">

                <div class="w-24 h-24 mx-auto rounded-full bg-sky-500/20 border border-sky-500/20 flex items-center justify-center text-3xl font-bold mb-6 text-sky-300">
                    M
                </div>

                <p class="text-sky-300 uppercase tracking-[3px] text-sm mb-2">
                    Bendahara Umum
                </p>

                <h3 class="text-2xl font-bold">
                    M. Rizki Setio Budi
                </h3>

            </div>

        </div>


        {{-- KOMISI --}}
        <div class="grid lg:grid-cols-2 gap-8 pb-0">

            {{-- KOMISI A --}}
            <div class="bg-gradient-to-br from-zinc-900 to-black border border-white/10 rounded-[30px] p-8 shadow-xl hover:border-sky-500/40 transition duration-300">

                <div class="flex items-center gap-4 mb-6">

                    <div class="w-14 h-14 rounded-2xl bg-sky-500/20 flex items-center justify-center text-xl font-bold text-sky-300">
                        A
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold">
                            Komisi A
                        </h3>

                        <p class="text-gray-400">
                            Bidang Peraturan dan Administrasi Organisasi
                        </p>
                    </div>

                </div>

                <ul class="space-y-4 text-lg text-gray-300">

                    <li class="flex items-center gap-3">
                        <span class="w-2 h-2 rounded-full bg-sky-400"></span>
                        Ahmad Reza Asari
                    </li>

                    <li class="flex items-center gap-3">
                        <span class="w-2 h-2 rounded-full bg-sky-400"></span>
                        Aldiyofani Azzahwa
                    </li>

                </ul>

            </div>


            {{-- KOMISI B --}}
            <div class="bg-gradient-to-br from-zinc-900 to-black border border-white/10 rounded-[30px] p-8 shadow-xl hover:border-cyan-500/40 transition duration-300">

                <div class="flex items-center gap-4 mb-6">

                    <div class="w-14 h-14 rounded-2xl bg-cyan-500/20 flex items-center justify-center text-xl font-bold text-cyan-300">
                        B
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold">
                            Komisi B
                        </h3>

                        <p class="text-gray-400">
                            Bidang Penyerapan dan Penyaluran Aspirasi Mahasiswa
                        </p>
                    </div>

                </div>

                <ul class="space-y-4 text-lg text-gray-300">

                    <li class="flex items-center gap-3">
                        <span class="w-2 h-2 rounded-full bg-cyan-400"></span>
                        Alfin Nur Hidayatulloh
                    </li>

                    <li class="flex items-center gap-3">
                        <span class="w-2 h-2 rounded-full bg-cyan-400"></span>
                        Brilian Hariputra
                    </li>

                </ul>

            </div>


            {{-- KOMISI C --}}
            <div class="bg-gradient-to-br from-zinc-900 to-black border border-white/10 rounded-[30px] p-8 shadow-xl hover:border-sky-500/40 transition duration-300">

                <div class="flex items-center gap-4 mb-6">

                    <div class="w-14 h-14 rounded-2xl bg-sky-500/20 flex items-center justify-center text-xl font-bold text-sky-300">
                        C
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold">
                            Komisi C
                        </h3>

                        <p class="text-gray-400">
                            Bidang Budgeting dan Kontroling ORMAWA
                        </p>
                    </div>

                </div>

                <ul class="space-y-4 text-lg text-gray-300">

                    <li class="flex items-center gap-3">
                        <span class="w-2 h-2 rounded-full bg-sky-400"></span>
                        Akhmad Muqoddim Fahmi Ilmi
                    </li>

                    <li class="flex items-center gap-3">
                        <span class="w-2 h-2 rounded-full bg-sky-400"></span>
                        M. Badrus Sholeh
                    </li>

                </ul>

            </div>


            {{-- KOMISI D --}}
            <div class="bg-gradient-to-br from-zinc-900 to-black border border-white/10 rounded-[30px] p-8 shadow-xl hover:border-cyan-500/40 transition duration-300">

                <div class="flex items-center gap-4 mb-6">

                    <div class="w-14 h-14 rounded-2xl bg-cyan-500/20 flex items-center justify-center text-xl font-bold text-cyan-300">
                        D
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold">
                            Komisi D
                        </h3>

                        <p class="text-gray-400">
                            Bidang Komunikasi Antar Lembaga
                        </p>
                    </div>

                </div>

                <ul class="space-y-4 text-lg text-gray-300">

                    <li class="flex items-center gap-3">
                        <span class="w-2 h-2 rounded-full bg-cyan-400"></span>
                        Mardion Eka Candra
                    </li>

                    <li class="flex items-center gap-3">
                        <span class="w-2 h-2 rounded-full bg-cyan-400"></span>
                        Muhammad Idhhar Farhan
                    </li>

                </ul>

            </div>

        </div>

    </div>

</section>
@endsection