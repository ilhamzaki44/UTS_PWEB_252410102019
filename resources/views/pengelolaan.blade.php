@extends('layouts.app')
@section('title', 'Pengelolaan Tugas')
@section('content')
<div class="bg-white rounded-2xl shadow-xl border border-slate-100 overflow-hidden">
    <!-- Header Berwarna -->
    <div class="bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-500 p-6 text-white flex justify-between items-center">
        <div>
            <h1 class="text-2xl font-bold">Daftar Pengelolaan Tugas</h1>
            <p class="text-xs text-indigo-100 mt-1">Menampilkan seluruh daftar tugas milik <span class="font-semibold underline">{{ $username }}</span></p>
        </div>
        <button class="bg-white text-indigo-600 hover:bg-slate-100 transition text-xs font-bold px-4 py-2.5 rounded-xl shadow">
            + Tambah Tugas
        </button>
    </div>

    <!-- Tabel Berwarna -->
    <div class="p-6 overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-slate-100 text-slate-700 text-xs font-bold uppercase">
                    <th class="p-4 rounded-l-xl">No</th>
                    <th class="p-4">Judul Tugas</th>
                    <th class="p-4">Mata Kuliah</th>
                    <th class="p-4">Deadline</th>
                    <th class="p-4 rounded-r-xl">Status</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100 text-sm">
                @foreach ($daftarTugas as $index => $tugas)
                <tr class="hover:bg-indigo-50/50 transition">
                    <td class="p-4 font-bold text-slate-400">{{ $index + 1 }}</td>
                    <td class="p-4 font-bold text-slate-800">{{ $tugas['judul'] }}</td>
                    <td class="p-4 text-slate-600"><span class="bg-slate-100 px-3 py-1 rounded-md font-medium text-xs">{{ $tugas['matkul'] }}</span></td>
                    <td class="p-4 text-slate-600 font-medium">{{ $tugas['deadline'] }}</td>
                    <td class="p-4">
                        @if ($tugas['status'] === 'Selesai')
                            <span class="bg-emerald-100 text-emerald-800 border border-emerald-300 text-xs font-extrabold px-3 py-1 rounded-full shadow-sm">✓ Selesai</span>
                        @else
                            <span class="bg-amber-100 text-amber-800 border border-amber-300 text-xs font-extrabold px-3 py-1 rounded-full shadow-sm">⌛ Pending</span>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
