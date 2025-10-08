<?php
session_start();
include "koneksi.php";
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}

$id_nilai = $_GET['id_nilai'];
$nim = $_GET['nim'];

// Cek apakah data ada
$cek = $conn->query("SELECT * FROM nilai WHERE id_nilai='$id_nilai'");
if ($cek->num_rows > 0) {
  $conn->query("DELETE FROM nilai WHERE id_nilai='$id_nilai'");
  echo "<script>alert('Data nilai berhasil dihapus!');window.location='nilai.php?nim=$nim';</script>";
} else {
  echo "<script>alert('Data tidak ditemukan!');window.location='nilai.php?nim=$nim';</script>";
}
?>
