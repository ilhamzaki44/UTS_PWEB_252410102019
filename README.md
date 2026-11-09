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

---

<img width="1364" height="639" alt="login web" src="https://github.com/user-attachments/assets/0da77644-b48b-46fb-a0f5-0a78dbb626ca" />
<img width="1365" height="638" alt="dasboard web" src="https://github.com/user-attachments/assets/984ed3b5-d0fc-4e8b-ad5f-8557a4179830" />
<img width="1365" height="638" alt="pengelolaan web" src="https://github.com/user-attachments/assets/3882fd9f-b032-4255-95c7-d9ff7ced7454" />
<img width="1365" height="637" alt="profil web" src="https://github.com/user-attachments/assets/f6d7670d-fcf7-4001-a7ff-cb657b580538" />
