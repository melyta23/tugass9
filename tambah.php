<?php
include "koneksi.php";

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $film = $_POST['film'];
    $jadwal = $_POST['jadwal'];
    $penonton = $_POST['penonton'];
    $tiket = $_POST['tiket'];

    $query = mysqli_query($koneksi, "INSERT INTO bioskop (film, jadwal, penonton, tiket) 
                                     VALUES ('$film', '$jadwal', '$penonton', '$tiket')");
    if ($query) {
        $message = "success";
    } else {
        $message = "error";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Bioskop</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .card {
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
            width: 350px;
        }
        h2 {
            margin-bottom: 20px;
            text-align: center;
        }
        .input-group {
            margin-bottom: 15px;
        }
        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
            outline: none;
        }
        .btn {
            width: 100%;
            padding: 10px;
            background: #2575fc;
            color: #fff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 15px;
        }
        .btn:hover {
            background: #1a5edb;
        }
        .back {
            display: block;
            text-align: center;
            margin-top: 10px;
            text-decoration: none;
            color: #2575fc;
        }
        .message {
            text-align: center;
            margin-bottom: 10px;
            font-weight: bold;
        }
        .success { color: green; }
        .error { color: red; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Tambah Data Bioskop</h2>

        <?php if ($message == "success"): ?>
            <p class="message success">✅ Data berhasil disimpan!</p>
        <?php elseif ($message == "error"): ?>
            <p class="message error">❌ Data gagal disimpan!</p>
        <?php endif; ?>

        <form action="" method="POST">
            <div class="input-group">
                <input type="text" name="film" placeholder="Judul Film" required>
            </div>
            <div class="input-group">
                <input type="datetime-local" name="jadwal" required>
            </div>
            <div class="input-group">
                <input type="text" name="penonton" placeholder="Nama Penonton" required>
            </div>
            <div class="input-group">
                <input type="text" name="tiket" placeholder="Kode Tiket" required>
            </div>
            <button type="submit" class="btn">Simpan</button>
        </form>
        <a href="index.php" class="back">← Kembali</a>
    </div>
</body>
</html>
