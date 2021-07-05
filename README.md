# Lab11Web
            Nama  : Siti Khulasoh
            Kelas : TI.19.A2
            Nim   : 311910445
            
                                                                                                                   
# PRAKTIKUM 11 PEMOGRAMAN WEB

## Langkah-langkah

## Buka aplikasi xampp lalu untuk mengaktifkan ekstentsi tersebut, klik  pada bagian Apache  Config -> PHP.ini.
![a (2)](https://user-images.githubusercontent.com/56240533/122107132-f2b55480-ce44-11eb-9ea6-11e86a5ae4a6.png)


## Kemudian  Untuk melakukan instalasi Codeigniter 4  Pada praktikum ini dengan cara manual.
-  Unduh Codeigniter dari website https://codeigniter.com/download
-  Extrak file zip Codeigniter ke direktori htdocs/lab11_ci.
-  Ubah nama direktory framework-4.x.xx menjadi ci4.
-  Buka browser dengan alamat http://localhost/lab11_ci/ci4/public/
![2 (2)](https://user-images.githubusercontent.com/56240533/122103160-7fa9df00-ce40-11eb-86ed-ad98b6402808.png)

## Setelah itu Arahkan lokasi direktori pada (xampp/htdocs/lab11_ci/ci4/) kemudian tulis "php spark"  untuk memanggil CLI Codeignite
![3 (2)](https://user-images.githubusercontent.com/56240533/122103752-27bfa800-ce41-11eb-8c10-661b6915d621.png)

## Kmudian untuk Mengaktifkan Mode Debugging untuk mengetahui pesan error apabila terjadi kesalahan dalam membuat kode program Secara default fitur ini belum aktif.
 ![4 (2)](https://user-images.githubusercontent.com/56240533/122104103-8127d700-ce41-11eb-872c-a24c5ab13638.png)

## Ubah nilai konfigurasi pada environment variable CI_ENVIRINMENT menjadi development, Untuk  mengetahui jenis errornya
![5 (2)](https://user-images.githubusercontent.com/56240533/122104378-cfd57100-ce41-11eb-9760-1bab5ce509b0.png)

### Tambahkan kode
- $routes->get('/about', 'Page::about');
- $routes->get('/contact', 'Page::contact');
- $routes->get('/faqs', 'Page::faqs'); di dalam Routes.php, lalu jalankan "php spark routes"
![6 (2)](https://user-images.githubusercontent.com/56240533/122104628-11feb280-ce42-11eb-8a2d-dacb96e7c22a.png)

## Setelah itu   jalankan "php spark routes" kemudian mengakses alamat url http://localhost:8080/abou untuk melihat hasilnya
![7 (2)](https://user-images.githubusercontent.com/56240533/122105253-c39de380-ce42-11eb-9e41-5630dda46f92.png)

## Membuat Controlller

### Buatlah  file baru dengan nama "page.php" pada direktori Controller, setelah itu tulis codenya dan refresh untuk melihat perubahannya.
![8 (2)](https://user-images.githubusercontent.com/56240533/122105606-3018e280-ce43-11eb-89f5-f2f0a23ad655.png)

### Tambahkan method baru pada Controller Page,yang akan menampilkan  "ini halaman Term of Services";  buka url http://localhost:8080/page/tos 
![9 (2)](https://user-images.githubusercontent.com/56240533/122106052-a3baef80-ce43-11eb-910a-047a3a5b67dd.png)

## Membuat view 

### Buatlah  file baru dengan nama about.php pada direktori view (app/view/about.php) kemudian isi kodenya,lalu refresh
![10 (2)](https://user-images.githubusercontent.com/56240533/122106371-06ac8680-ce44-11eb-8baf-4511cf09a410.png)

## Membuat Layout Web dengan CSS

###  Buatlah  file css dengan menggunakan layout yang pernah dibuat pada praktikum 4.
![11 (2)](https://user-images.githubusercontent.com/56240533/122106598-568b4d80-ce44-11eb-960d-149d930553eb.png)

###  Kemudian buatlah  folder template pada direktori view lalu  buat file "header.php" dan "footer.php" setelah itu buka URL http://localhost:8080/aboutuntuk melihat tampilannya
![12 (2)](https://user-images.githubusercontent.com/56240533/122106982-c699d380-ce44-11eb-8f1a-5ae3413bad7c.png)


# PRAKTIKUM 12 PEMOGRAMAN WEB

            siti khulasoh
            311910445
            TI.19.A2

## Langkah-langkah praktikum

### jalankan terlebih dahulu  MySQL Server melalui XAMPP
#### Buatlah database  sebagai berikut untuk menampilkan tabel
![15 (2)](https://user-images.githubusercontent.com/56240533/122954934-1418c200-d3aa-11eb-837b-45b9cd654ee3.png) 
![16 (2)](https://user-images.githubusercontent.com/56240533/122955601-707be180-d3aa-11eb-804c-756ef0cee1b2.png)

### Konfigurasi koneksi database dengan menggunakan file .env.
![17 (2)](https://user-images.githubusercontent.com/56240533/122955953-c781b680-d3aa-11eb-858d-13c677282a65.png)

## Membuat Model
### Buatlah file baru pada direktori app/Models dengan nama *ArtikelModel.php*
![18 (2)](https://user-images.githubusercontent.com/56240533/122956222-0152bd00-d3ab-11eb-86bd-ff396b308ef1.png)

## Membuat Controller
### Buatlah  Controller baru dengan nama *Artikel.php* pada direktori app/Controllers.
![19 (2)](https://user-images.githubusercontent.com/56240533/122956381-26473000-d3ab-11eb-8079-11f0965d4fcb.png)

## Membuat View
### Buatlah  direktori baru dengan nama artikel pada direktori app/views, kemudian buat  file baru dengan nama *index.php.* 
![20 (2)](https://user-images.githubusercontent.com/56240533/122956835-8dfd7b00-d3ab-11eb-840a-2b95085a0172.png)
### kemudian buka browser dengan mengakses url http://localhost:8080/artikel untuk melihat hasilnya.
![21 (2)](https://user-images.githubusercontent.com/56240533/122957056-c309cd80-d3ab-11eb-92dd-3fd1a3457897.png)

### kemudian tambahkan data pada database agar dapat ditampilkan datanya.
![14 (2)](https://user-images.githubusercontent.com/56240533/122958084-bdf94e00-d3ac-11eb-8fb8-e75412c9f147.png)
- refresh kembali browsernya  untuk melihat hasilnya
![22 (2)](https://user-images.githubusercontent.com/56240533/122958441-0add2480-d3ad-11eb-9a91-c2a03f45700b.png)

## Membuat Tampilan Detail Artikel
### Tambahkan fungsi baru pada Controller Artikel dengan nama view().
![23 (2)](https://user-images.githubusercontent.com/56240533/122959828-555ea100-d3ad-11eb-82c7-ad0d08169d8e.png)

## Membuat View Detail
### Buatlah file  pada direktori app/artikel dengan nama *detail.php.*
![24 (2)](https://user-images.githubusercontent.com/56240533/122960509-ad95a300-d3ad-11eb-8f9d-ce9ff83c1b94.png)

## Membuat Routing untuk artikel detail
### tambahkan routing untuk artikel detail pada  file app/config/Routes.php
![25 (2)](https://user-images.githubusercontent.com/56240533/122960801-fc433d00-d3ad-11eb-9efd-b101dce2cc16.png)

## Membuat Menu Admin
### Buatlah method baru pada Controller Artikel dengan nama admin_index().
![26 (2)](https://user-images.githubusercontent.com/56240533/122963461-7a084800-d3b0-11eb-996e-71e380e036f3.png)

### Tambahkan routing untuk menu admin seperti berikut:
![27 (2)](https://user-images.githubusercontent.com/56240533/122963601-9f955180-d3b0-11eb-8b65-2154692bf561.png)
#### hasil dari mengakses url http://localhost:8080/admin/artikel
![28 (2)](https://user-images.githubusercontent.com/56240533/122963861-e08d6600-d3b0-11eb-913e-12e375ee052e.png)

## Menambah Data Artike
### Tambahkan fungsi/method baru add(). pada  Controller Artikel 
![29 (2)](https://user-images.githubusercontent.com/56240533/122964188-319d5a00-d3b1-11eb-8cea-310390e96aec.png)
### Kemudian buat file pada view  dengan nama form_add.php
![30 (2)](https://user-images.githubusercontent.com/56240533/122964629-a7a1c100-d3b1-11eb-9dbe-868c4b6482df.png)
#### hasil dari merefresh browser
![31 (2)](https://user-images.githubusercontent.com/56240533/122964761-cbfd9d80-d3b1-11eb-9086-87d21d4943c8.png)
refresh browsernya

## Mengubah Data
### Tambahkan fungsi *edit()*. pada Controller Artikel 
![32 (2)](https://user-images.githubusercontent.com/56240533/122965039-13842980-d3b2-11eb-9c18-bce23db183a3.png)

### Kemudian buat file pada view untuk form tambah dengan nama *form_edit.php*
![edit (2)](https://user-images.githubusercontent.com/56240533/122966374-71654100-d3b3-11eb-9fcc-859ad04fbf52.png)
- berikut hasilnya
![33 (2)](https://user-images.githubusercontent.com/56240533/122966469-90fc6980-d3b3-11eb-86ba-2f467fb26755.png)

## Menghapus Data
### Tambahkan fungsi *delete().* pada Controller Artikel 
![34 (2)](https://user-images.githubusercontent.com/56240533/122966626-bd17ea80-d3b3-11eb-9a18-efe276917e6c.png)


# PRAKTIKUM 13
            Nama : Siti Khulasoh
            Kelas: TI.19.A2
            NIM  : 311910445
            
            
## Pastikan MySQL Server sudah dapat dijalankan melalui XAMPP untuk membuat modul login, kemudian buatlah tabel seperti berikut ini:
![1 (2)](https://user-images.githubusercontent.com/56240533/123649912-53d12500-d854-11eb-93fc-71659659aa78.png)

## 1. Membuat Model User

### Buatlah  file baru pada direktori *app/Models* dengan nama *UserModel.php*
![2 (2)](https://user-images.githubusercontent.com/56240533/123650381-be826080-d854-11eb-8704-593d3912061f.png)

## 2. Membuat Controller User

### Buatlah Controller baru dengan nama User.php pada direktori app/Controllers. Kemudian tambahkan method index() untuk menampilkan daftar user, dan method login() untuk proses login.
![3 (2)](https://user-images.githubusercontent.com/56240533/123650703-073a1980-d855-11eb-87ab-fee1f78fb37f.png)

## 3. Membuat View Login

### Buatlah  direktori baru dengan nama user pada direktori app/views, kemudian buat file baru dengan nama login.php.
![4 (2)](https://user-images.githubusercontent.com/56240533/123651277-87f91580-d855-11eb-8860-aaf8b8a0c7ae.png)

## 4. Membuat Database Seeder

### Database seeder digunakan untuk  keperluan ujicoba modul login, kita perlu memasukkan data user dan password kedaalam database. Untuk itu buat database seeder untuk tabel user. Buka CLI, kemudian tulis perintah berikut:
![5 (2)](https://user-images.githubusercontent.com/56240533/123651776-f8079b80-d855-11eb-96e4-5a5a440f6772.png)

### kemudian buka file UserSeeder.php yang berada di lokasi direktori /app/Database/Seeds/UserSeeder.php kemudian isi setelah ketik perintah pada CLI sebagai berikut:
      php spark db:seed UserSeeder
![6a (2)](https://user-images.githubusercontent.com/56240533/123652203-49b02600-d856-11eb-851c-8b203634247b.png)

###  Selanjutnya buka url http://localhost:8080/user/login untuk melihat hasilnya sebagai berikut:
![7 (2)](https://user-images.githubusercontent.com/56240533/123652610-a3b0eb80-d856-11eb-8414-d2a0d5abb761.png)

## 5. Menambahkan Auth Filter

### Selanjutnya membuat filer untuk halaman admin. Buat file baru dengan nama Auth.php pada direktori app/Filters.
![8 (2)](https://user-images.githubusercontent.com/56240533/123652737-c17e5080-d856-11eb-98e3-858c37811344.png)

###  Selanjutnya buka file app/Config/Filters.php tambahkan kode berikut:
  
            'auth' => App\Filters\Auth::class
![9 (2)](https://user-images.githubusercontent.com/56240533/123653064-0b673680-d857-11eb-8cfe-a5a582df8e8b.png)

### Selanjutnya buka file app/Config/Routes.php dan sesuaikan kodenya
![10 (2)](https://user-images.githubusercontent.com/56240533/123653217-289c0500-d857-11eb-9799-ff4e158cae79.png)

## 6. Buka url dengan alamat http://localhost:8080/admin/artikel ketika alamat tersebut diakses maka, akan dimuculkan halaman login.
![11 (2)](https://user-images.githubusercontent.com/56240533/123653422-52edc280-d857-11eb-9a0e-824ab3cf4928.png)

## Fungsi Logout 

### Tambahkan method logout pada Controller User seperti berikut:
![12 (2)](https://user-images.githubusercontent.com/56240533/123653548-70229100-d857-11eb-91a7-33291631201c.png)

### Kemudian taambahkan menu logout pada  admin_header. di direktori app\view\template  tambahkan kode berikut
![13 (2)](https://user-images.githubusercontent.com/56240533/123653863-b972e080-d857-11eb-9aab-e0a8a194cef5.png)

### Tambahkan route logout  pada direktori app\Config\Routes.php lalu tambahkan kode sebagai  berikut:
![14 (2)](https://user-images.githubusercontent.com/56240533/123654037-e2937100-d857-11eb-9c19-30dd1d9eb8d1.png)

### kemudian refresh kembali, lalu akkan muncul tampilan sebagai berikut:

![15 (2)](https://user-images.githubusercontent.com/56240533/123654145-fd65e580-d857-11eb-941d-b2625235614c.png)

# Praktikum 14 Pemrograman Web (Framework Lanjutan - Pagination dan Pencarian)

            Nama        : Siti Khulasoh
            Kelas       : TI.19.A2
            Nim         : 311910445
          
 ## LANGKAH 1 - Membuat Pagination
 
 ### Untuk membuat pagination, buka Kembali Controller Artikel, kemudian modifikasi kode pada method admin_index seperti berikut.
![1 (2)](https://user-images.githubusercontent.com/56240533/124505520-e4c77380-ddf3-11eb-9ed8-1c6846e8c440.png)

### Kemudian buka file views/artikel/admin_index.php dan tambahkan kode berikutdibawah deklarasi tabel data
![2 (2)](https://user-images.githubusercontent.com/56240533/124505573-0163ab80-ddf4-11eb-84da-48c18bb229a6.png)

### Selanjutnya buka kembali menu daftar artikel Pada chrome, tambahkan data lagi untuk melihat hasilnya.

## langkah 2- Membuat Pencarian

### buka kembali Controller/Artikel, pada method admin_index ubah kodenya seperti berikut
 ![4 (2)](https://user-images.githubusercontent.com/56240533/124505885-b1391900-ddf4-11eb-94fb-0489dbb025fd.png)

### Kemudian buka kembali file views/artikel/admin_index.php dan tambahkan form pencarian sebelum deklarasi tabel seperti berikut:
![5 (2)](https://user-images.githubusercontent.com/56240533/124505933-c9109d00-ddf4-11eb-9f0e-a127056cf6f8.png)

### Dan pada link pager ubah seperti berikut:
![6 (2)](https://user-images.githubusercontent.com/56240533/124505995-ef363d00-ddf4-11eb-9f50-db7451357a2c.png)

### Selanjutnya ujicoba dengan membuka kembali halaman admin artikel, masukkan kata kunci tertentu pada form pencarian
![7 (2)](https://user-images.githubusercontent.com/56240533/124506064-1725a080-ddf5-11eb-9572-b099507fb0a2.png)

## Langkah 3 - Upload Gambar

### Buka kembali Controller/Artikel, sesuaikan kode pada method add seperti berikut:
![9a (2)](https://user-images.githubusercontent.com/56240533/124506160-44724e80-ddf5-11eb-8e3c-a785197dc0a8.png)

### Kemudian pada file views/artikel/form_add.php tambahkan field input file serta sesuaikan tag form dengan menambahkan ecrypt type <form action="" method="post" enctype="multipart/form-data"> dan tambahkan field input file:
![10 (2)](https://user-images.githubusercontent.com/56240533/124506278-800d1880-ddf5-11eb-8480-f5812a7b5586.png)
            
### Ujicoba file upload dengan mengakses menu tambah artikel.
![8a (2)](https://user-images.githubusercontent.com/56240533/124506375-ad59c680-ddf5-11eb-8126-471104a1b5d0.png)
            

           
 


























