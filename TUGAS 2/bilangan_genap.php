<?php
$output = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $awal  = $_POST['awal'] ?? '';
    $akhir = $_POST['akhir'] ?? '';

    // Validasi angka (boleh desimal)
    if (!filter_var($awal, FILTER_VALIDATE_FLOAT) || !filter_var($akhir, FILTER_VALIDATE_FLOAT)) {
        $output = "Masukkan hanya angka (boleh bilangan desimal).";
    } elseif ((float)$awal >= (float)$akhir) {
        $output = "Batas awal harus lebih kecil dari batas akhir.";
    } else {
        $a = (float)$awal;
        $b = (float)$akhir;
        $genap = [];
        // gunakan ceil/floor agar desimal tidak masalah
        for ($i = ceil($a); $i <= floor($b); $i++) {
            if ($i % 2 === 0) {
                $genap[] = $i;
            }
        }
        $output = "Bilangan genap dari $awal sampai $akhir: " .
                  (count($genap) ? implode(', ', $genap) : "Tidak ada bilangan genap dalam rentang ini.");
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Bilangan Genap</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg1: #f8e1f4;
            --bg2: #d183a9;
            --accent1: #3A345B;
            --accent2: #2a2740;
            --button: #d183a9;
            --button-hover: #b95a8a;
        }
        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0; padding: 0;
            background: linear-gradient(135deg,var(--bg1),var(--bg2));
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        a.kembali {
            position: absolute;
            top: 20px; left: 20px;
            text-decoration: none; color: #fff;
            font-weight: 700; font-size: 1rem;
            background: var(--accent1);
            padding: 10px 18px;
            border-radius: 8px;
            transition: 0.3s;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        }
        a.kembali:hover {
            background: var(--accent2);
            transform: translateX(-3px);
        }
        .container {
            max-width: 600px; width: 90%;
            background: #fff;
            padding: 50px 40px;
            text-align: center;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        }
        h2 { font-size: 2rem; margin-bottom: 25px; color: var(--accent1); }
        input[type=number] {
            width: 80%;
            padding: 12px;
            font-size: 1rem;
            margin-bottom: 15px;
            border: 2px solid var(--bg2);
            border-radius: 10px;
        }
        button {
            background: var(--button);
            color: #fff;
            border: none;
            padding: 12px 30px;
            font-size: 1rem;
            border-radius: 10px;
            cursor: pointer;
            transition: 0.3s;
            box-shadow: 0 6px 15px rgba(0,0,0,0.15);
        }
        button:hover {
            background: var(--button-hover);
            transform: translateY(-3px);
        }
        .hasil {
            margin-top: 20px;
            font-size: 1.1rem;
            color: var(--accent1);
        }
    </style>
</head>
<body>
    <a href="index.php" class="kembali">← Kembali</a>
    <div class="container">
        <h2>Cek Bilangan Genap</h2>
        <form method="post">
            <input type="number" name="awal" step="0.01" placeholder="Batas awal" required><br>
            <input type="number" name="akhir" step="0.01" placeholder="Batas akhir" required><br>
            <button type="submit">Tampilkan</button>
        </form>
        <?php if ($output): ?>
            <div class="hasil"><?= htmlspecialchars($output) ?></div>
        <?php endif; ?>
    </div>
</body>
</html>
