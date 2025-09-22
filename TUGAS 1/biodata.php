<?php
$output = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama   = trim($_POST['nama']);
    $umur   = trim($_POST['umur']);
    $jk     = $_POST['jk'] ?? '';
    $alamat = trim($_POST['alamat']);

    if ($nama=="" || $umur=="" || $jk=="" || $alamat=="") {
        $output = "Semua field wajib diisi.";
    } elseif (!preg_match("/^[a-zA-Z\s]+$/u", $nama)) {
        $output = "Nama hanya boleh huruf dan spasi.";
    } elseif (!ctype_digit($umur) || $umur <= 0) {
        $output = "Umur harus bilangan bulat positif (dalam tahun).";
    } else {
        $output = "Halo, nama saya ".htmlspecialchars($nama).
                  ". Umur saya $umur tahun. Saya seorang $jk. ".
                  "Saya tinggal di ".htmlspecialchars($alamat).".";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Biodata</title>
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
  align-items: center;
}

/* Tombol kembali */
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

/* Kotak utama */
.container {
  max-width: 600px;
  width: 90%;
  background: #fff;
  margin: 40px auto;
  padding: 50px 40px;
  text-align: center;
  border-radius: 20px;
  box-shadow: 0 10px 30px rgba(0,0,0,0.15);
  animation: fadeIn 0.8s ease;
}
@keyframes fadeIn {
  from { opacity: 0; transform: translateY(30px); }
  to { opacity: 1; transform: translateY(0); }
}

/* Judul */
h2 {
  font-size: 2.2rem;
  margin-bottom: 30px;
  font-weight: 700;
  color: #3A345B;
}

/* Input dan select */
input[type=text],
textarea,
select {
  width: 90%;
  padding: 16px;
  font-size: 1.1rem;
  margin-bottom: 25px;
  border: 2px solid #d183a9;
  border-radius: 12px;
  outline: none;
  transition: 0.3s;
  box-sizing: border-box;
}
input[type=text]:focus,
textarea:focus,
select:focus {
  border-color: #3A345B;
  box-shadow: 0 0 10px rgba(209,131,169,0.6);
}
textarea { height: 100px; resize: none; }

/* Tombol */
button {
  background: #d183a9;
  color: #fff;
  border: none;
  padding: 16px 45px;
  font-size: 1.2rem;
  border-radius: 12px;
  cursor: pointer;
  font-weight: 600;
  transition: 0.3s ease;
  box-shadow: 0 6px 15px rgba(0,0,0,0.15);
}
button:hover {
  background: #b95a8a;
  transform: translateY(-3px);
  box-shadow: 0 10px 20px rgba(0,0,0,0.25);
}

/* Hasil */
.hasil {
  margin-top: 30px;
  font-size: 1.2rem;
  color: #3A345B;
  font-weight: 600;
  line-height: 1.7;
}
</style>
</head>
<body>
<a href="index.php" class="kembali">← Kembali</a>
<div class="container">
  <h2>Form Biodata</h2>
  <form method="post">
    <input type="text" name="nama" placeholder="Nama"
           pattern="[A-Za-z\s]+" title="Hanya huruf dan spasi" required><br>
    <input type="text" name="umur" placeholder="Umur (tahun)"
           pattern="[0-9]+" title="Masukkan bilangan bulat positif" required><br>
    <select name="jk" required>
      <option value="">--Jenis Kelamin--</option>
      <option value="Laki-laki">Laki-laki</option>
      <option value="Perempuan">Perempuan</option>
    </select><br>
    <textarea name="alamat" placeholder="Alamat" required></textarea><br>
    <button type="submit">Kirim</button>
  </form>

  <?php if ($output): ?>
    <div class="hasil"><?=$output?></div>
  <?php endif; ?>
</div>
</body>
</html>
