<?php
include "koneksi.php";

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $film     = $_POST['film'];
    $jadwal   = $_POST['jadwal'];
    $penonton = $_POST['penonton'];
    $tiket    = $_POST['tiket'];

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
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: #ffffff;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
            width: 400px;
            animation: fadeIn 0.6s ease-in-out;
        }
        h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }
        .input-group {
            margin-bottom: 18px;
        }
        input {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid #ddd;
            border-radius: 10px;
            outline: none;
            transition: 0.3s;
            font-size: 14px;
        }
        input:focus {
            border-color: #667eea;
            box-shadow: 0 0 8px rgba(102, 126, 234, 0.4);
        }
        .btn {
            width: 100%;
            padding: 12px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: #fff;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            transition: 0.3s;
        }
        .btn:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 15px rgba(102, 126, 234, 0.4);
        }
        .back {
            display: block;
            text-align: center;
            margin-top: 15px;
            text-decoration: none;
            color: #667eea;
            font-size: 14px;
        }
        .back:hover {
            text-decoration: underline;
        }
        .message {
            text-align: center;
            margin-bottom: 15px;
            font-weight: bold;
            font-size: 14px;
        }
        .success { color: #28a745; }
        .error { color: #dc3545; }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>🎬 Tambah Data Bioskop</h2>

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
