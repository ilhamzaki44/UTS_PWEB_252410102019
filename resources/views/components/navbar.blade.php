<nav class="bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-500 text-white shadow-lg sticky top-0 z-50">
    <div class="container mx-auto px-4 flex justify-between items-center h-16">
        <a href="{{ route('dashboard', ['username' => request('username')]) }}" class="font-extrabold text-xl tracking-tight flex items-center gap-2">
            <span class="bg-white/20 p-1.5 rounded-lg backdrop-blur-sm">⚡</span>
            TaskManager<span class="text-pink-200">2026</span>
        </a>
        <div class="flex space-x-6 items-center text-sm font-semibold">
            <a href="{{ route('dashboard', ['username' => request('username')]) }}" class="hover:text-pink-200 transition-colors">Dashboard</a>
            <a href="{{ route('pengelolaan', ['username' => request('username')]) }}" class="hover:text-pink-200 transition-colors">Pengelolaan</a>
            <a href="{{ route('profile', ['username' => request('username')]) }}" class="hover:text-pink-200 transition-colors">Profil</a>
            <a href="{{ route('login') }}" class="bg-white/20 hover:bg-white/30 backdrop-blur-sm px-4 py-1.5 rounded-full text-xs transition-all shadow">Logout</a>
        </div>
    </div>
</nav>
