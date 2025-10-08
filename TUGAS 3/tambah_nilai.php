<?php
session_start();
include "koneksi.php";
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}

$nim = $_GET['nim'];

if (isset($_POST['simpan'])) {
  $kode_mk = $_POST['kode_mk'];
  $nilai_angka = $_POST['nilai_angka'];
  $nilai_huruf = strtoupper($_POST['nilai_huruf']);
  $keterangan = $_POST['keterangan'];

  $sql = "INSERT INTO nilai (nim, kode_mk, nilai_angka, nilai_huruf, keterangan)
          VALUES ('$nim', '$kode_mk', '$nilai_angka', '$nilai_huruf', '$keterangan')";
  if ($conn->query($sql)) {
    echo "<script>alert('Nilai berhasil ditambahkan!'); window.location='nilai.php?nim=$nim';</script>";
  } else {
    echo "<script>alert('Gagal menambahkan nilai!');</script>";
  }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Tambah Nilai</title>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
<style>
body {
  font-family: 'Montserrat', sans-serif;
  background: linear-gradient(135deg, #f8e1f4, #d183a9);
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  margin: 0;
}

/* Tombol kembali kiri atas */
a.kembali {
  position: absolute;
  top: 20px;
  left: 20px;
  text-decoration: none;
  color: #fff;
  background: #3A345B;
  padding: 10px 20px;
  border-radius: 8px;
  font-weight: 700;
  font-size: 1.1rem;
  box-shadow: 0 4px 10px rgba(0,0,0,0.2);
  transition: 0.3s;
}
a.kembali:hover {
  background: #2a2740;
  transform: translateX(-3px);
}

.container {
  background: #fff;
  padding: 50px;
  border-radius: 20px;
  width: 500px;
  box-shadow: 0 10px 30px rgba(0,0,0,0.15);
  text-align: center;
}

h2 {
  color: #3A345B;
  margin-bottom: 20px;
}

input, select {
  width: 100%;
  padding: 12px;
  margin-top: 10px;
  border-radius: 8px;
  border: 1px solid #aaa;
  font-size: 1rem;
}

button {
  background: #3A345B;
  color: #fff;
  border: none;
  padding: 12px 25px;
  border-radius: 8px;
  cursor: pointer;
  font-size: 1rem;
  margin-top: 20px;
  transition: 0.3s;
}
button:hover {
  background: #2a2740;
}
</style>
</head>
<body>

<!-- Tombol kembali -->
<a href="nilai.php?nim=<?= $nim ?>" class="kembali">← Kembali</a>

<div class="container">
  <h2>Tambah Nilai</h2>
  <form method="post">
    <input type="text" name="kode_mk" placeholder="Nama Mata Kuliah" required>
    <input type="number" name="nilai_angka" placeholder="Nilai Angka (0-100)" min="0" max="100" required>
    <input type="text" name="nilai_huruf" placeholder="Nilai Huruf (A-E)" maxlength="1" required>
    <input type="text" name="keterangan" placeholder="Keterangan (Lulus/Tidak Lulus)" required>
    <button type="submit" name="simpan">Simpan Nilai</button>
  </form>
</div>

</body>
</html>
