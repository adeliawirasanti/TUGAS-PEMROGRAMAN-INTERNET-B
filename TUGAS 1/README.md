# Tugas 1 Praktik PHP Dasar: **Variabel, Operator, dan Kondisi**

Repositori ini berisi kode dan dokumentasi untuk **Tugas Praktik Pemrograman Internet (PHP Dasar)** dengan fokus pada **variabel, operator, dan kondisi** dalam PHP.    
Seluruh project dibuat menggunakan **PHP murni (tanpa framework)** dengan tampilan HTML & CSS pastel.

## 🎯 Tujuan Tugas 1
- Memahami penggunaan **variabel** dan tipe data dalam PHP.  
- Memahami penerapan **operator aritmatika, logika, dan perbandingan**.  
- Mampu menggunakan **struktur kontrol sederhana** (`if`, `if-else`, `switch`).  
- Mampu membuat **form HTML** dan mengolah input menggunakan **PHP**.  
- Mengimplementasikan konsep **input → proses → output** melalui aplikasi sederhana berbasis form.  

---

## 📌 Fitur / Halaman
1. **Menu Utama (`index.php`)**
   - Halaman awal sebagai navigasi ke semua fitur.
   - Berisi tombol/link menuju Form Ucapan, Kalkulator, Bilangan Ganjil/Genap, Nilai Huruf, Menu Makanan, dan Biodata.

2. **Form Ucapan (`form_ucapan.php`)**
   - Input nama pengguna.
   - Menampilkan ucapan selamat datang sesuai nama yang dimasukkan.

3. **Kalkulator Sederhana (`kalkulator.php`)**
   - Input 2 angka (boleh negatif atau desimal).
   - Pilih operator (+, -, ×, ÷).
   - Validasi input (tidak boleh kosong, harus angka).
   - Validasi khusus pembagian nol.
   - Menampilkan hasil perhitungan dengan keterangan.

4. **Bilangan Ganjil/Genap (`ganjil_genap.php`)**
   - Input satu angka.
   - Validasi input harus angka.
   - Menentukan apakah angka tersebut ganjil atau genap.

5. **Nilai Huruf (`nilai_huruf.php`)**
   - Input nilai angka (0–100).
   - Validasi input harus angka dalam rentang 0–100.
   - Mengonversi nilai angka menjadi nilai huruf (A, B, C, D, atau E).

6. **Form Menu Makanan (`menu_makanan.php`)**
   - Pilih menu makanan (Nasi Goreng, Soto, Mie Ayam).
   - Input jumlah porsi.
   - Hitung total harga dengan format `Rp`.
   - Validasi input (jumlah harus angka bulat positif).
   - Menampilkan rincian pembelian.

7. **Form Biodata (`biodata.php`)**
   - Input nama, umur, jenis kelamin, dan alamat.
   - Validasi input agar tidak kosong.
   - Menampilkan hasil biodata yang sudah diisi.

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

- **Warna**:  
  - Latar putih polos untuk menjaga kesederhanaan.  
  - Aksen ungu gelap `#3A345B` digunakan pada header, judul form, dan teks penting.  
  - Tombol/elemen aksi menggunakan warna pink `#D183A9` dengan teks putih.  

- **Font**:  
  - **Montserrat** (regular & bold) digunakan di seluruh halaman untuk tampilan modern dan konsisten.  

- **Layout**:  
  - **Menu Utama** menggunakan **Flexbox** agar tombol navigasi berada di tengah halaman.  
  - Setiap halaman konten ditampilkan dalam **container terpusat** dengan border tipis dan bayangan lembut.  

- **Komponen**:  
  - **Form Input**: lebar penuh, bersudut membulat, dan memiliki padding agar nyaman digunakan.  
  - **Tombol**: berwarna pink dengan efek hover berubah ke ungu tua; tombol **← Kembali** selalu tersedia di kiri atas halaman.  
  - **Output**: hasil perhitungan atau biodata ditampilkan di tengah halaman dengan teks berwarna ungu gelap.  
  - **Pesan Validasi**: ditampilkan dalam warna merah agar mudah dibaca ketika input salah atau kosong.  

- **Output Halaman**:  
  - **Form Ucapan** → menampilkan ucapan personal di tengah halaman.  
  - **Kalkulator** → menampilkan hasil operasi dengan keterangan yang jelas, error pembagian nol diberi pesan khusus.  
  - **Bilangan Ganjil/Genap** → hasil berupa keterangan angka ganjil/genap ditampilkan di bawah form.  
  - **Nilai Huruf** → hasil konversi nilai angka ke huruf (A–E) muncul di area hasil.  
  - **Menu Makanan** → rincian pembelian (menu, porsi, total harga) ditampilkan dalam kotak hasil.  
  - **Biodata** → hasil biodata tersusun rapi dalam format kalimat.  

