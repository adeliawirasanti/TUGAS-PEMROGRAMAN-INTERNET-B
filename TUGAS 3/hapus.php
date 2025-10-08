<?php
session_start();
include "koneksi.php";

// Cek login
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}

// Ambil ID dari URL
$id = $_GET['id'];

// Hapus data mahasiswa (dan opsional: nilai terkait jika perlu)
$conn->query("DELETE FROM mahasiswa WHERE id='$id'");

// Tampilkan pesan dan kembali ke halaman utama
echo "<script>alert('Data mahasiswa berhasil dihapus!');window.location='index.php';</script>";
?>
