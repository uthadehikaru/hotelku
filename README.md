# Aplikasi Hotelku

Ini adalah proyek aplikasi web berbasis Laravel untuk manajemen dan pemesanan hotel.

## Deskripsi

Aplikasi Hotelku dirancang untuk menyediakan platform komprehensif untuk manajemen hotel, termasuk pemesanan kamar, dan pengolahan pesanan. Aplikasi ini menggunakan kerangka PHP Laravel, menawarkan fondasi yang kokoh untuk mengembangkan aplikasi web modern. Fitur utama termasuk:

- Fitur pemesanan kamar yang mudah digunakan
- Pengolahan pesanan yang efisien
- Notifikasi email otomatis
- Integrasi dengan Google Maps

## Instruksi Pengaturan

Untuk mengatur proyek Aplikasi Hotelku pada mesin lokal Anda, ikuti langkah-langkah berikut:

1. Kloning repositori:
   ```
   git clone https://github.com/uthadehikaru/hotelku.git
   ```

2. Navigasi ke direktori proyek:
   ```
   cd hotelku
   ```

3. Instalasi dependensi PHP menggunakan Composer:
   ```
   composer install
   ```

4. Salin file lingkungan contoh dan buat file .env baru:
   ```
   cp .env.example .env
   ```

5. Generasi kunci aplikasi:
   ```
   php artisan key:generate
   ```

6. Konfigurasi basis data Anda dalam file .env:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=hotelku_app
   DB_USERNAME=root
   DB_PASSWORD=your_strong_password
   ```

7. Jalankan migrasi basis data:
   ```
   php artisan migrate
   ```

8. Mulai server pengembangan:
   ```
   php artisan serve
   ```

9. Kunjungi `http://localhost:8000` dalam browser web Anda untuk mengakses Aplikasi Hotelku.

## Pengguna Demo

Untuk tujuan demonstrasi, akun pengguna default tersedia:

- Email: admin@laravel.test
- Kata Sandi: secret

Harap dicatat bahwa ini adalah akun demo dan tidak boleh digunakan untuk tujuan produksi.

## Konfigurasi Email

Hotelku memiliki fitur notifikasi email ketika ada pemesanan baru. Untuk mengirim email, konfigurasi email Anda di file .env:

```
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your_username
MAIL_PASSWORD=your_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="Hotelku"
```

- buat cron job untuk mengirim email setiap 1 menit:

```
* * * * * php /path/to/artisan queue:work --stop-when-empty >> /dev/null 2>&1
```

## Lisensi

Proyek ini adalah perangkat lunak open-source yang dilisensikan di bawah [lisensi MIT](https://opensource.org/licenses/MIT).
