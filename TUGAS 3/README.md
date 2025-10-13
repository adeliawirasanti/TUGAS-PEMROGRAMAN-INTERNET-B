# Tugas 3 Praktik PHP - MySQL & JavaScript Dasar: **CRUD dan DOM**

Repositori ini berisi kode dan dokumentasi untuk **Tugas Praktik Pemrograman Internet** dengan fokus pada **CRUD PHP–MySQL** dan **JavaScript Dasar (DOM & Event Handling)**.  
Seluruh project dibuat menggunakan **PHP murni**, **MySQL**, dan **JavaScript vanilla** tanpa framework eksternal.

---

## 🎯 Tujuan Tugas
- Memahami cara menghubungkan PHP dengan **MySQL** menggunakan `mysqli` atau `PDO`.  
- Mampu menjalankan query dasar: `SELECT`, `INSERT`, `UPDATE`, `DELETE`.  
- Membuat **CRUD** sederhana berbasis form input.  
- Memahami **variabel dan fungsi** dalam JavaScript (`let`, `const`, `function`).  
- Menerapkan **event handler** seperti `onclick`, `oninput`, dan `onsubmit`.  
- Memanipulasi **DOM** dengan `innerHTML` dan `querySelector`.  
- Menggunakan **AJAX (fetch / XMLHttpRequest)** untuk komunikasi client–server.  
- Mengelola data dengan format **JSON** untuk integrasi PHP → JS.

---

## 📌 Fitur / Halaman

1. **Koneksi Database (`koneksi.php`)**  
   - Menghubungkan aplikasi dengan MySQL menggunakan `mysqli`.  
   - Menampilkan pesan error jika koneksi gagal.

2. **Daftar Mahasiswa (`index.php`)**  
   - Menampilkan data mahasiswa dari tabel `mahasiswa`.  
   - Dilengkapi dengan fitur **pencarian AJAX** (real-time search tanpa reload).  
   - Menampilkan hasil pencarian berdasarkan nama atau NIM.

3. **Tambah Mahasiswa (`tambah.php`)**  
   - Form untuk menambahkan data baru (NIM, Nama, Prodi).  
   - Validasi menggunakan **JavaScript** agar kolom tidak kosong dan NIM minimal 5 karakter.  
   - Jika valid, data akan disimpan ke database menggunakan query `INSERT`.

4. **Edit Mahasiswa (`edit.php`)**  
   - Menampilkan data mahasiswa berdasarkan `id` untuk diedit.  
   - Menggunakan query `UPDATE` untuk memperbarui data.  
   - Form divalidasi dengan JavaScript agar input tetap sesuai.

5. **Hapus Mahasiswa (`hapus.php`)**  
   - Menghapus data mahasiswa berdasarkan `id`.  
   - Dilengkapi konfirmasi sebelum penghapusan.

6. **Pencarian Mahasiswa (`cari.php`)**  
   - Menerima keyword pencarian melalui AJAX (`GET` parameter).  
   - Melakukan query `SELECT * FROM mahasiswa WHERE nama LIKE '%keyword%' OR nim LIKE '%keyword%'`.  
   - Mengembalikan hasil dalam format **JSON** untuk ditampilkan langsung ke tabel dengan JS.

7. **CRUD Nilai Mahasiswa (`nilai.php`)**  
   - Menampilkan dan mengelola data nilai per mahasiswa (relasi 1–banyak).  
   - Menambahkan, mengedit, dan menghapus nilai berdasarkan mahasiswa.  
   - Menggunakan **prepared statement mysqli** untuk keamanan query.  
   - Validasi nilai huruf dan angka dengan JavaScript.

---

## 🛠️ Tools yang Digunakan

Proyek ini dikembangkan dengan teknologi dan perangkat berikut:

- **Bahasa Pemrograman**: PHP 8 yang dijalankan menggunakan **XAMPP** sebagai lingkungan pengembangan lokal.  
- **Database**: MySQL digunakan sebagai sistem manajemen basis data untuk menyimpan data mahasiswa dan nilai.  
- **Web Server**: Apache (bawaan XAMPP) digunakan untuk mengeksekusi kode PHP dan melayani permintaan HTTP.  
- **Editor Kode**: Visual Studio Code digunakan sebagai text editor utama untuk menulis, mengedit, dan mengelola file proyek.  
- **Version Control**: Git & GitHub digunakan untuk pengelolaan versi kode, kolaborasi, dan dokumentasi repository.  
- **Browser**: Google Chrome atau Mozilla Firefox digunakan untuk menjalankan dan menguji hasil program.  

### Antarmuka dan Styling
- **HTML5** digunakan untuk membangun struktur halaman dan elemen form/tabel.  
- **CSS3** dengan palet warna pastel bernuansa ungu–pink agar tampilan lembut dan enak dipandang.  
- **Flexbox & CSS Grid** digunakan untuk tata letak menu utama yang responsif dan rata tengah.  
- **JavaScript** digunakan untuk validasi form, manipulasi DOM, serta komunikasi data melalui AJAX (fetch API).  

