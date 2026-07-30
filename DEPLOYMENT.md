# Deployment Website Desa Ngrimbi

Panduan singkat untuk menjalankan proyek di server production dengan Docker, Nginx, MySQL, dan Cloudflare Tunnel.

## 1. Siapkan `.env`

Salin template production:

```bash
cp .env.production .env
```

Wajib isi nilai berikut:

```dotenv
APP_KEY=
APP_URL=https://domain-kamu
APP_TRUSTED_HOSTS=domain-kamu
ADMIN_EMAIL=email-admin-kamu
ADMIN_PASSWORD=password-admin-yang-kuat
```

Generate APP_KEY di server:

```bash
docker compose run --rm app php artisan key:generate
```

## 2. Jalankan Container

```bash
docker compose up -d --build
```

Aplikasi akan tersedia dari Nginx lokal server di port `8080`.

## 3. Migrasi Database dan Cache Production

```bash
docker compose exec app php artisan migrate --force
docker compose exec app php artisan storage:link
docker compose exec app php artisan config:cache
docker compose exec app php artisan route:cache
docker compose exec app php artisan view:cache
```

Jika butuh data contoh awal:

```bash
docker compose exec app php artisan db:seed --force
```

## 4. Cloudflare Tunnel

Arahkan tunnel ke service lokal:

```text
http://localhost:8080
```

Pastikan `.env` memakai:

```dotenv
TRUSTED_PROXIES=*
SESSION_SECURE_COOKIE=true
APP_URL=https://domain-kamu
```

## 5. Setelah Update Kode

```bash
docker compose up -d --build
docker compose exec app php artisan migrate --force
docker compose exec app php artisan optimize:clear
docker compose exec app php artisan config:cache
docker compose exec app php artisan route:cache
docker compose exec app php artisan view:cache
```
