<?php
include "koneksi.php";
$keyword = $_GET['keyword'] ?? '';

$stmt = $conn->prepare("SELECT * FROM mahasiswa WHERE nama LIKE ? OR nim LIKE ?");
$search = "%$keyword%";
$stmt->bind_param("ss", $search, $search);
$stmt->execute();

$result = $stmt->get_result();
$data = [];
while ($row = $result->fetch_assoc()) {
  $data[] = $row;
}

echo json_encode($data);
?>
