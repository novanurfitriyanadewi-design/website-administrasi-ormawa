<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin ORMAWA</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

<div class="flex min-h-screen">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-sky-800 text-white p-6">

        <!-- LOGO -->
        <div class="flex items-center mb-6">
            <img src="{{ asset('images/dpm.png') }}" 
                 alt="Logo DPM" 
                 class="w-12 h-12 mr-3 rounded-full object-cover">
            <h1 class="text-2xl font-bold">
                ORMAWA SAINTEK
            </h1>
        </div>

        <p class="text-sm text-sky-200 mb-8">
            Login sebagai: {{ auth()->user()->role }}
        </p>

        <nav class="space-y-3">

            {{-- MENU KHUSUS DPM --}}
            @if(auth()->user()->role == 'dpm')

                <a href="{{ route('dashboard') }}"
                   class="block px-4 py-3 rounded-lg hover:bg-sky-700">
                     Dashboard
                </a>

                <a href="{{ route('surat-masuk.index') }}"
                   class="block px-4 py-3 rounded-lg hover:bg-sky-700">
                     Surat Masuk
                </a>

                <a href="{{ route('surat-keluar.index') }}"
                   class="block px-4 py-3 rounded-lg hover:bg-sky-700">
                     Surat Keluar
                </a>

                <a href="{{ route('proposal.index') }}"
                   class="block px-4 py-3 rounded-lg hover:bg-sky-700">
                    Pengajuan Proposal
                </a>

                <a href="{{ route('verifikasi.kandidat') }}"
                    class="block px-4 py-3 rounded-lg hover:bg-sky-700">
                    Verifikasi Kandidat
                </a>

            @endif

            {{-- MENU KHUSUS BEM DAN HIMASI --}}
            @if(in_array(auth()->user()->role, ['bem', 'himasi']))

                <a href="{{ route('proposal.index') }}"
                   class="block px-4 py-3 rounded-lg hover:bg-sky-700">
                    Pengajuan Proposal
                </a>

                 <a href="{{ route('kandidat.index') }}"
                    class="block px-4 py-3 rounded-lg hover:bg-sky-700">
                     Calon Ketua
                 </a>

            @endif

            {{-- LOGOUT --}}
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                        class="w-full text-left px-4 py-3 rounded-lg hover:bg-red-600">
                    Logout
                </button>
            </form>

        </nav>

    </aside>

    <!-- CONTENT -->
    <main class="flex-1 p-10">

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')

    </main>

</div>

</body>
</html>
