@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
<div class="space-y-6">
    <!-- Banner Banner Berwarna -->
    <div class="bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-500 p-8 rounded-2xl shadow-xl text-white relative overflow-hidden">
        <div class="relative z-10">
            <h1 class="text-3xl font-extrabold tracking-tight">Halo, {{ $username }}! </h1>
            <p class="text-indigo-100 mt-2 text-sm sm:text-base">Selamat datang kembali di panel pengelolaan tugas akademik Anda hari ini.</p>
        </div>
        <div class="absolute -right-10 -bottom-10 w-48 h-48 bg-white/10 rounded-full blur-2xl"></div>
    </div>

    <!-- Cards Statisik Berwarna -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-gradient-to-br from-indigo-500 to-indigo-700 text-white p-6 rounded-2xl shadow-lg border border-indigo-400/30">
            <div class="flex items-center justify-between">
                <span class="text-xs font-bold uppercase tracking-wider text-indigo-100">Total Tugas</span>
                <span class="p-2 bg-indigo-400/30 rounded-lg">📋</span>
            </div>
            <p class="text-4xl font-black mt-3">{{ $stats['total_tugas'] }}</p>
        </div>

        <div class="bg-gradient-to-br from-emerald-500 to-teal-700 text-white p-6 rounded-2xl shadow-lg border border-emerald-400/30">
            <div class="flex items-center justify-between">
                <span class="text-xs font-bold uppercase tracking-wider text-emerald-100">Selesai</span>
                <span class="p-2 bg-emerald-400/30 rounded-lg">✅</span>
            </div>
            <p class="text-4xl font-black mt-3">{{ $stats['selesai'] }}</p>
        </div>

        <div class="bg-gradient-to-br from-amber-500 to-orange-600 text-white p-6 rounded-2xl shadow-lg border border-amber-400/30">
            <div class="flex items-center justify-between">
                <span class="text-xs font-bold uppercase tracking-wider text-amber-100">Pending</span>
                <span class="p-2 bg-amber-400/30 rounded-lg">⏳</span>
            </div>
            <p class="text-4xl font-black mt-3">{{ $stats['pending'] }}</p>
        </div>
    </div>
</div>
@endsection
