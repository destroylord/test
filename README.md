## Persyaratan
1. Perbarui composer ke versi terbaru
2. Versi Php >=8.1

## Instalasi
1. Kloning proyek ini ```git clone https://github.com/destroylord/test```
2. Buka terminal lalu ketik ```cp .env.example .env```
3. Buat database dan periksa DB_DATABASE=test_crud
4. Jalankan perintah ```composer install```
5. Jalankan perintah ```php key:generate```
6. Jalankan perintah ```php artisan migrate```
7. Terakhir, jalankan perintah ```php artisan serve```