<?php
$harga = [
    "Buku Tulis"     => 5000,
    "Pulpen"         => 3000,
    "Penggaris"      => 4000,
    "Penghapus"      => 2000,
    "Pensil 2B"      => 3500,
    "Spidol"         => 8000,
    "Stabilo"        => 10000,
    "Map Plastik"    => 2500,
    "Binder"         => 15000,
    "Sticky Notes"   => 7000,
    "Amplop Cokelat" => 1500,
    "Kalkulator"     => 55000
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Daftar Harga Barang</title>
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
  align-items: flex-start; /* agar margin atas terlihat */
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
  max-width: 700px;
  width: 90%;
  background: #fff;
  padding: 50px 40px;
  margin: 60px auto;  /* spasi atas-bawah */
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
  <h2>Daftar Harga Barang</h2>
  <table>
    <tr><th>Nama Barang</th><th>Harga (Rp)</th></tr>
    <?php foreach ($harga as $nama => $h): ?>
      <tr>
        <td><?= htmlspecialchars($nama) ?></td>
        <td><?= number_format($h, 0, ",", ".") ?></td>
      </tr>
    <?php endforeach; ?>
  </table>
</div>
</body>
</html>
