# GD6_2762

## Catatan artisan serve dan composer run dev
Modul ini cukup memakai php artisan serve karena CSS dan gambar dipanggil langsung dari folder public, dan Bootstrap diambil dari CDN, sehingga tidak ada file yang perlu dikompilasi oleh Vite.

## Versi Tools
PHP: 8.5
Composer: 2.8
Laravel Installer: 5.11

## Jawaban pertanyaan seeder
Karena perintah fresh itu menghapus semua tabel dulu sebelum bikin dan ngisi ulang datanya

## Cara Menjalankan Proyek Tiketwar
1. Nyalakan Apache dan MySQL di XAMPP, lalu buat database tiketwar di phpMyAdmin.
2. Dari folder repository, masuk ke folder proyek: `cd tiketwar`
3. `composer install`
4. Salin `.env.example` menjadi `.env` (Windows: `copy .env.example .env`).
5. Ubah bagian `DB_` di `.env` sesuai bab 4, lalu `php artisan key:generate`
6. `php artisan migrate:fresh --seed`
7. `php artisan serve`

## Jawaban Latihan Debugging
1. Koneksi ditolak: Penyebabnya karena belum membuat database `tiketwar` di phpMyAdmin, atau lupa mengubah pengaturan `DB_CONNECTION=mysql` dan `DB_DATABASE=tiketwar` di file `.env`.
2. Model belum punya $fillable: Terjadi MassAssignmentException karena Laravel mencegah pengisian banyak kolom sekaligus untuk keamanan. Diperbaiki dengan menambahkan `protected $fillable = ['kolom1', 'kolom2'];` di model `Konser`. Jika ada satu kolom yang tidak didaftarkan (misal 'tanggal'), datanya akan dibuang diam-diam dan tidak tersimpan.
3. 419 Page Expired: Penyebabnya adalah lupa menambahkan direktif `@csrf` di dalam form HTML, sehingga Laravel menolak pengiriman data untuk mencegah serangan Cross-Site Request Forgery (CSRF).
4. 405 Method Not Allowed:Penyebabnya adalah lupa menyisipkan direktif `@method('PUT')` di dalam form edit, sehingga form HTML secara *default* mengirimkannya sebagai `POST` padahal *route*-nya meminta `PUT`.