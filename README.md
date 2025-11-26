# Refuel Check 🚗⛽

**Refuel Check** adalah aplikasi web _open source_ berbasis [Laravel 12](https://laravel.com/) & [Filament 4](https://filamentphp.com/), yang memudahkan pengguna untuk mencatat, menganalisis, dan mengelola biaya pengeluaran pengisian bahan bakar (BBM) kendaraan.
Aplikasi ini mendukung multi-user, multi-kendaraan, serta pelaporan efisiensi konsumsi BBM, lengkap dengan fitur master data kendaraan, bahan bakar, provider, plat region dan analisis pengeluaran.

---

## ✨ **Fitur Utama**

-   Manajemen **Kendaraan**: Catat kendaraan Anda secara detail (brand, tipe, model, tahun, kapasitas tangki, plat regional, dll).
-   Manajemen **Provider & Produk BBM**: Tambah & update daftar penyedia (Pertamina, Shell, dsb.) beserta produk dan harga terbaru.
-   **Transaksi Refuel**: Input catatan pengisian BBM (liter, rupiah, tipe BBM, kendaraan, odometer).
-   **Analisis Pengeluaran**: Rekap pengeluaran BBM bulanan/kendaraan; grafik/stats konsumsi dan efisiensi km/l.
-   Manajemen **Plat Regional**: Data kode plat seluruh Indonesia by region.
-   **User Management**: Register/login multi-user, admin dapat melihat seluruh data.
-   **Relasi canggih**: Pilih model tergantung brand (cascading select).
-   **CRUD Otomatis & Professional Admin Panel** powered by Filament.
-   **Open Source**: Siap dikembangkan, di-_fork_, maupun dipasang di produksi!

---

## ⚡️ **Demo Screenshots**

<sup>_Tambahkan screenshot aplikasi Anda di sini!_</sup>

---

## 🔥 **Quick Start**

### 1. **Persiapan**

-   Pastikan sudah menginstall:
    -   PHP >= 8.2
    -   Composer
    -   Node.js & npm (untuk asset)
    -   Database MySQL/MariaDB (atau SQLite)

### 2. **Clone Repository**

```bash
git clone https://github.com/username/refuel-check.git
cd refuel-check
```

### 3. **Instalasi Dependensi**

```bash
composer install
npm install
```

### 4. **Copy & Setting `.env`**

```bash
cp .env.example .env
```

-   Edit `.env` untuk koneksi database & email.
-   Gantilah `APP_URL`, `DB_*`, `MAIL_*`, dsb.

### 5. **Key & Storage Link**

```bash
php artisan key:generate
php artisan storage:link
```

### 6. **Migrasi dan Seeding Database**

```bash
php artisan migrate --seed
```

Ini akan membuat seluruh tabel dan seed data master (vehicle, brand/model, provider BBM, region plat, hingga contoh transaksi dummy).

### 7. **Build Asset (Frontend)**

```bash
npm run build
```

### 8. **Jalankan Server Pengembangan**

```bash
php artisan serve
```

Aplikasi dapat diakses pada: [http://localhost:8000/admin](http://localhost:8000/admin)

---

## 🛡️ **Akun Admin Default**

Seeder akan membuat akun admin:

-   Email: `admin@example.com`
-   Password: `password`

_Silakan login dan ubah password setelah login pertama!_

---

## 📚 **Struktur Database Utama**

-   `users` — Data user login/admin
-   `vehicles`, `vehicle_types`, `vehicle_brands`, `vehicle_models` — Master kendaraan
-   `fuel_providers`, `fuel_products` — Master BBM & provider
-   `refuel_transactions` — Catatan isi BBM
-   `license_plates` — Kode plat seluruh Indonesia

---

## 🗂️ **Fitur Lengkap**

-   CRUD dan filter data kendaraan berdasarkan user id (user lihat data sendiri, admin lihat semuanya)
-   Input responif: **brand dan model kendaraan cascading**
-   Statistik pengeluaran BBM bulanan per kendaraan/user
-   Cek **efisiensi km/l secara otomatis** pada pengisian full tank
-   Daftar kode plat berdasarkan region nasional
-   Manajemen session login otomatis (gunakan DB session driver)
-   Tersedia API dan resource **Filament Panel** untuk monitoring dan pengembangan backend

---

## 👷 **Pengembangan Lanjutan**

-   Tambahkan middleware, API, dan policy custom sesuai kebutuhan.
-   Gunakan [Filament Permission Package](https://filamentphp.com/plugins/permission) untuk akses lanjutan (admin/user, dll).
-   Fork dan sesuaikan desain / fitur!
-   Kontribusi: Silakan submit PR, raise issue, atau diskusi via github issue.

---

## 🤝 **Kontribusi**

Kontribusi sangat terbuka!

1. Fork repo ini.
2. Buat branch fiturnya: `git checkout -b fitur-baru-anda`
3. Commit & push perubahan Anda.
4. Buat Pull Request via Github.

---

## 📄 **Lisensi**

This project is open source under the [MIT License](LICENSE).

---

## 💡 **Credit & Thanks**

-   [Laravel](https://laravel.com/), [Filament Admin](https://filamentphp.com/)
-   Data plat regional: Korlantas Polri, Wikipedia, dsb.

---

### _Selamat menggunakan Refuel Check!_
