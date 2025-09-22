<?php /* Menu Utama */ ?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Menu Utama</title>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
<style>
body {
  font-family: 'Montserrat', sans-serif;
  margin: 0;
  padding: 0;
  background: linear-gradient(135deg, #f8e1f4, #d183a9);
  min-height: 100vh;
  display: flex;
  flex-direction: column;
}

/* HEADER */
header {
  background: linear-gradient(135deg, #3A345B, #2a2740);
  color: #fff;
  padding: 60px 20px 40px 20px;
  text-align: center;
  box-shadow: 0 4px 15px rgba(0,0,0,0.3);
  border-bottom-left-radius: 40px;
  border-bottom-right-radius: 40px;
}
header h1 {
  font-weight: 700;
  font-size: 52px;
  margin: 0;
  letter-spacing: 2px;
}
header h2 {
  font-weight: 400;
  font-size: 22px;
  margin-top: 15px;
  opacity: 0.9;
}

/* MAIN */
.main {
  flex: 1;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 60px 20px;
}
nav {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 30px;
  width: 100%;
  max-width: 1000px;
}

/* BUTTON NAV */
nav a {
  background: #d183a9;
  color: #fff;
  text-decoration: none;
  border-radius: 20px;
  font-weight: 600;
  font-size: 22px;

  /* Flexbox supaya teks di tengah */
  display: flex;
  align-items: center;
  justify-content: center;

  /* Ukuran seragam */
  min-height: 100px;
  padding: 20px;

  text-align: center;
  transition: all 0.35s ease;
  box-shadow: 0 6px 15px rgba(0,0,0,0.15);
}
nav a:hover {
  transform: translateY(-8px) scale(1.05);
  background: #b95a8a;
  box-shadow: 0 12px 25px rgba(0,0,0,0.25);
}
</style>
</head>
<body>
<header>
  <h1>SELAMAT DATANG!</h1>
  <h2>Praktik PHP Dasar (Looping & Array)</h2>
</header>

<div class="main">
  <nav>
    <a href="daftar_barang.php">DAFTAR BARANG</a>
    <a href="daftar_mahasiswa.php">DAFTAR MAHASISWA</a>
    <a href="daftar_harga_barang.php">DAFTAR HARGA BARANG</a>
    <a href="bilangan_genap.php">BILANGAN GENAP</a>
    <a href="array_multidimensi.php">ARRAY MULTIDIMENSI</a>
    <a href="array_kondisi.php">ARRAY + KONDISI</a>
  </nav>
</div>
</body>
</html>
