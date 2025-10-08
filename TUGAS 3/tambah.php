<?php 
session_start();
include "koneksi.php";
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}

$pesan = "";
$warna  = "";

if (isset($_POST['simpan'])) {
  $nim = $_POST['nim'];
  $nama = $_POST['nama'];
  $prodi = $_POST['prodi'];
  $semester = $_POST['semester'];
  $alamat = $_POST['alamat'];

  $stmt = $conn->prepare("INSERT INTO mahasiswa (nim, nama, prodi, semester, alamat) VALUES (?, ?, ?, ?, ?)");
  $stmt->bind_param("sssis", $nim, $nama, $prodi, $semester, $alamat);
  if ($stmt->execute()) {
    $pesan = "✅ Data berhasil disimpan!";
    $warna = "#d4edda"; // hijau
  } else {
    $pesan = "❌ Gagal menyimpan data: " . $stmt->error;
    $warna = "#f8d7da"; // merah
  }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Tambah Mahasiswa</title>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
<style>
body {
  font-family: 'Montserrat', sans-serif;
  margin: 0;
  padding: 0;
  background: linear-gradient(135deg, #f8e1f4, #d183a9);
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: flex-start;
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
  max-width: 600px;
  width: 90%;
  background: #fff;
  padding: 50px 40px;
  margin: 60px auto;
  text-align: center;
  border-radius: 20px;
  box-shadow: 0 10px 30px rgba(0,0,0,0.15);
}
h2 {
  font-size: 2rem;
  margin-bottom: 25px;
  color: #3A345B;
}
input, textarea {
  padding: 10px;
  width: 80%;
  margin: 10px 0;
  border-radius: 8px;
  border: 1px solid #aaa;
}
input[type=submit] {
  background: #3A345B;
  color: #fff;
  border: none;
  padding: 10px 25px;
  border-radius: 8px;
  font-weight: bold;
  cursor: pointer;
}
input[type=submit]:hover {
  background: #2a2740;
}
.alert-box {
  padding: 15px 20px;
  border-radius: 10px;
  margin-bottom: 20px;
  font-weight: bold;
  color: #155724; /* default text hijau */
  box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}
.alert-success { color: #155724; }
.alert-fail { color: #721c24; }
</style>
</head>
<body>
<a href="index.php" class="kembali">← Kembali</a>
<div class="container">
  <h2>Tambah Mahasiswa</h2>

  <?php if ($pesan != ""): ?>
    <div class="alert-box" style="background: <?= $warna ?>;">
      <?= $pesan ?>
    </div>
  <?php endif; ?>

  <form method="post" onsubmit="return validasi()">
    <input type="text" name="nim" id="nim" placeholder="NIM"><br>
    <input type="text" name="nama" id="nama" placeholder="Nama"><br>
    <input type="text" name="prodi" id="prodi" placeholder="Program Studi" value="Teknologi Informasi" readonly><br>
    <input type="number" name="semester" id="semester" placeholder="Semester"><br>
    <textarea name="alamat" id="alamat" placeholder="Alamat"></textarea><br>
    <input type="submit" name="simpan" value="Simpan">
  </form>
  <p id="pesan" style="color:red; font-weight:bold;"></p>
</div>

<script>
function validasi() {
  let nim = document.querySelector("#nim").value.trim();
  let nama = document.querySelector("#nama").value.trim();
  let semester = document.querySelector("#semester").value.trim();
  let alamat = document.querySelector("#alamat").value.trim();
  let pesan = document.querySelector("#pesan");

  if (nim.length < 5) {
    pesan.innerHTML = "NIM minimal 5 karakter!";
    return false;
  }
  if (nama === "" || semester === "" || alamat === "") {
    pesan.innerHTML = "Semua kolom wajib diisi!";
    return false;
  }
  return true;
}
</script>
</body>
</html>
