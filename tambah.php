<?php
include "koneksi.php";
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
        .container {
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
            width: 350px;
            text-align: center;
        }
        .container h2 {
            margin-bottom: 20px;
            color: #333;
        }
        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }
        label {
            display: block;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 5px;
            color: #444;
        }
        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 8px;
            outline: none;
            transition: 0.3s;
        }
        input:focus {
            border-color: #2575fc;
            box-shadow: 0 0 5px rgba(37,117,252,0.5);
        }
        button {
            background: #2575fc;
            color: white;
            border: none;
            padding: 12px;
            width: 100%;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }
        button:hover {
            background: #1a5edb;
        }
        .back-link {
            display: inline-block;
            margin-top: 15px;
            font-size: 14px;
            color: #2575fc;
            text-decoration: none;
        }
        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Tambah Data Bioskop</h2>
        <form action="proses.php" method="POST">
            <div class="form-group">
                <label>Film</label>
                <input type="text" name="film" placeholder="Judul Film" required>
            </div>
            <div class="form-group">
                <label>Jadwal</label>
                <input type="datetime-local" name="jadwal" required>
            </div>
            <div class="form-group">
                <label>Penonton</label>
                <input type="text" name="penonton" placeholder="Nama Penonton" required>
            </div>
            <div class="form-group">
                <label>Tiket</label>
                <input type="text" name="tiket" placeholder="Kode Tiket" required>
            </div>
            <button type="submit">Simpan</button>
        </form>
        <a href="index.php" class="back-link">← Kembali</a>
    </div>
</body>
</html>
