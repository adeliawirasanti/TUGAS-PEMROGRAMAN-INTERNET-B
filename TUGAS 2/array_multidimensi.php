<?php
$mahasiswa = [
    ["nim"=>"2405551001","nama"=>"Adel","umur"=>19,"prodi"=>"Teknologi Informasi"],
    ["nim"=>"2405551002","nama"=>"Bima","umur"=>20,"prodi"=>"Sistem Informasi"],
    ["nim"=>"2405551003","nama"=>"Clara","umur"=>21,"prodi"=>"Teknik Informatika"],
    ["nim"=>"2405551004","nama"=>"Dewi","umur"=>19,"prodi"=>"Ilmu Komputer"],
    ["nim"=>"2405551005","nama"=>"Eka","umur"=>22,"prodi"=>"Teknologi Informasi"],
    ["nim"=>"2405551006","nama"=>"Fajar","umur"=>20,"prodi"=>"Sistem Informasi"],
    ["nim"=>"2405551007","nama"=>"Gina","umur"=>21,"prodi"=>"Teknik Informatika"],
    ["nim"=>"2405551008","nama"=>"Hadi","umur"=>19,"prodi"=>"Ilmu Komputer"],
    ["nim"=>"2405551009","nama"=>"Indah","umur"=>22,"prodi"=>"Teknologi Informasi"],
    ["nim"=>"2405551010","nama"=>"Joko","umur"=>20,"prodi"=>"Sistem Informasi"],
    ["nim"=>"2405551011","nama"=>"Kirana","umur"=>21,"prodi"=>"Teknik Informatika"],
    ["nim"=>"2405551012","nama"=>"Leo","umur"=>20,"prodi"=>"Ilmu Komputer"],
    ["nim"=>"2405551013","nama"=>"Maya","umur"=>19,"prodi"=>"Teknologi Informasi"],
    ["nim"=>"2405551014","nama"=>"Niko","umur"=>22,"prodi"=>"Sistem Informasi"],
    ["nim"=>"2405551015","nama"=>"Olivia","umur"=>21,"prodi"=>"Teknik Informatika"],
    ["nim"=>"2405551016","nama"=>"Pandu","umur"=>20,"prodi"=>"Ilmu Komputer"],
    ["nim"=>"2405551017","nama"=>"Qori","umur"=>23,"prodi"=>"Teknologi Informasi"],
    ["nim"=>"2405551018","nama"=>"Rama","umur"=>19,"prodi"=>"Sistem Informasi"],
    ["nim"=>"2405551019","nama"=>"Sinta","umur"=>20,"prodi"=>"Teknik Informatika"],
    ["nim"=>"2405551020","nama"=>"Tio","umur"=>21,"prodi"=>"Ilmu Komputer"],
    ["nim"=>"2405551021","nama"=>"Uli","umur"=>22,"prodi"=>"Teknologi Informasi"],
    ["nim"=>"2405551022","nama"=>"Vino","umur"=>20,"prodi"=>"Sistem Informasi"],
    ["nim"=>"2405551023","nama"=>"Wulan","umur"=>21,"prodi"=>"Teknik Informatika"],
    ["nim"=>"2405551024","nama"=>"Xander","umur"=>19,"prodi"=>"Ilmu Komputer"],
    ["nim"=>"2405551025","nama"=>"Yuni","umur"=>22,"prodi"=>"Teknologi Informasi"]
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Array Multidimensi</title>
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
  max-width: 950px;
  width: 95%;
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
table {
  width: 100%;
  border-collapse: collapse;
  font-size: 1.1rem;
}
th, td {
  padding: 12px;
  border: 1px solid #ccc;
  text-align: center;
}
th {
  background: #3A345B;
  color: #fff;
}
</style>
</head>
<body>
<a href="index.php" class="kembali">← Kembali</a>
<div class="container">
  <h2>Data Mahasiswa</h2>
  <table>
    <tr>
      <th>NIM</th>
      <th>Nama</th>
      <th>Umur</th>
      <th>Program Studi</th>
    </tr>
    <?php foreach ($mahasiswa as $m): ?>
      <tr>
        <td><?= htmlspecialchars($m['nim']) ?></td>
        <td><?= htmlspecialchars($m['nama']) ?></td>
        <td><?= htmlspecialchars($m['umur']) ?></td>
        <td><?= htmlspecialchars($m['prodi']) ?></td>
      </tr>
    <?php endforeach; ?>
  </table>
</div>
</body>
</html>
