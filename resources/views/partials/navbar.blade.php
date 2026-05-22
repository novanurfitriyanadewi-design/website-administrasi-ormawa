<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar ORMAWA SAINTEK</title>

  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

<!-- NAVBAR -->
<nav class="fixed top-0 left-0 w-full z-50 bg-sky-700/90 backdrop-blur-md text-white shadow">
  <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

    <!-- LOGO -->
    <a href="/" class="font-bold text-lg">
      ORMAWA SAINTEK
    </a>

    <!-- MENU -->
    <div class="flex gap-6 text-sm items-center">

      <a href="/" class="hover:text-yellow-300 transition">Beranda</a>

      <a href="/tentang" class="hover:text-yellow-300 transition">
        Tentang
      </a>

      <!-- ORGANISASI DROPDOWN -->
      <div x-data="{ open: false }" class="relative z-50">

        <button @click="open = !open"
                class="hover:text-yellow-300 transition">
          Organisasi ▾
        </button>

        <div x-show="open"
             @click.away="open = false"
             class="absolute left-0 top-full bg-white text-black mt-2 rounded-xl shadow-xl min-w-[180px] overflow-hidden z-50">

          <a href="{{ route('bem') }}"
             class="block px-5 py-3 hover:bg-sky-100 transition">
             BEM
          </a>

          <a href="{{ route('dpm') }}"
             class="block px-5 py-3 hover:bg-sky-100 transition">
             DPM
          </a>

          <a href="{{ route('himasi') }}"
             class="block px-5 py-3 hover:bg-sky-100 transition">
             HIMASI
          </a>

        </div>
      </div>

      <!-- SURAT DROPDOWN -->
      <div x-data="{ open: false }" class="relative z-50">

        <button @click="open = !open"
                class="hover:text-yellow-300 transition">
          Surat ▾
        </button>

        <div x-show="open"
             @click.away="open = false"
             class="absolute left-0 top-full bg-white text-black mt-2 rounded-xl shadow-xl min-w-[180px] overflow-hidden z-50">

          <a href="/surat-masuk"
             class="block px-5 py-3 hover:bg-sky-100 transition">
             Surat Masuk
          </a>

          <a href="/surat-keluar"
             class="block px-5 py-3 hover:bg-sky-100 transition">
             Surat Keluar
          </a>

        </div>
      </div>

      <!-- PROGRAM KERJA -->
      <a href="/program"
         class="hover:text-yellow-300 transition">
         Program Kerja
      </a>

      <!-- LAPORAN -->
      <a href="/laporan"
         class="hover:text-yellow-300 transition">
         Laporan
      </a>

      <!-- LOGIN -->
      <a href="/login"
         class="bg-yellow-400 hover:bg-yellow-300 text-black px-4 py-2 rounded-lg font-semibold transition">
        Login
      </a>

    </div>
  </div>
</nav>

</body>
</html>