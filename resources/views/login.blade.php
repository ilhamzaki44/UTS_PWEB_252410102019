<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - TaskManager 2026</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-indigo-600 via-purple-600 to-pink-500 min-h-screen flex items-center justify-center p-4">
    <div class="bg-white/95 backdrop-blur-md p-8 rounded-2xl shadow-2xl w-full max-w-md border border-white/20">
        <!-- Header / Logo Badge -->
        <div class="text-center mb-8">
            <div class="w-16 h-16 bg-gradient-to-tr from-indigo-500 to-pink-500 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg shadow-indigo-500/30 transform -rotate-3">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 002 2h2a2 2 0 002-2m-6 9l2 2 4-4"></path>
                </svg>
            </div>
            <h1 class="text-3xl font-extrabold text-slate-800 tracking-tight">Selamat Datang</h1>
            <p class="text-slate-500 text-sm mt-1">Masukan username Anda untuk melanjutkan</p>
        </div>

        <!-- Form Login -->
        <form action="{{ route('login.process') }}" method="POST" class="space-y-5">
            @csrf
            <div>
                <label for="username" class="block text-sm font-semibold text-slate-700 mb-2">Username</label>
                <div class="relative">
                    <input type="text" id="username" name="username" required placeholder="Contoh: ilham"
                        class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:bg-white focus:outline-none transition-all duration-200">
                </div>
            </div>

            <div>
                <label for="password" class="block text-sm font-semibold text-slate-700 mb-2">Password</label>
                <div class="relative">
                    <input type="password" id="password" name="password" required placeholder="••••••••"
                        class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:bg-white focus:outline-none transition-all duration-200">
                </div>
            </div>

            <button type="submit"
                class="w-full bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-500 text-white font-bold py-3.5 px-4 rounded-xl shadow-lg shadow-indigo-500/30 hover:shadow-indigo-500/50 hover:scale-[1.01] active:scale-[0.99] transition-all duration-200">
                Masuk ke Dashboard
            </button>
        </form>
    </div>
</body>
</html>
