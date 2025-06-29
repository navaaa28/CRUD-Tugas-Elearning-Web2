<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

# Aplikasi CRUD Data Mahasiswa

Aplikasi web sederhana untuk mengelola data mahasiswa dengan fitur Create, Read, Update, dan Delete (CRUD) yang dibangun menggunakan framework Laravel.

## 🎯 Fitur Utama

- **Create**: Menambah data mahasiswa baru
- **Read**: Menampilkan daftar dan detail mahasiswa
- **Update**: Mengubah data mahasiswa yang sudah ada
- **Delete**: Menghapus data mahasiswa
- **Validasi Form**: Validasi input data yang lengkap
- **Responsive Design**: Tampilan yang responsif menggunakan Bootstrap 5
- **Pagination**: Pagination untuk daftar mahasiswa
- **Search & Filter**: Pencarian dan filter data (dapat dikembangkan lebih lanjut)

## 🛠️ Teknologi yang Digunakan

- **Backend**: Laravel 12.x
- **Frontend**: Bootstrap 5, Font Awesome
- **Database**: SQLite (default), MySQL/PostgreSQL (opsional)
- **PHP**: 8.2+

## 📋 Struktur Database

Tabel `mahasiswas` memiliki kolom:
- `id` (Primary Key)
- `nim` (Unique)
- `nama`
- `jurusan`
- `alamat`
- `email` (Unique)
- `telepon`
- `created_at`
- `updated_at`

## 🚀 Cara Menjalankan Aplikasi

### Prerequisites
- PHP 8.2 atau lebih tinggi
- Composer
- Laravel CLI (opsional)

### Langkah Instalasi

1. **Clone atau download project**
   ```bash
   git clone <repository-url>
   cd crud-mahasiswa
   ```

2. **Install dependencies**
   ```bash
   composer install
   ```

3. **Setup environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Setup database**
   ```bash
   # Untuk SQLite (default)
   touch database/database.sqlite
   
   # Atau untuk MySQL/PostgreSQL, edit file .env
   ```

5. **Jalankan migration**
   ```bash
   php artisan migrate
   ```

6. **Seed data sample (opsional)**
   ```bash
   php artisan db:seed
   ```

7. **Jalankan aplikasi**
   ```bash
   php artisan serve
   ```

8. **Buka browser**
   ```
   http://localhost:8000
   ```

## 📱 Halaman Aplikasi

### 1. Halaman Utama (Daftar Mahasiswa)
- URL: `/` atau `/mahasiswa`
- Fitur: Menampilkan daftar mahasiswa dengan pagination
- Aksi: View, Edit, Delete

### 2. Tambah Mahasiswa
- URL: `/mahasiswa/create`
- Fitur: Form untuk menambah data mahasiswa baru
- Validasi: NIM dan email harus unik

### 3. Detail Mahasiswa
- URL: `/mahasiswa/{id}`
- Fitur: Menampilkan detail lengkap mahasiswa
- Aksi: Edit, Delete, Kembali ke daftar

### 4. Edit Mahasiswa
- URL: `/mahasiswa/{id}/edit`
- Fitur: Form untuk mengubah data mahasiswa
- Validasi: NIM dan email harus unik (kecuali untuk record yang sedang diedit)

## 🔧 Konfigurasi Database

### SQLite (Default)
File `.env`:
```env
DB_CONNECTION=sqlite
DB_DATABASE=/absolute/path/to/database.sqlite
```

### MySQL
File `.env`:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=crud_mahasiswa
DB_USERNAME=root
DB_PASSWORD=
```

### PostgreSQL
File `.env`:
```env
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=crud_mahasiswa
DB_USERNAME=postgres
DB_PASSWORD=
```

## 📊 Data Sample

Aplikasi dilengkapi dengan 5 data sample mahasiswa:
1. Ahmad Rizki - Teknik Informatika
2. Siti Nurhaliza - Sistem Informasi
3. Budi Santoso - Teknik Komputer
4. Dewi Sartika - Manajemen Informatika
5. Rudi Hermawan - Teknik Elektro

## 🎨 Fitur UI/UX

- **Modern Design**: Menggunakan Bootstrap 5 dengan tema yang modern
- **Responsive**: Tampilan yang responsif untuk desktop, tablet, dan mobile
- **Icons**: Font Awesome icons untuk meningkatkan UX
- **Color Coding**: Warna yang berbeda untuk setiap aksi (Info, Warning, Danger, Success)
- **Confirmation**: Konfirmasi sebelum menghapus data
- **Validation Feedback**: Pesan error yang informatif
- **Success Messages**: Notifikasi sukses setelah operasi CRUD

## 🔒 Validasi Data

### Rules Validasi:
- **NIM**: Required, unique, max 20 karakter
- **Nama**: Required, max 100 karakter
- **Jurusan**: Required, max 100 karakter
- **Alamat**: Required
- **Email**: Required, valid email format, unique
- **Telepon**: Required, max 15 karakter

## 📁 Struktur File Penting

```
app/
├── Http/Controllers/
│   └── MahasiswaController.php    # Controller CRUD
├── Models/
│   └── Mahasiswa.php              # Model Mahasiswa
database/
├── migrations/
│   └── create_mahasiswas_table.php # Migration tabel
├── seeders/
│   ├── DatabaseSeeder.php         # Main seeder
│   └── MahasiswaSeeder.php        # Data sample
resources/views/mahasiswa/
├── layout.blade.php               # Template utama
├── index.blade.php                # Daftar mahasiswa
├── create.blade.php               # Form tambah
├── show.blade.php                 # Detail mahasiswa
└── edit.blade.php                 # Form edit
routes/
└── web.php                        # Definisi routes
```

## 🚀 Deployment

### Untuk Production:
1. Set `APP_ENV=production` di file `.env`
2. Set `APP_DEBUG=false` di file `.env`
3. Optimize aplikasi:
   ```bash
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   ```

## 🤝 Kontribusi

Untuk berkontribusi pada project ini:
1. Fork repository
2. Buat branch fitur baru
3. Commit perubahan
4. Push ke branch
5. Buat Pull Request

## 📄 Lisensi

Project ini dibuat untuk keperluan pembelajaran dan tugas e-learning.

## 👨‍💻 Developer

Dibuat dengan ❤️ menggunakan Laravel Framework

---

**Note**: Aplikasi ini dibuat khusus untuk menyelesaikan tugas e-learning dengan implementasi CRUD yang lengkap dan modern.
