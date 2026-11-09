# TaskManager 2026 - UTS Pemrograman Web

Aplikasi Web Manajemen Tugas Akademik Mahasiswa berbasis **Laravel (MVC)** dengan tampilan modern dan responsif menggunakan **Tailwind CSS**.

---

## Fitur Utama
- **Autentikasi Sederhana (Login)**: Form login interaktif dengan pengiriman data *username* secara dinamis.
- **Dashboard Statistik**: Menampilkan ringkasan total tugas, tugas selesai, dan pending.
- **Pengelolaan Tugas**: Tabel interaktif daftar tugas akademik menggunakan Blade Directive (`@foreach` & `@if`).
- **Profil Pengguna**: Halaman informasi mahasiswa dinamis yang menyesuaikan dengan data *login*.

---

## Teknologi & Stack
- **Framework**: Laravel 11 / 10
- **Architecture**: Model-View-Controller (MVC)
- **Templating Engine**: Blade (Layouting, Components, Directives)
- **Styling**: Tailwind CSS (CDN)

---

## Struktur File Utama (9 Core Files)
- `routes/web.php` - Routing aplikasi
- `app/Http/Controllers/PageController.php` - Pengolah logika & data dinamis
- `resources/views/layouts/app.blade.php` - Layout utama aplikasi
- `resources/views/components/navbar.blade.php` - Komponen navigasi
- `resources/views/components/footer.blade.php` - Komponen footer
- `resources/views/login.blade.php` - Halaman login
- `resources/views/dashboard.blade.php` - Halaman dashboard statistik
- `resources/views/pengelolaan.blade.php` - Halaman pengelolaan tugas
- `resources/views/profile.blade.php` - Halaman profil mahasiswa
