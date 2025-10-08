<?php
session_start();
include "koneksi.php";

// Cegah akses langsung tanpa login
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}
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
  align-items: flex-start;
}

/* Tombol kiri atas */
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

/* Tombol logout di kanan */
a.logout {
  position: absolute;
  top: 20px;
  right: 20px;
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
a.logout:hover {
  background: #2a2740;
  transform: translateX(3px);
}

/* Kontainer utama */
.container {
  max-width: 1000px;
  width: 95%;
  background: #fff;
  padding: 40px;
  margin: 80px auto;
  text-align: center;
  border-radius: 20px;
  box-shadow: 0 10px 30px rgba(0,0,0,0.15);
}

h2 {
  font-size: 2rem;
  color: #3A345B;
  margin-bottom: 20px;
}

a.tambah {
  display: inline-block;
  text-decoration: none;
  color: #fff;
  background: #3A345B;
  padding: 10px 20px;
  border-radius: 8px;
  font-weight: 700;
  box-shadow: 0 4px 10px rgba(0,0,0,0.2);
  transition: 0.3s;
  margin-bottom: 20px;
}
a.tambah:hover {
  background: #2a2740;
  transform: translateY(-3px);
}

input#keyword {
  padding: 10px;
  width: 70%;
  margin: 20px 0;
  border-radius: 8px;
  border: 1px solid #aaa;
  font-size: 1rem;
}

table {
  width: 100%;
  border-collapse: collapse;
  font-size: 1.05rem;
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

/* Tombol aksi */
.action-btn {
  display: inline-block;
  padding: 6px 14px;
  margin: 2px;
  border-radius: 6px;
  text-decoration: none;
  color: #fff;
  font-weight: bold;
  transition: 0.3s;
  font-size: 0.95rem;
}

.btn-nilai {
  background: #4CAF50;
}
.btn-nilai:hover {
  background: #3e8e41;
}

.btn-edit {
  background: #2196F3;
}
.btn-edit:hover {
  background: #1976D2;
}

.btn-hapus {
  background: #E53935;
}
.btn-hapus:hover {
  background: #C62828;
}
</style>
</head>
<body>

<a href="dashboard.php" class="kembali">← Kembali</a>
<a href="logout.php" class="logout">Logout</a>

<div class="container">
  <h2>Daftar Mahasiswa</h2>

  <a href="tambah.php" class="tambah">+ Tambah Mahasiswa</a><br>
  <input type="text" id="keyword" placeholder="Cari mahasiswa...">

  <table>
    <thead>
      <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Prodi</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody id="hasil">
      <?php
      $no = 1;
      $result = $conn->query("SELECT * FROM mahasiswa ORDER BY nim ASC");
      while ($row = $result->fetch_assoc()) {
        echo "
        <tr>
          <td>{$no}</td>
          <td>{$row['nim']}</td>
          <td>{$row['nama']}</td>
          <td>{$row['prodi']}</td>
          <td>
            <a href='nilai.php?nim={$row['nim']}' class='action-btn btn-nilai'>Nilai</a>
            <a href='edit.php?nim={$row['nim']}' class='action-btn btn-edit'>Edit</a>
            <a href='hapus.php?nim={$row['nim']}' onclick=\"return confirm('Yakin ingin menghapus {$row['nama']}?');\" class='action-btn btn-hapus'>Hapus</a>
          </td>
        </tr>";
        $no++;
      }
      ?>
    </tbody>
  </table>
</div>

<!-- Script pencarian AJAX -->
<script>
document.querySelector("#keyword").oninput = function() {
  let key = this.value;
  fetch("cari.php?keyword=" + key)
    .then(res => res.json())
    .then(data => {
      let isi = "";
      let no = 1;
      data.forEach(m => {
        isi += `
        <tr>
          <td>${no++}</td>
          <td>${m.nim}</td>
          <td>${m.nama}</td>
          <td>${m.prodi}</td>
          <td>
            <a href='nilai.php?nim=${m.nim}' class='action-btn btn-nilai'>Nilai</a>
            <a href='edit.php?nim=${m.nim}' class='action-btn btn-edit'>Edit</a>
            <a href='hapus.php?nim=${m.nim}' onclick="return confirm('Yakin ingin menghapus ${m.nama}?');" class='action-btn btn-hapus'>Hapus</a>
          </td>
        </tr>`;
      });
      document.querySelector("#hasil").innerHTML = isi;
    });
};
</script>

</body>
</html>
