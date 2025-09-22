<?php
include "koneksi.php";

$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM bioskop WHERE id='$id'");

if ($query) {
    $status = "success";
    $message = "Data berhasil dihapus!";
} else {
    $status = "error";
    $message = "Gagal menghapus data!";
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Hapus Data Bioskop</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      background: linear-gradient(135deg, #667eea, #764ba2);
    }
    .card {
      background: #fff;
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.2);
      text-align: center;
      width: 400px;
      animation: fadeIn 0.6s ease-in-out;
    }
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-20px); }
      to { opacity: 1; transform: translateY(0); }
    }
    h2 {
      margin-bottom: 15px;
      color: #333;
    }
    p {
      font-size: 16px;
      margin-bottom: 20px;
    }
    .success {
      color: #2ecc71;
      font-weight: 600;
    }
    .error {
      color: #e74c3c;
      font-weight: 600;
    }
    a {
      display: inline-block;
      padding: 12px 20px;
      background: #667eea;
      color: white;
      border-radius: 8px;
      text-decoration: none;
      font-size: 14px;
      transition: 0.3s;
    }
    a:hover {
      background: #5a67d8;
      transform: scale(1.05);
    }
  </style>
</head>
<body>
  <div class="card">
    <h2><?= $status == "success" ? "Berhasil 🎉" : "Gagal ❌"; ?></h2>
    <p class="<?= $status; ?>"><?= $message; ?></p>
    <a href="index.php">⬅ Kembali ke Data</a>
  </div>
</body>
</html>
