# Admin Template - Laravel 12

Admin Template berbasis **Laravel 12** yang dilengkapi dengan berbagai komponen UI modern, manajemen Role & Permission (Spatie), serta aset pendukung seperti DataTables, FullCalendar, ApexCharts, dan lainnya.

---

## 📋 Prasyarat Sistem

Sebelum melakukan instalasi, pastikan sistem Anda sudah memenuhi kebutuhan berikut:

- **PHP**: `>= 8.2` (dengan ekstensi `pdo`, `mbstring`, `openssl`, `bcmath`, `curl`, `xml`, `ctype`, `json`, `fileinfo`)
- **Composer**: `>= 2.x`
- **Node.js**: `>= 18.x` & **NPM** (atau **Yarn**)
- **Database**: MySQL / MariaDB / PostgreSQL / SQLite
- **Web Server / Dev Environment**: Laragon, XAMPP, Herd, atau PHP Built-in Server

---

## 🚀 Langkah-langkah Instalasi

Ikuti langkah-langkah berikut secara berurutan saat melakukan `clone` proyek ke komputer/server baru untuk menghindari error:

### 1. Clone Repository
Buka terminal / Command Prompt / Git Bash, lalu jalankan perintah berikut:
```bash
git clone https://github.com/AbdoelMadjid/admin-template.git
cd admin-template
```

### 2. Install Dependensi PHP (Composer)
Jalankan perintah berikut untuk mengunduh semua library PHP yang dibutuhkan:
```bash
composer install
```

### 3. Install Dependensi Frontend (Node.js & Vite)
Jalankan perintah berikut untuk menginstall library JavaScript/CSS:
```bash
npm install
```
*(atau jika menggunakan yarn: `yarn install`)*

### 4. Salin File Konfigurasi `.env`
Duplikat file `.env.example` menjadi `.env`:

- **Linux / macOS / Git Bash:**
  ```bash
  cp .env.example .env
  ```
- **Windows Command Prompt (CMD):**
  ```cmd
  copy .env.example .env
  ```
- **Windows PowerShell:**
  ```powershell
  Copy-Item .env.example .env
  ```

### 5. Generate Application Key
Jalankan perintah berikut untuk menghasilkan kunci enkripsi aplikasi:
```bash
php artisan key:generate
```

### 6. Konfigurasi Database
Buat database baru di MySQL/Database Server Anda (misal nama databasenya: `admin-template`).

Buka file `.env` dan sesuaikan pengaturan database sesuai dengan lingkungan lokal Anda:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=admin-template
DB_USERNAME=root
DB_PASSWORD=
```

### 7. Jalankan Migrasi & Seeder Database
Jalankan migrasi tabel beserta seeder bawaan (Role, Permission, dan akun default):
```bash
php artisan migrate --seed
```

> **Akun Default Seeder:**
> - **Email:** `administrator@gmail.com`
> - **Password:** `password`

### 8. Buat Tautan Storage (Storage Link)
Hubungkan folder `storage` ke folder `public` agar file upload/media dapat diakses:
```bash
php artisan storage:link
```

### 9. Build / Jalankan Asset Frontend (Vite)
Untuk mode pengembangan (*development mode*):
```bash
npm run dev
```
*(Perintah ini akan menjalankan Vite Dev Server)*

Atau jika ingin mem-build asset untuk produksi (*production*):
```bash
npm run build
```

### 10. Jalankan Server Laravel
Buka terminal baru dan jalankan server lokal Laravel:
```bash
php artisan serve
```

Akses aplikasi di browser melalui URL:
`http://127.0.0.1:8000` (atau sesuai konfigurasi Laragon/Virtual Host Anda).

---

## 🛠️ Tips & Penanganan Masalah (Troubleshooting)

| Masalah / Error | Solusi |
| :--- | :--- |
| **HTTP 500 / `No application encryption key has been specified`** | Jalankan `php artisan key:generate` dan bersihkan cache dengan `php artisan config:clear`. |
| **Asset CSS/JS tidak muncul atau berantakan** | Pastikan `npm install` sudah dijalankan dan `npm run dev` sedang berjalan (atau sudah jalankan `npm run build`). |
| **SQLSTATE[HY000] [1049] Unknown database** | Buat terlebih dahulu database di MySQL sesuai nama yang ada pada `DB_DATABASE` di file `.env`. |
| **Permission Denied (Linux / macOS)** | Berikan akses tulis pada folder `storage` dan `bootstrap/cache`:<br>`chmod -R 775 storage bootstrap/cache` |

---

## 📄 Lisensi

Proyek ini berada di bawah lisensi [MIT License](LICENSE).

