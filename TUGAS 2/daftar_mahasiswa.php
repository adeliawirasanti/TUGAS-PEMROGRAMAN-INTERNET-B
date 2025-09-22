<?php
$mahasiswa = [
    "2405551001" => "Adel",
    "2405551002" => "Bima",
    "2405551003" => "Clara",
    "2405551004" => "Dewi",
    "2405551005" => "Eka",
    "2405551006" => "Fajar",
    "2405551007" => "Gina",
    "2405551008" => "Hadi",
    "2405551009" => "Indah",
    "2405551010" => "Joko",
    "2405551011" => "Kirana",
    "2405551012" => "Leo"
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Daftar Mahasiswa</title>
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
  margin: 60px auto;  /* >>> spasi atas-bawah <<< */
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
  <h2>Daftar Mahasiswa</h2>
  <table>
    <tr><th>NIM</th><th>Nama</th></tr>
    <?php foreach ($mahasiswa as $nim => $nama): ?>
      <tr>
        <td><?= htmlspecialchars($nim) ?></td>
        <td><?= htmlspecialchars($nama) ?></td>
      </tr>
    <?php endforeach; ?>
  </table>
</div>
</body>
</html>