Semua **CSS ditulis inline di masing-masing file PHP**, sehingga project dapat dijalankan langsung tanpa konfigurasi tambahan.

--- 

## 🚀 Cara Menjalankan

1. Pastikan **XAMPP** (Apache + PHP 8) sudah terpasang dan dijalankan.  
2. Pastikan folder berada di C:\xampp\htdocs\Tugas Prognet
3. Jalankan dan buka pada browser dengan alamat http://localhost/Tugas%20Prognet/TUGAS%201/index.php

---

## 📷 Tampilan Project

Berikut adalah tampilan dari project PHP yang sudah dibuat:

---

### 1. Menu Utama (Index)
Halaman awal untuk navigasi ke semua fitur (Form Ucapan, Kalkulator, Bilangan Ganjil/Genap, Nilai Huruf, Menu Makanan, dan Biodata).
<img width="1919" height="910" alt="image" src="https://github.com/user-attachments/assets/d8c9e8f6-977f-4b59-8159-07ccfc73375c" />

---

### 2. Form Ucapan
Form untuk memasukkan nama dan menampilkan ucapan selamat datang.
<img width="1919" height="969" alt="image" src="https://github.com/user-attachments/assets/29bf8351-89ee-494b-b337-b887fdfd1b44" />

Hasil dari form ucapan
<img width="1919" height="967" alt="image" src="https://github.com/user-attachments/assets/2c2f6424-eb96-4fbd-a7dd-95f56f875de1" />

---

### 3. Kalkulator Sederhana
Input dua angka (boleh desimal/negatif), pilih operator (tambah, kurang, kali, bagi), dengan validasi pembagian nol.
<img width="1919" height="965" alt="image" src="https://github.com/user-attachments/assets/a24867ec-f109-448e-bd62-a9a6544459f8" />

Contoh hasil perhitungan kalkulator
<img width="1917" height="968" alt="image" src="https://github.com/user-attachments/assets/444c89bb-91b4-41d3-911b-8c7ed36b815d" />

---

### 4. Bilangan Ganjil / Genap
Form untuk memasukkan angka lalu menampilkan apakah angka tersebut ganjil atau genap.
<img width="1919" height="968" alt="image" src="https://github.com/user-attachments/assets/04309b0e-d5b1-4296-9155-8e9998dee49b" />

Hasil dari form cek angka
<img width="1919" height="967" alt="image" src="https://github.com/user-attachments/assets/ed7f7206-ec97-4bef-9a45-81f098a98cf0" />

---

### 5. Nilai Huruf
Form untuk memasukkan nilai angka (0–100) dan mengonversinya ke nilai huruf (A, B, C, D, E) sesuai ketentuan.
<img width="1919" height="970" alt="image" src="https://github.com/user-attachments/assets/63b2b984-41f6-455f-bbc0-49d108cac7f8" />

Hasil dari form cek nilai huruf
<img width="1919" height="966" alt="image" src="https://github.com/user-attachments/assets/b13694a6-75b2-4ddc-a9ec-bbb5383cc2a0" />

---

### 6. Menu Makanan
Form untuk memilih menu makanan (Nasi Goreng, Soto, Mie Ayam), mengisi jumlah porsi, dan menghitung total harga.
<img width="1919" height="970" alt="image" src="https://github.com/user-attachments/assets/5c52f7af-ab39-4630-9d2d-a08ef89227b7" />

Hasil dari form menu makanan
<img width="1919" height="971" alt="image" src="https://github.com/user-attachments/assets/10e75398-71bc-4475-9bfc-b847a630ef42" />

---

### 7. Biodata
Form untuk mengisi nama, umur, jenis kelamin, dan alamat dengan validasi input.
<img width="1917" height="970" alt="image" src="https://github.com/user-attachments/assets/e14ae1ae-9041-4c1d-8898-b170a4936377" />

Hasil dari form biodata
<img width="1919" height="968" alt="image" src="https://github.com/user-attachments/assets/68438c73-088c-4814-bf63-72341e5a6781" />

---

## 📖 Penutup
Project ini dibuat untuk memenuhi **Tugas 1 Praktik PHP Dasar** dengan tujuan melatih penggunaan **variabel, operator, dan kondisi** dalam bahasa pemrograman PHP.  

Melalui project ini, diharapkan pemahaman dasar mengenai:
- Pengolahan input dari form,
- Validasi data,
- Operasi perhitungan sederhana,
- Dan penerapan kondisi dalam logika program  
 
Terima kasih telah membaca dokumentasi ini 🙌  
Jika ada saran atau masukan, sangat terbuka untuk pengembangan lebih lanjut.  
