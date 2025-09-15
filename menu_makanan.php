<?php
$hasil = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $menu   = $_POST['menu'] ?? '';
    $jumlah = trim($_POST['jumlah']);
    $harga  = 0;

    if ($menu === "" || $jumlah === "") {
        $hasil = "Pilih menu dan isi jumlah.";
    } elseif (!ctype_digit($jumlah) || $jumlah <= 0) {
        $hasil = "Jumlah harus angka bulat positif.";
    } else {
        switch ($menu) {
            case 'Nasi Goreng': $harga = 15000; break;
            case 'Soto'      : $harga = 12000; break;
            case 'Mie Ayam'  : $harga = 10000; break;
            default: $hasil = "Menu tidak valid."; break;
        }

        if ($harga > 0) {
            $jumlahInt = (int)$jumlah;
            $total     = $harga * $jumlahInt;

            // Format keterangan output
            $hasil  = "Anda membeli $jumlahInt porsi $menu. Harga per porsi Rp"
                    . number_format($harga, 0, ',', '.') . "<br>"
                    . "Perhitungan: $jumlahInt × "
                    . number_format($harga, 0, ',', '.') . " = Rp"
                    . number_format($total, 0, ',', '.') . "<br>"
                    . "<strong>Total belanjaan Anda adalah Rp"
                    . number_format($total, 0, ',', '.') . "</strong>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Menu Makanan</title>
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
select,
input[type=text] {
  width: 90%;
  height: 56px;               /* samain tinggi */
  padding: 0 16px;
  font-size: 1.1rem;
  margin-bottom: 25px;
  border: 2px solid #d183a9;
  border-radius: 12px;
  outline: none;
  transition: 0.3s;
  box-sizing: border-box;     /* biar width konsisten */
}
select {
  appearance: none;
  -webkit-appearance: none;
  -moz-appearance: none;
  background-color: #fff;
  line-height: 56px;
  padding-right: 40px;        /* ruang panah dropdown */
}
select:focus,
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
  <h2>Pilih Menu Makanan</h2>
  <form method="post">
    <select name="menu" required>
      <option value="">-- Pilih --</option>
      <option value="Nasi Goreng">Nasi Goreng</option>
      <option value="Soto">Soto</option>
      <option value="Mie Ayam">Mie Ayam</option>
    </select>
    <input type="text" name="jumlah" placeholder="Jumlah porsi" required>
    <br>
    <button type="submit">Hitung Total</button>
  </form>
  <?php if ($hasil): ?>
    <div class="hasil"><?=$hasil?></div>
  <?php endif; ?>
</div>
</body>
</html>
