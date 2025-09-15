<?php
$info = "";
$isError = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $num = trim($_POST['angka']);
    if ($num === "") {
        $info = "Angka wajib diisi.";
        $isError = true;
    } elseif (!is_numeric($num)) {
        $info = "Masukkan angka valid (boleh desimal atau negatif).";
        $isError = true;
    } else {
        $floor = floor($num);
        if (floor($num) != $num) {
            $info = "Hasil dari $num (dibulatkan ke bawah menjadi $floor) adalah " .
                    (($floor % 2 == 0) ? "Genap" : "Ganjil");
        } else {
            $info = "Hasil dari $num adalah " . (($num % 2 == 0) ? "Genap" : "Ganjil");
        }
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Ganjil / Genap</title>
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
input[type=text] {
  width: 90%;
  height: 56px;
  padding: 0 16px;
  margin: 15px 0;
  font-size: 1.1rem;
  border: 2px solid #d183a9;
  border-radius: 12px;
  outline: none;
  transition: 0.3s;
}
input[type=text]:focus {
  border-color: #3A345B;
  box-shadow: 0 0 10px rgba(209,131,169,0.6);
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
  <h2>Cek Ganjil / Genap</h2>
  <form method="post">
    <input type="text" name="angka" placeholder="Masukkan angka (negatif/desimal ok)" required>
    <button type="submit">Cek</button>
  </form>
  <?php if ($info): ?>
    <div class="hasil <?php echo $isError ? 'error' : ''; ?>">
      <?=$info?>
    </div>
  <?php endif; ?>
</div>
</body>
</html>
