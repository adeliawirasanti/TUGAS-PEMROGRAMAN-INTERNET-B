<?php
session_start();
include "koneksi.php";
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}

$nim = $_GET['nim'];
$mhs = $conn->query("SELECT * FROM mahasiswa WHERE nim='$nim'")->fetch_assoc();

$data = $conn->query("SELECT n.id_nilai, mk.nama_mk, mk.sks, n.nilai_angka, n.nilai_huruf, n.keterangan
                      FROM nilai n 
                      JOIN matakuliah mk ON n.kode_mk = mk.kode_mk
                      WHERE n.nim='$nim'
                      ORDER BY mk.kode_mk");

$total_sks = 0;
$total_bobot = 0;
$nilai_data = [];
while ($row = $data->fetch_assoc()) {
  $nilai_data[] = $row;
  $total_sks += $row['sks'];
  $total_bobot += ($row['nilai_angka'] / 25) * $row['sks'];
}
$ips = $total_sks > 0 ? round($total_bobot / $total_sks, 2) : 0;
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Nilai Mahasiswa</title>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
<style>
body {
  font-family: 'Montserrat', sans-serif;
  margin: 0;
  background: linear-gradient(135deg, #f8e1f4, #d183a9);
  min-height: 100vh;
}
.container {
  max-width: 850px;
  background: #fff;
  margin: 60px auto;
  padding: 40px;
  border-radius: 20px;
  box-shadow: 0 10px 30px rgba(0,0,0,0.15);
  text-align: center;
}
h2 {
  color: #3A345B;
  font-size: 2rem;
  margin-bottom: 10px;
  text-align: center;
}
table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 20px;
  font-size: 1rem;
}
th, td {
  border: 1px solid #ccc;
  padding: 10px;
  text-align: center;
}
th {
  background: #3A345B;
  color: white;
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
.aksi-container {
  display: flex;
  justify-content: center;
  gap: 8px;
}
.btn-edit {
  background: #4C5BD4;
  color: #fff;
  padding: 6px 14px;
  border-radius: 6px;
  text-decoration: none;
  font-weight: 600;
  transition: 0.2s;
}
.btn-edit:hover { background: #3541a7; }
.btn-hapus {
  background: #D9534F;
  color: #fff;
  padding: 6px 14px;
  border-radius: 6px;
  text-decoration: none;
  font-weight: 600;
  transition: 0.2s;
}
.btn-hapus:hover { background: #b52b27; }
.btn-tambah {
  background: #3A345B;
  color: #fff;
  padding: 10px 18px;
  border-radius: 8px;
  text-decoration: none;
  font-weight: bold;
  transition: 0.3s;
  float: right;
  margin-top: 10px;
}
.btn-tambah:hover {
  background: #3A345B;
}
.ipk-box {
  background: #f8e1f4;
  padding: 15px;
  margin-top: 25px;
  border-radius: 10px;
  font-weight: bold;
  color: #3A345B;
  box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}
</style>
</head>
<body>
<a href="index.php" class="kembali">← Kembali</a>
<div class="container">
  <h2>Nilai Mahasiswa</h2>
  <p><b><?= $mhs['nama'] ?></b> (<?= $mhs['nim'] ?>)</p>

  <table>
    <tr>
      <th>No</th>
      <th>Mata Kuliah</th>
      <th>SKS</th>
      <th>Nilai Angka</th>
      <th>Nilai Huruf</th>
      <th>Keterangan</th>
      <th>Aksi</th>
    </tr>
    <?php
    $no = 1;
    foreach ($nilai_data as $row) {
      echo "<tr>
        <td>$no</td>
        <td>{$row['nama_mk']}</td>
        <td>{$row['sks']}</td>
        <td>{$row['nilai_angka']}</td>
        <td>{$row['nilai_huruf']}</td>
        <td>{$row['keterangan']}</td>
        <td>
          <div class='aksi-container'>
            <a class='btn-edit' href='edit_nilai.php?id_nilai={$row['id_nilai']}'>Edit</a>
            <a class='btn-hapus' href='hapus_nilai.php?id_nilai={$row['id_nilai']}&nim=$nim' onclick=\"return confirm('Yakin ingin menghapus nilai ini?');\">Hapus</a>
          </div>
        </td>
      </tr>";
      $no++;
    }
    ?>
  </table>

  <!-- Tombol Tambah Mata Kuliah sekarang berada di bawah tabel, di kanan -->
  <a href="tambah_nilai.php?nim=<?= $nim ?>" class="btn-tambah">Tambah Mata Kuliah</a>

  <div style="clear: both;"></div>
  <div class="ipk-box">
    Total SKS: <?= $total_sks ?> <br>
    IPS Semester: <?= $ips ?>
  </div>
</div>
</body>
</html>