---

## 🎨 Desain Antarmuka

- **HTML5 + CSS3** dengan gaya lembut dan minimalis.  
- **Palet warna pastel** agar tampilan enak dipandang.  
- **Tabel Data** dengan border-collapse, header berwarna ungu gelap, teks rata tengah.  
- **Form Input**:
  - Bersudut membulat dengan bayangan halus.
  - Dilengkapi placeholder dan efek hover pada tombol submit.
- **Tombol Navigasi**:
  - Tombol aksi seperti *Edit*, *Hapus*, dan *Kembali* memiliki efek hover dan warna kontras.
- **Fitur Pencarian AJAX**:
  - Menggunakan event `oninput` sehingga hasil muncul langsung tanpa reload halaman.
- **Responsif**:
  - Layout tabel dan form tetap rapi di layar laptop atau desktop.

---

## 🚀 Cara Menjalankan

1. Pastikan **XAMPP** sudah terinstal di komputer Anda dan aktifkan **Apache** serta **MySQL** melalui XAMPP Control Panel.  
2. Buka **phpMyAdmin** melalui browser dengan alamat: http://localhost/phpmyadmin
3. Buat database baru dengan nama: kampus
4. 
4. Jalankan query SQL berikut untuk membuat tabel yang dibutuhkan:
```sql
CREATE TABLE mahasiswa (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nim VARCHAR(20),
  nama VARCHAR(50),
  prodi VARCHAR(50)
);

CREATE TABLE nilai (
  id INT AUTO_INCREMENT PRIMARY KEY,
  mahasiswa_id INT NOT NULL,
  mata_kuliah VARCHAR(50) NOT NULL,
  sks TINYINT NOT NULL,
  nilai_huruf ENUM('A','B','C','D','E') NOT NULL,
  nilai_angka DECIMAL(3,2) NOT NULL,
  FOREIGN KEY (mahasiswa_id) REFERENCES mahasiswa(id) ON DELETE CASCADE
);
```
5. Salin folder project ke dalam direktori: C:\xampp\htdocs\Tugas Prognet\TUGAS 3\
6. Jalankan aplikasi melalui browser dengan mengetik alamat: http://localhost/Tugas%20Prognet/TUGAS%203/index.php
7. Setelah halaman utama terbuka, Anda dapat mencoba fitur-fitur berikut:
   - ➕ **Tambah Mahasiswa**  
     Mengisi form untuk menambahkan data baru ke database.  
     Data yang dimasukkan akan divalidasi dengan JavaScript sebelum disimpan menggunakan query `INSERT`.
   - ✏️ **Edit Mahasiswa**  
     Mengubah data mahasiswa yang sudah ada.  
     Sistem akan menampilkan data lama secara otomatis ke dalam form dan memperbaruinya dengan query `UPDATE`.
   - ❌ **Hapus Mahasiswa**  
     Menghapus data mahasiswa berdasarkan ID.  
     Dilengkapi konfirmasi sebelum eksekusi query `DELETE`.
   - 🔍 **Pencarian AJAX**  
     Mencari mahasiswa berdasarkan nama atau NIM tanpa reload halaman.  
     Menggunakan `fetch()` untuk mengirim keyword ke `cari.php` dan menampilkan hasilnya secara real-time.
   - 📘 **CRUD Nilai Mahasiswa**  
     Mengelola data nilai per mahasiswa (tambah, edit, hapus) menggunakan **prepared statement mysqli**.  
     Dilengkapi validasi form menggunakan JavaScript dan relasi tabel `mahasiswa` – `nilai`.
8. Pastikan seluruh file PHP dan koneksi database (`koneksi.php`) sudah tersimpan dengan benar agar aplikasi berjalan tanpa error.

---

## 📷 Tampilan Project

Berikut adalah tampilan dari project PHP yang sudah dibuat:

---


## 📖 Penutup
Project ini dibuat untuk memenuhi **Tugas 3 Praktik PHP - MySQL & JavaScript Dasar:CRUD dan DOM** dengan tujuan melatih penggunaan: 

- Melatih penggunaan **CRUD (Create, Read, Update, Delete)** menggunakan PHP dan MySQL.  
- Menerapkan **validasi form dan manipulasi DOM** dengan JavaScript.  
- Memahami **komunikasi asinkron** antara client dan server menggunakan **AJAX** dan **JSON**.  
- Mengintegrasikan konsep **frontend (HTML, CSS, JS)** dan **backend (PHP, MySQL)** dalam satu aplikasi web dinamis.  

Dengan menyelesaikan tugas ini, mahasiswa diharapkan dapat memahami alur kerja aplikasi web berbasis PHP secara menyeluruh — mulai dari pengolahan data di server, validasi input di sisi client, hingga tampilan data secara real-time di browser.   

Terima kasih telah membaca dokumentasi ini 🙌  
Jika ada saran atau masukan, sangat terbuka untuk pengembangan lebih lanjut.
