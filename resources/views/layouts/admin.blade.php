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

        <h1 class="text-2xl font-bold mb-10">
            ORMAWA ADMIN
        </h1>

        <nav class="space-y-3">

            <a href="{{ route('laporan') }}"
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


            

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button class="w-full text-left px-4 py-3 rounded-lg hover:bg-red-600">
                    Logout
                </button>
            </form>

        </nav>

    </aside>

    <!-- CONTENT -->
    <main class="flex-1 p-10">

        @yield('content')

    </main>

</div>

</body>
</html>