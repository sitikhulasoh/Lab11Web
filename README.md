# Lab11Web
            Nama  : Siti Kulasoh
            Kelas : TI.19.A2
            Nim   : 311910445
            
                                                                                                                   
# PRAKTIKUM 11 PEMOGRAMAN WEB

## Langkah-langkah

-  Buka aplikasi xampp lalu untuk mengaktifkan ekstentsi tersebut, klik  pada bagian 
Apache  Config -> PHP.ini.
![a (2)](https://user-images.githubusercontent.com/56240533/122107132-f2b55480-ce44-11eb-9ea6-11e86a5ae4a6.png)


- Kemudian  Untuk melakukan instalasi Codeigniter 4  Pada praktikum ini kita menggunakan cara 
manual.
- • Unduh Codeigniter dari website https://codeigniter.com/download
- • Extrak file zip Codeigniter ke direktori htdocs/lab11_ci.
- • Ubah nama direktory framework-4.x.xx menjadi ci4.
- • Buka browser dengan alamat http://localhost/lab11_ci/ci4/public/
![2 (2)](https://user-images.githubusercontent.com/56240533/122103160-7fa9df00-ce40-11eb-86ed-ad98b6402808.png)

- Setelah itu Arahkan lokasi direktori pada (xampp/htdocs/lab11_ci/ci4/) kemudian tulis "php spark"  untuk memanggil CLI Codeignite
![3 (2)](https://user-images.githubusercontent.com/56240533/122103752-27bfa800-ce41-11eb-8c10-661b6915d621.png)

- Kmudian untuk Mengaktifkan Mode Debugging untuk mengetahui pesan error apabila terjadi kesalahan dalam membuat kode program Secara default fitur ini belum aktif.
 ![4 (2)](https://user-images.githubusercontent.com/56240533/122104103-8127d700-ce41-11eb-872c-a24c5ab13638.png)

- Ubah nilai konfigurasi pada environment variable CI_ENVIRINMENT menjadi development, Untuk  mengetahui jenis errornya
![5 (2)](https://user-images.githubusercontent.com/56240533/122104378-cfd57100-ce41-11eb-9760-1bab5ce509b0.png)

- Tambahkan kode
- $routes->get('/about', 'Page::about');
- $routes->get('/contact', 'Page::contact');
- $routes->get('/faqs', 'Page::faqs'); di dalam Routes.php, lalu jalankan "php spark routes"
![6 (2)](https://user-images.githubusercontent.com/56240533/122104628-11feb280-ce42-11eb-8a2d-dacb96e7c22a.png)

- Setelah itu   jalankan "php spark routes" kemudian mengakses alamat url http://localhost:8080/abou untuk melihat hasilnya
![7 (2)](https://user-images.githubusercontent.com/56240533/122105253-c39de380-ce42-11eb-9e41-5630dda46f92.png)

## Membuat Controlller

- Buatlah  file baru dengan nama "page.php" pada direktori Controller, setelah itu tulis codenya dan refresh untuk melihat perubahannya.
![8 (2)](https://user-images.githubusercontent.com/56240533/122105606-3018e280-ce43-11eb-89f5-f2f0a23ad655.png)

- Tambahkan method baru pada Controller Page,yang akan menampilkan  "ini halaman Term of Services";  buka url http://localhost:8080/page/tos 
![9 (2)](https://user-images.githubusercontent.com/56240533/122106052-a3baef80-ce43-11eb-910a-047a3a5b67dd.png)

## Membuat view 

- Buatlah  file baru dengan nama about.php pada direktori view (app/view/about.php) kemudian isi kodenya,lalu refresh
![10 (2)](https://user-images.githubusercontent.com/56240533/122106371-06ac8680-ce44-11eb-8baf-4511cf09a410.png)

## Membuat Layout Web dengan CSS

- Buatlah  file css dengan menggunakan layout yang pernah dibuat pada praktikum 4.
![11 (2)](https://user-images.githubusercontent.com/56240533/122106598-568b4d80-ce44-11eb-960d-149d930553eb.png)

- Kemudian buatlah  folder template pada direktori view lalu  buat file "header.php" dan "footer.php" setelah itu buka URL http://localhost:8080/aboutuntuk melihat tampilannya
![12 (2)](https://user-images.githubusercontent.com/56240533/122106982-c699d380-ce44-11eb-8f1a-5ae3413bad7c.png)


