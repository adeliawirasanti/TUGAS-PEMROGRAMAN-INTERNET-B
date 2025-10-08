<?php
session_start();
include "koneksi.php";
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}

$id_nilai = $_GET['id_nilai']; 
$nilai = $conn->query("SELECT n.*, mk.nama_mk 
                      FROM nilai n
                      JOIN matakuliah mk ON n.kode_mk = mk.kode_mk
                      WHERE n.id_nilai='$id_nilai'")->fetch_assoc();

if (isset($_POST['simpan'])) {
  $angka = $_POST['nilai_angka'];
  $huruf = $_POST['nilai_huruf'];
  $ket   = $_POST['keterangan'];

  $conn->query("UPDATE nilai 
                SET nilai_angka='$angka', nilai_huruf='$huruf', keterangan='$ket' 
                WHERE id_nilai='$id_nilai'");

  echo "<script>alert('✅ Nilai berhasil diupdate!');window.location='nilai.php?nim={$nilai['nim']}';</script>";
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Edit Nilai</title>
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
label {
  display: block;
  text-align: left;
  margin-top: 10px;
  font-weight: 600;
  color: #3A345B;
}
input, select {
  width: 100%;
  padding: 10px;
  margin-top: 5px;
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
button:hover { background: #2a2740; }
</style>
</head>
<body>

<!-- Tombol kembali kiri atas -->
<a href="nilai.php?nim=<?= $nilai['nim'] ?>" class="kembali">← Kembali</a>

<div class="container">
  <h2>Edit Nilai</h2>
  <form method="POST">
    <p><b><?= $nilai['nama_mk'] ?></b></p>

    <label>Nilai Angka</label>
    <input type="number" name="nilai_angka" value="<?= $nilai['nilai_angka'] ?>" required>

    <label>Nilai Huruf</label>
    <input type="text" name="nilai_huruf" value="<?= $nilai['nilai_huruf'] ?>" required>

    <label>Keterangan</label>
    <input type="text" name="keterangan" value="<?= $nilai['keterangan'] ?>">

    <button type="submit" name="simpan">Simpan Perubahan</button>
  </form>
</div>

</body>
</html>
