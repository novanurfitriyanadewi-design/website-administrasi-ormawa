<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin Ormawa</title>

    @vite('resources/css/app.css')

    <!-- Google reCAPTCHA -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body class="min-h-screen flex items-center justify-center px-4 relative overflow-hidden bg-gradient-to-br from-blue-900 via-sky-700 to-slate-900">

    {{-- Background dekorasi --}}
    <div class="absolute inset-0 pointer-events-none bg-[repeating-linear-gradient(0deg,transparent,transparent_39px,rgba(255,255,255,.025)_39px,rgba(255,255,255,.025)_40px),repeating-linear-gradient(90deg,transparent,transparent_39px,rgba(255,255,255,.025)_39px,rgba(255,255,255,.025)_40px)]"></div>

    <div class="absolute -top-20 -right-16 w-80 h-80 rounded-full opacity-20 bg-blue-600 blur-3xl"></div>
    <div class="absolute -bottom-16 -left-10 w-56 h-56 rounded-full opacity-15 bg-sky-400 blur-3xl"></div>

    {{-- Card --}}
    <div class="relative z-10 w-full max-w-sm bg-white rounded-2xl shadow-2xl overflow-x-hidden">

        {{-- Header --}}
        <div class="px-8 py-6 bg-blue-900 relative">
            <div class="flex items-center gap-3">
                <div class="w-11 h-11 rounded-xl flex items-center justify-center text-white font-bold text-lg bg-blue-600">
                    O
                </div>
                <div>
                    <div class="font-bold text-white text-base">
                        Ormawa Saintek
                    </div>
                    <div class="text-[10px] text-white/60">
                        Portal Administrasi Organisasi Mahasiswa
                    </div>
                </div>
            </div>
        </div>

        {{-- Body --}}
        <div class="px-8 py-7">
            <h1 class="text-lg font-bold text-slate-900">
                Masuk ke Akun
            </h1>

            <p class="text-xs text-slate-400 mb-6">
                Gunakan kredensial admin Anda untuk melanjutkan
            </p>

            <form method="POST" action="{{ route('login') }}" class="space-y-4">
                @csrf

                {{-- Email --}}
                <div>
                    <label for="email"
                        class="block text-xs font-semibold text-gray-700 mb-1.5">
                        Email
                    </label>

                    <input
                        id="email"
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="admin@saintek.ac.id"
                        required
                        autofocus
                        autocomplete="username"
                        class="w-full h-11 px-4 text-sm bg-gray-50 border border-gray-200 rounded-lg
                               focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition">

                    <x-input-error :messages="$errors->get('email')" class="mt-1.5" />
                </div>

                {{-- Password --}}
                <div>
                    <label for="password"
                        class="block text-xs font-semibold text-gray-700 mb-1.5">
                        Password
                    </label>

                    <div class="relative">
                        <input
                            id="password"
                            type="password"
                            name="password"
                            placeholder="Masukkan password"
                            required
                            autocomplete="current-password"
                            class="w-full h-11 px-4 pr-10 text-sm bg-gray-50 border border-gray-200 rounded-lg
                                   focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition">

                        <button
                            type="button"
                            id="togglePw"
                            class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600">
                            👁
                        </button>
                    </div>

                    <x-input-error :messages="$errors->get('password')" class="mt-1.5" />
                </div>

                {{-- Google reCAPTCHA --}}
                <div class="flex justify-center scale-90 sm:scale-100 -mx-2">
                    <div
                        class="g-recaptcha"
                        data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"
                        data-theme="light">
                    </div>
                </div>

                @error('captcha')
                    <p class="text-red-500 text-xs text-center -mt-2">
                        {{ $message }}
                    </p>
                @enderror

                {{-- Remember + Forgot --}}
                <div class="flex items-center justify-between">
                    <label for="remember_me"
                        class="flex items-center gap-2 cursor-pointer">

                        <input
                            id="remember_me"
                            type="checkbox"
                            name="remember"
                            class="w-4 h-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">

                        <span class="text-xs text-gray-500">
                            Ingat saya
                        </span>
                    </label>

                    <a href="{{ route('password.request') }}"
                       class="text-xs text-blue-600 hover:text-blue-800 font-medium">
                        Lupa password?
                    </a>
                </div>

                {{-- Submit --}}
                <button
                    type="submit"
                    class="w-full h-11 bg-blue-600 hover:bg-blue-800 text-white text-sm font-bold rounded-lg transition active:scale-95">

                    Masuk
                </button>
            </form>
        </div>

        {{-- Footer --}}
        <div class="border-t border-gray-100 px-8 py-3.5 text-center text-xs text-gray-400">
            Butuh bantuan?
            <a href="mailto:ormawa@saintek.ac.id"
               class="text-blue-600 font-semibold hover:text-blue-800">
                Hubungi admin
            </a>
        </div>
    </div>

    <script>
        const pw = document.getElementById('password');
        const btn = document.getElementById('togglePw');

        btn?.addEventListener('click', () => {
            pw.type = pw.type === 'password'
                ? 'text'
                : 'password';
        });
    </script>

</body>
</html>