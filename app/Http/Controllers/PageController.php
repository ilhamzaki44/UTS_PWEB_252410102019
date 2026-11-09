<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function processLogin(Request $request)
    {
        $username = $request->input('username', 'Mahasiswa');
        return redirect()->route('dashboard', ['username' => $username]);
    }

    public function showDashboard(Request $request)
    {
        $username = $request->query('username', 'Guest');
        $stats = ['total_tugas' => 12, 'selesai' => 8, 'pending' => 4];
        return view('dashboard', compact('username', 'stats'));
    }

    public function showPengelolaan(Request $request)
    {
        $username = $request->query('username', 'Guest');
        $daftarTugas = [
            ['id' => 1, 'judul' => 'UTS Pemrograman Web', 'matkul' => 'Pemrograman Web', 'deadline' => '12 November 2026', 'status' => 'Selesai'],
            ['id' => 2, 'judul' => 'Laporan Praktikum Sistem Operasi', 'matkul' => 'Sistem Operasi', 'deadline' => '15 November 2026', 'status' => 'Pending'],
            ['id' => 3, 'judul' => 'Proyek Akhir Basis Data', 'matkul' => 'Basis Data', 'deadline' => '20 November 2026', 'status' => 'Pending'],
            ['id' => 4, 'judul' => 'Desain UI/UX Mobile App', 'matkul' => 'UI/UX', 'deadline' => '25 November 2026', 'status' => 'Selesai']
        ];
        return view('pengelolaan', compact('username', 'daftarTugas'));
    }

    public function showProfile(Request $request)
    {
        $username = $request->query('username', 'Guest');
        $userProfile = [
            'nama_lengkap' => $username,
            'role' => 'Mahasiswa Aktif',
            'email' => strtolower(str_replace(' ', '', $username)) . '@student.ac.id',
            'prodi' => 'Teknologi Informasi',
            'angkatan' => '2025'
        ];
        return view('profile', compact('username', 'userProfile'));
    }
}
