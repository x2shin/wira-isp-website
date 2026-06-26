# WI-RA ISP Website

Website profil perusahaan untuk layanan penyedia internet (ISP) WI-RA.

## Teknologi yang Digunakan
- **Framework:** Laravel 10+
- **Data Source:** JSON (Sistem penyimpanan lokal untuk performa optimal)
- **Frontend:** Blade Templating dengan kustomisasi CSS (Dark Mode)

## Konfigurasi Data (Sangat Penting)
Data harga paket layanan disimpan di dalam file JSON agar website berjalan dengan cepat tanpa membebani server dengan *request* eksternal.

- **Lokasi File:** `storage/app/harga.json`
- **Cara Update Harga:** Cukup edit angka di dalam file `harga.json` tersebut melalui File Manager di cPanel/Server, lalu *save*. Perubahan akan langsung tersinkronisasi dengan tampilan website.

## Panduan Deployment (Server Ubuntu)
Jika Anda men-deploy website ini di server Ubuntu, pastikan konfigurasi *web server* sudah benar:

### 1. Web Server
- **Nginx:** Pastikan `location /` di konfigurasi Nginx Anda berisi:
  ```nginx
  try_files $uri $uri/ /index.php?$query_string;