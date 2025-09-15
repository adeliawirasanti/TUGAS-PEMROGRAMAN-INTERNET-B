<?php
$grade = "";
$keterangan = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nilai = trim($_POST['nilai']);
    if ($nilai === "") {
        $keterangan = "Nilai wajib diisi.";
    } elseif (!is_numeric($nilai)) {
        $keterangan = "Masukkan bilangan valid (boleh desimal) antara 0–100.";
    } else {
        $nilai = (float)$nilai;
        if ($nilai < 0 || $nilai > 100) {
            $keterangan = "Masukkan bilangan valid (boleh desimal) antara 0–100.";
        } else {
            // dibulatkan ke bawah untuk konversi huruf
            $bulat = floor($nilai);
            if ($bulat >= 85)      $grade = "A";
            elseif ($bulat >= 70)  $grade = "B";
            elseif ($bulat >= 55)  $grade = "C";
            elseif ($bulat >= 40)  $grade = "D";
            else                   $grade = "E";

            $keterangan = "Nilai $nilai (dibulatkan ke $bulat) dikonversi menjadi $grade";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Nilai Huruf</title>
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

/* Input */
input[type=text] {
  width: 90%;
  padding: 16px;
  font-size: 1.1rem;
  margin-bottom: 25px;
  border: 2px solid #d183a9;
  border-radius: 12px;
  outline: none;
  transition: 0.3s;
}
input[type=text]:focus {
  border-color: #3A345B;
  box-shadow: 0 0 10px rgba(209,131,169,0.6);
}

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
  font-size: 1.3rem;
  color: #3A345B;
  font-weight: 600;
}
</style>
</head>
<body>
<a href="index.php" class="kembali">← Kembali</a>
<div class="container">
  <h2>Konversi Nilai ke Huruf</h2>
  <form method="post">
    <input type="text" name="nilai" placeholder="Masukkan Nilai 0–100 (boleh desimal)" required>
    <br>
    <button type="submit">Konversi</button>
  </form>
  <?php if ($keterangan): ?>
    <div class="hasil"><?=$keterangan?></div>
  <?php endif; ?>
</div>
</body>
</html>
