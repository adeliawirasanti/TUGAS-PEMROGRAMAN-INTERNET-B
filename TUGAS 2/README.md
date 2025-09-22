# Tugas 2 Praktik PHP Dasar: **Looping & Array**

Repositori ini berisi kode dan dokumentasi untuk **Tugas Praktik Pemrograman Internet (PHP Dasar)** dengan fokus pada **perulangan (looping)** dan **array**.  
Seluruh project dibuat menggunakan **PHP murni (tanpa framework)** dengan tampilan HTML & CSS pastel.

## 🎯 Tujuan Tugas
- Memahami konsep perulangan `for`, `while`, dan `foreach`.
- Memahami cara membuat dan mengakses **indexed array** dan **associative array**.
- Menggabungkan konsep looping dengan array untuk menampilkan data dalam halaman web.

---

## 📌 Fitur / Halaman
1. **Menu Utama (`index.php`)**  
   - Halaman awal sebagai navigasi ke semua fitur.  
   - Berisi tombol/link menuju: Daftar Barang, Daftar Mahasiswa, Daftar Harga Barang, Bilangan Genap, Array Multidimensi, dan Array + Kondisi.  

2. **Daftar Barang (`daftar_barang.php`)**  
   - Menampilkan daftar barang menggunakan array 1 dimensi (indexed array).  
   - Data ditampilkan dalam list HTML menggunakan `foreach`.

3. **Daftar Mahasiswa (`daftar_mahasiswa.php`)**  
   - Menggunakan array asosiatif (key = NIM, value = Nama).  
   - Ditampilkan dalam tabel HTML rapi dengan looping `foreach`.

4. **Daftar Harga Barang (`daftar_harga_barang.php`)**  
   - Array asosiatif berisi minimal 5 barang dan harga (Rp).  
   - Ditampilkan dalam tabel HTML dengan `number_format()` untuk format rupiah.  
   - Kolom tabel diatur alignment agar rapi.

5. **Bilangan Genap (`bilangan_genap.php`)**  
   - Form input untuk batas awal (`n1`) dan batas akhir (`n2`).  
   - Validasi input: angka, dan `n1 < n2`.  
   - Menggunakan looping `for` untuk menampilkan semua bilangan genap di rentang tersebut.

6. **Array Multidimensi (`array_multidimensi.php`)**  
   - Data 10 mahasiswa (NIM, Nama, Umur, Program Studi).  
   - Disimpan dalam array multidimensi.  
   - Ditampilkan dalam tabel HTML menggunakan looping `foreach`.

7. **Array + Kondisi (`array_kondisi.php`)**  
   - Melanjutkan data mahasiswa pada array multidimensi dengan atribut nilai (0–100).  
   - Menggunakan kondisi `if` untuk menentukan status Lulus (≥70) atau Tidak Lulus (<70).  
   - Ditampilkan dalam tabel HTML dengan alignment kolom yang rapi.

---

## 🛠️ Tools yang Digunakan

Proyek ini dikembangkan dengan teknologi dan perangkat berikut:

- **Bahasa Pemrograman**: PHP 8 yang dijalankan melalui XAMPP sebagai lingkungan pengembangan lokal.
- **Web Server**: Apache, bawaan XAMPP, digunakan untuk mengeksekusi dan melayani kode PHP.
- **Editor Kode**: Visual Studio Code sebagai text editor utama untuk penulisan dan pengelolaan kode.
- **Version Control**: Git dan GitHub untuk pengelolaan versi dan penyimpanan kode sumber.

### Antarmuka dan Styling
- **CSS3** dengan palet warna pastel bernuansa pink–ungu agar tampilan lembut dan nyaman di desktop.
- **HTML5** untuk struktur halaman dan elemen tabel/form.
- **Flexbox & CSS Grid** untuk tata letak menu utama yang responsif dan rata tengah.

---

## 🎨 Tampilan UI

Aplikasi dirancang untuk tampilan **desktop** dengan gaya sederhana, konsisten, dan mudah dibaca:

- **Warna**: latar gradien `#f8e1f4 → #d183a9` untuk background, aksen ungu gelap `#3A345B` pada header dan judul tabel, serta elemen putih untuk container isi.

- **Font**: **Montserrat** (regular & bold) sebagai font utama di seluruh halaman.

- **Layout**: 
  - **Menu Utama** menggunakan **CSS Grid** untuk menata tombol navigasi ke setiap tugas.
  - Tiap halaman konten berada di dalam **container putih** dengan border-radius besar dan bayangan lembut.

