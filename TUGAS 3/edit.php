<?php
session_start();
include "koneksi.php";

// Cek login
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}

// Ambil ID mahasiswa dari URL
$id = $_GET['id'];
$data = $conn->query("SELECT * FROM mahasiswa WHERE id='$id'")->fetch_assoc();

// Jika data tidak ditemukan
if (!$data) {
  echo "<script>alert('Data tidak ditemukan!');window.location='index.php';</script>";
  exit;
}

// Proses update data
if (isset($_POST['simpan'])) {
  $nama = $_POST['nama'];
  $prodi = $_POST['prodi'];
  $semester = $_POST['semester'];
  $alamat = $_POST['alamat'];

  $conn->query("UPDATE mahasiswa SET 
                nama='$nama', 
                prodi='$prodi', 
                semester='$semester',
                alamat='$alamat' 
                WHERE id='$id'");
  echo "<script>alert('Data berhasil diperbarui!');window.location='index.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Edit Mahasiswa</title>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
<style>
body {
  font-family: 'Montserrat', sans-serif;
  margin: 0;
  background: linear-gradient(135deg, #f8e1f4, #d183a9);
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
}

a.kembali {
  position: absolute;
  top: 20px;
  left: 20px;
  text-decoration: none;
  color: #fff;
  font-weight: 700;
  font-size: 1.1rem;
  background: #3A345B;
  padding: 10px 20px;
  border-radius: 8px;
  transition: 0.3s;
  box-shadow: 0 4px 10px rgba(0,0,0,0.2);
}
a.kembali:hover {
  background: #2a2740;
  transform: translateX(-3px);
}

.container {
  background: #fff;
  padding: 50px;
  border-radius: 20px;
  box-shadow: 0 10px 30px rgba(0,0,0,0.15);
  text-align: center;
  max-width: 600px;
  width: 95%;
}

h2 {
  margin-bottom: 30px;
  color: #3A345B;
  font-size: 2rem;
}

form {
  display: flex;
  flex-direction: column;
  align-items: center;
}

label {
  display: block;
  width: 90%;
  text-align: left;
  font-weight: bold;
  margin-top: 12px;
  color: #3A345B;
}

input, select, textarea {
  width: 90%;
  padding: 12px;
  margin-top: 5px;
  border-radius: 10px;
  border: 1px solid #bbb;
  font-size: 1rem;
  transition: 0.3s;
}

input:focus, select:focus, textarea:focus {
  border-color: #3A345B;
  outline: none;
  box-shadow: 0 0 6px rgba(58, 52, 91, 0.5);
}

button {
  background: #3A345B;
  color: #fff;
  border: none;
  padding: 12px 30px;
  border-radius: 10px;
  cursor: pointer;
  font-weight: bold;
  margin-top: 25px;
  font-size: 1.05rem;
  transition: 0.3s;
  box-shadow: 0 4px 10px rgba(0,0,0,0.2);
}
button:hover {
  background: #2a2740;
  transform: translateY(-2px);
}
</style>
</head>
<body>

<a href="index.php" class="kembali">← Kembali</a>

<div class="container">
  <h2>Edit Data Mahasiswa</h2>

  <form method="POST">
    <label>ID</label>
    <input type="text" name="id" value="<?= $data['id'] ?>" readonly>

    <label>Nama</label>
    <input type="text" name="nama" value="<?= $data['nama'] ?>" required>

    <label>Program Studi</label>
    <select name="prodi" required>
      <option value="Teknologi Informasi" <?= ($data['prodi'] == 'Teknologi Informasi') ? 'selected' : '' ?>>Teknologi Informasi</option>
    </select>

    <label>Semester</label>
    <input type="number" name="semester" value="<?= $data['semester'] ?>" required>

    <label>Alamat</label>
    <textarea name="alamat" rows="3" required><?= $data['alamat'] ?></textarea>

    <button type="submit" name="simpan">Simpan Perubahan</button>
  </form>
</div>

</body>
</html>
