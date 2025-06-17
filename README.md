## Getting Started

### Pastikan Anda telah menginstal [NodeJS 20.x](https://nodejs.org), [Composer 2.8](https://getcomposer.org) dan [PHP 8.x](https://www.php.net/) di komputer Anda.

### 1. instal dependensi

```powershell
npm install
composer install
```

### 2. buat dan konfigurasikan file .env

- 1. buat

```powershell
salin .env.example .env
```

- 2. konfigurasikan basis data (_database dan nama database_)

```txt
DB_CONNECTION=sqlite <--
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=laravel <--
# DB_USERNAME=root
# DB_PASSWORD=
```

### 3. Buat kunci aplikasi

```powershell
php artisan key:generate
```

### 4. Migrasi basis data

```powershell
php artisan migrate
```

### 4. Jalankan development server

```powershell
php artisan serve
```
```powershell
npm run dev
```

Buka <a href="http://127.0.0.1:8000">http://127.0.0.1:8000</a> dengan browser Anda untuk melihat hasilnya.

##### seed data palsu
```powershell
php artisan migrate:fresh --seed --seeder=UserSeeder
php artisan db:seed --class=CategorySeeder
php artisan db:seed --class=PostSeeder
```