- **Komponen**: 
  - Tabel border-collapse dengan heading ungu gelap dan teks rata tengah.  
  - Tombol navigasi **← Kembali** di kiri atas setiap halaman, dengan efek hover warna ungu lebih tua.  
  - Form input pada halaman **Bilangan Genap** lebar, bersudut membulat, dan memiliki efek hover pada tombol submit.

- **Output**: 
  - Hasil looping (misalnya daftar mahasiswa, barang, atau bilangan genap) ditampilkan di tengah container dengan teks berwarna ungu gelap agar kontras.

Semua **CSS ditulis inline di masing-masing file PHP**, sehingga project dapat dijalankan langsung tanpa konfigurasi tambahan.

---

## 🚀 Cara Menjalankan

1. Pastikan **XAMPP** (Apache + PHP 8) sudah terpasang dan dijalankan.  
2. Pastikan folder berada di C:\xampp\htdocs\Tugas Prognet
3. Jalankan dan buka pada browser dengan alamat http://localhost/Tugas%20Prognet/TUGAS%202/index.php

---

## 📷 Tampilan Project

Berikut adalah tampilan dari project PHP yang sudah dibuat:

---

### 1. Menu Utama (Index)
Halaman awal untuk navigasi ke semua fitur (Daftar Barang, Daftar Mahasiswa, Daftar Harga Barang, Bilangan Genap, Array Multidimensi, dan Array + Kondisi).  
<img width="1919" height="907" alt="image" src="https://github.com/user-attachments/assets/f9e30e60-b9e4-4896-b5ca-ee9e7bf0216e" />

---

### 2. Daftar Barang
Menampilkan daftar barang menggunakan array 1 dimensi (indexed array) dengan looping `foreach`.  
<img width="1919" height="908" alt="image" src="https://github.com/user-attachments/assets/9cc1717b-d36f-4401-b8fe-d627fabc90b3" />

---

### 3. Daftar Mahasiswa
Menggunakan array asosiatif (key = NIM, value = Nama), ditampilkan dalam tabel HTML rapi.  
<img width="1919" height="908" alt="image" src="https://github.com/user-attachments/assets/222bec70-659f-4eb1-bb34-a79d817be802" />

---

### 4. Daftar Harga Barang
Array asosiatif berisi minimal 5 barang dan harga dalam format Rupiah (`number_format`).  
Tabel ditampilkan dengan alignment kolom agar rapi.  
<img width="1919" height="907" alt="image" src="https://github.com/user-attachments/assets/cbe8e03e-93b4-4a7b-8c81-748ae02adc98" />

---

### 5. Bilangan Genap
Form input untuk memasukkan batas awal (`n1`) dan batas akhir (`n2`).  
Validasi memastikan `n1 < n2`. Output berupa daftar bilangan genap menggunakan looping `for`.  
<img width="1919" height="910" alt="image" src="https://github.com/user-attachments/assets/0dadef14-2bb9-4fa3-9b73-cbae04c05c8d" />

Hasil dari form cek bilangan genap
<img width="1919" height="910" alt="image" src="https://github.com/user-attachments/assets/96f66820-cd6e-4ea9-9f79-ff3ed36bafb4" />

---

### 6. Array Multidimensi
Menampilkan data 10 mahasiswa (NIM, Nama, Umur, Program Studi) menggunakan array multidimensi.  
Data ditampilkan dalam tabel HTML dengan looping `foreach`.  
<img width="1919" height="908" alt="image" src="https://github.com/user-attachments/assets/29fb10bd-ce27-48be-ab09-741f3142d536" />

---

### 7. Array + Kondisi
Melanjutkan data mahasiswa dengan atribut nilai (0–100).  
Menggunakan kondisi `if` untuk menentukan status Lulus (≥70) atau Tidak Lulus (<70).  
Data ditampilkan dalam tabel HTML rapi.  
<img width="1917" height="912" alt="image" src="https://github.com/user-attachments/assets/3f728db0-77de-4a18-aaf8-91745cfac79a" />

---

## 📖 Penutup
Project ini dibuat untuk memenuhi **Tugas 2 Praktik PHP Dasar (Looping & Array)** dengan tujuan melatih penggunaan:  
- Perulangan (`for`, `while`, `foreach`),  
- Array (indexed, associative, multidimensi),  
- Penggabungan looping dan array untuk menampilkan data,  
- Serta penerapan kondisi sederhana pada data array.   

Terima kasih telah membaca dokumentasi ini 🙌  
Jika ada saran atau masukan, sangat terbuka untuk pengembangan lebih lanjut.
