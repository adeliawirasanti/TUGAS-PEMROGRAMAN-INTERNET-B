<?php
session_start();
include 'koneksi.php';

// Jika sudah login, arahkan ke index
if (isset($_SESSION['username'])) {
  header("Location: index.php");
  exit;
}

if (isset($_POST['login'])) {
  $user = $_POST['username'];
  $pass = $_POST['password'];

  $query = $conn->query("SELECT * FROM user WHERE username='$user' AND password='$pass'");
  if ($query->num_rows > 0) {
    $_SESSION['username'] = $user;
    echo "<script>alert('Login berhasil!');window.location='index.php';</script>";
  } else {
    echo "<script>alert('Username atau password salah!');</script>";
  }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Login Admin</title>
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
.container {
  width: 400px;
  background: #fff;
  border-radius: 20px;
  box-shadow: 0 10px 30px rgba(0,0,0,0.15);
  text-align: center;
  padding: 50px 30px;
}
h2 {
  color: #3A345B;
  font-size: 2rem;
  margin-bottom: 20px;
}
input[type="text"],
input[type="password"] {
  width: 85%;
  padding: 12px;
  margin: 10px 0;
  border-radius: 8px;
  border: 1px solid #ccc;
  font-size: 1rem;
}
button {
  background: #3A345B;
  color: #fff;
  border: none;
  padding: 12px 40px;
  border-radius: 10px;
  cursor: pointer;
  font-size: 1.1rem;
  transition: 0.3s;
  margin-top: 10px;
}
button:hover {
  background: #2a2740;
  transform: translateY(-2px);
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
</style>
</head>
<body>
<a href="index.php" class="kembali">← Kembali</a>
<div class="container">
  <h2>Login Admin</h2>
  <form method="POST">
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit" name="login">Login</button>
  </form>
</div>
</body>
</html>
