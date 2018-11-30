# Lapor!
Aplikasi Laporan Masyarakat Sederhana

## Fitur
#### Admin
* Membuat, Mengedit dan Menghapus Berita / Informasi
* Melihat Laporan dari Masyarakat
* Membuat, Mengedit dan Menghapus Kategori (Berita dan Laporan)
* Membuat, Mengedit dan Menghapus Tag (Berita dan Laporan)

#### User/Masyarakat
* Membuat, Mengedit dan Menghapus Laporan
* Melihat Informasi

## Cara Instalasi di localhost / server lokal

#### Prerequisities
* PHP >= 5.6
* MySQL
* Composer

### Instalasi
* Clone Repository ini dengan cara klik tombol hijau di atas
* Install dependency
```
   composer install
```
* Config database mysql
* Rename .env.example menjadi .env dan sesuaikan pengaturan variabelnya
* Run command dibawah untuk mendapatkan application key baru
```
php artisan key:generate
```
* Migrasi Database
```
  php artisan migrate
```
* Mengisi data dummy untuk table User dan Admin
```
  php artisan db:seed
```
* Jalankan aplikasi
```
  php artisan serve
 ````
 * Login Admin
 ```
  email : admin@admin.com
  password : 123456
 ```
 * Login User
 ```
  email : user@user.com
  password : 123456
 ````

## Kendala
#### Fitur yang belum selesai
* Admin dapat memanage data petugas
* Admin melihat laporan yang di pointing di google maps canvas

### Kekurangan
* Entah kenapa tampilan dashboard user jadi buruk rupa

## Akses Langsung Aplikasi di:
https://laportsm.azurewebsites.net
