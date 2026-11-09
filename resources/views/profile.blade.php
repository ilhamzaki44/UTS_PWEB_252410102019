@extends('layouts.app')
@section('title', 'Profil Pengguna')
@section('content')
<div class="max-w-2xl mx-auto bg-white rounded-2xl shadow-xl overflow-hidden border border-slate-100">
    <!-- Header Banner Profil Berwarna -->
    <div class="bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-500 h-32 relative"></div>

    <div class="px-8 pb-8 relative">
        <!-- Avatar Bulat Gradien -->
        <div class="-mt-14 mb-4 flex justify-between items-end">
            <div class="w-24 h-24 bg-gradient-to-tr from-indigo-500 via-purple-500 to-pink-500 text-white rounded-full flex items-center justify-center font-black text-3xl shadow-xl border-4 border-white uppercase">
                {{ substr($userProfile['nama_lengkap'], 0, 2) }}
            </div>
            <span class="bg-indigo-100 text-indigo-700 text-xs font-bold px-3 py-1 rounded-full border border-indigo-200">
                {{ $userProfile['role'] }}
            </span>
        </div>

        <!-- Detail Informasi Profil -->
        <h1 class="text-2xl font-extrabold text-slate-800">{{ $userProfile['nama_lengkap'] }}</h1>
        <p class="text-slate-400 text-xs mb-6">Mahasiswa Aktif Fakultas Ilmu Komputer</p>

        <div class="space-y-4 text-sm">
            <div class="flex justify-between items-center p-3 bg-slate-50 rounded-xl">
                <span class="text-slate-500 font-medium">Email Student</span>
                <span class="font-bold text-indigo-600">{{ $userProfile['email'] }}</span>
            </div>
            <div class="flex justify-between items-center p-3 bg-slate-50 rounded-xl">
                <span class="text-slate-500 font-medium">Program Studi</span>
                <span class="font-bold text-slate-800">{{ $userProfile['prodi'] }}</span>
            </div>
            <div class="flex justify-between items-center p-3 bg-slate-50 rounded-xl">
                <span class="text-slate-500 font-medium">Angkatan</span>
                <span class="font-bold text-slate-800">{{ $userProfile['angkatan'] }}</span>
            </div>
        </div>
    </div>
</div>
@endsection
