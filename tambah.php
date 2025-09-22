<?php
include "koneksi.php";

if (isset($_POST['simpan'])) {
    $film = $_POST['film'];
    $jadwal = $_POST['jadwal'];
    $penonton = $_POST['penonton'];
    $tiket = $_POST['tiket'];

    $query = mysqli_query($koneksi, "INSERT INTO bioskop (film, jadwal, penonton, tiket) 
                                     VALUES ('$film', '$jadwal', '$penonton', '$tiket')");
    if ($query) {
        header("Location: index.php");
    } else {
        echo "Gagal menyimpan data!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Bioskop</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
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
            border-radius: 12px;
            box-shadow: 0px 8px 20px rgba(0,0,0,0.2);
            width: 350px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
            color: #444;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            border: 1px solid #ccc;
            border-radius: 8px;
            outline: none;
            transition: 0.3s;
        }
        input[type="text"]:focus {
            border-color: #667eea;
            box-shadow: 0px 0px 5px rgba(102,126,234,0.7);
        }
        button {
            margin-top: 20px;
            width: 100%;
            padding: 12px;
            background: #667eea;
            border: none;
            border-radius: 8px;
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }
        button:hover {
            background: #5563c1;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Tambah Data Bioskop</h2>
        <form method="POST">
            <label>Film</label>
            <input type="text" name="film" required>

            <label>Jadwal</label>
            <input type="text" name="jadwal" required>

            <label>Penonton</label>
            <input type="text" name="penonton" required>

            <label>Tiket</label>
            <input type="text" name="tiket" required>

            <button type="submit" name="simpan">Simpan</button>
        </form>
    </div>
</body>
</html>
