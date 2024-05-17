## Systems Requirement
Sebelum memulai instalasi, pastikan sistem kamu telah memenuhi persyaratan berikut:

- Paket komplit silakan install [**Laragon**](https://laragon.org/download/index.html)
  - Git
  - PHP versi 8.1 atau yang lebih baru
  - Composer
  - MySQL atau database lain yang didukung oleh Laravel

## Installation Instructions
1. Clone repositori ini ke lingkungan lokal pengembang.
    ```bash
    git clone https://github.com/ABhome-Education/ABhome-Elearning-v3.git
    ```
2. `cd` ke dalam folder aplikasi **ABhome-Elearning-v3** dan jalankan composer install.
   ```bash
   composer install
   ```
3. Salin file `.env.local` ke `.env` dan isi dengan database dan sesuaikan detail lainnya.
   ```bash
    cp .env.local .env
   ```
4. Jalankan `php artisan key:generate` untuk menghasilkan kunci aplikasi unik.
5. Jalankan `php artisan migrate` untuk membuat basis data.
6 Jalankan Server Lokal
    ```vbnet
    php artisan serve
    ```
6.1 **Atau jalankan Laragon**
  - Panduan belum tersedia.
