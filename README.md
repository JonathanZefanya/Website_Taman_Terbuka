# GIS-TAMAN-JAKARTA

website sistem informasi geografis Taman di provinsi Jakarta

## Page Admin
```
localhost:port/index.php/admin
```

```
Email: admin@example.com
Password: admin
```

## Tutorial menjalankan proyek

download composer kalo belum ada: 🔗https://getcomposer.org/download/ 

jangan lupa untuk set environment variable

```
install composer
```

```
composer update
```
atau
```
composer update --ignore-platform-reqs (jika error)
```

env
```
mv env .env
```

buka mysql, lalu buat database baru dengan nama `taman_terbuka`
<hr />

lakukan migrate database

```
php spark migrate
```

```
php spark db:seed AdminSeeder
```

```
php spark db:seed PlacesSeeder
```

jalankan localhost webnya
```
php spark serve
```
