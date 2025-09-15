<?php
$hasil="";
$keterangan="";
$isError=false;

if($_SERVER['REQUEST_METHOD']=='POST'){
    $a = trim($_POST['angka1']);
    $b = trim($_POST['angka2']);
    $op = $_POST['operator'];

    if($a==="" || $b==="" || !is_numeric($a) || !is_numeric($b)){
        $hasil = "Masukkan angka valid (boleh negatif atau desimal).";
        $isError = true;
    } else {
        switch($op){
            case 'tambah':
                $hasil = $a + $b;
                $keterangan = "Hasil dari $a + $b adalah $hasil";
                break;
            case 'kurang':
                $hasil = $a - $b;
                $keterangan = "Hasil dari $a - $b adalah $hasil";
                break;
            case 'kali':
                $hasil = $a * $b;
                $keterangan = "Hasil dari $a × $b adalah $hasil";
                break;
            case 'bagi':
                if($b == 0){
                    $hasil = "Tidak bisa dibagi 0";
                    $keterangan = "Pembagian oleh nol tidak diperbolehkan.";
                    $isError = true;
                } else {
                    $hasil = $a / $b;
                    $keterangan = "Hasil dari $a ÷ $b adalah $hasil";
                }
                break;
            default:
                $hasil = "Operator tidak valid";
                $isError = true;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Kalkulator</title>
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
  text-align: center;
  border-radius: 20px;
  box-shadow: 0 10px 30px rgba(0,0,0,0.15);
  animation: fadeIn 0.8s ease;
}
@keyframes fadeIn {
  from { opacity: 0; transform: translateY(30px); }
  to { opacity: 1; transform: translateY(0); }
}
h2 {
  font-size: 2.2rem;
  margin-bottom: 30px;
  font-weight: 700;
  color: #3A345B;
}
input[type=text], select {
  width: 90%;
  height: 56px;
  padding: 0 16px;
  margin: 15px 0;
  font-size: 1.1rem;
  border: 2px solid #d183a9;
  border-radius: 12px;
  outline: none;
  transition: 0.3s;
  box-sizing: border-box; /* biar width konsisten */
}
input[type=text]:focus, select:focus {
  border-color: #3A345B;
  box-shadow: 0 0 10px rgba(209,131,169,0.6);
}
select {
  appearance: none;
  -webkit-appearance: none;
  -moz-appearance: none;
  background-color: #fff;
  line-height: 56px;
  padding-right: 40px; /* ruang ekstra untuk panah dropdown */
}
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
.hasil {
  margin-top: 30px;
  font-size: 1.2rem;
  color: #3A345B;
  font-weight: 600;
}
.hasil.error {
  color: #B00020;
}
</style>
</head>
<body>
<a href="index.php" class="kembali">← Kembali</a>
<div class="container">
  <h2>Kalkulator Sederhana</h2>
  <form method="post">
    <input type="text" name="angka1" placeholder="Angka pertama (boleh negatif/desimal)" required>
    <input type="text" name="angka2" placeholder="Angka kedua (boleh negatif/desimal)" required>
    <select name="operator" required>
      <option value="tambah">Tambah</option>
      <option value="kurang">Kurang</option>
      <option value="kali">Kali</option>
      <option value="bagi">Bagi</option>
    </select>
    <button type="submit">Hitung</button>
  </form>
  <?php if($hasil!==""): ?>
    <div class="hasil <?php echo $isError ? 'error' : ''; ?>">
      <?php echo $isError ? $hasil : $keterangan; ?>
    </div>
  <?php endif; ?>
</div>
</body>
</html>
