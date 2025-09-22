<?php
include "koneksi.php";

$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM bioskop WHERE id='$id'");
$data = mysqli_fetch_assoc($query);

if (isset($_POST['update'])) {
    $film = $_POST['film'];
    $jadwal = $_POST['jadwal'];
    $penonton = $_POST['penonton'];
    $tiket = $_POST['tiket'];

    $update = mysqli_query($koneksi, "UPDATE bioskop SET 
                                      film='$film', 
                                      jadwal='$jadwal', 
                                      penonton='$penonton', 
                                      tiket='$tiket' 
                                      WHERE id='$id'");
    if ($update) {
        header("Location: index.php");
    } else {
        echo "Gagal mengubah data!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ubah Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #ff9a9e, #fad0c4);
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
            width: 400px;
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
            border-color: #ff758c;
            box-shadow: 0px 0px 5px rgba(255,117,140,0.7);
        }
        .btn {
            margin-top: 20px;
            width: 100%;
            padding: 12px;
            background: #ff758c;
            border: none;
            border-radius: 8px;
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }
        .btn:hover {
            background: #e05270;
        }
        .back {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: #555;
            text-decoration: none;
            font-size: 14px;
        }
        .back:hover {
            color: #000;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Ubah Data Bioskop</h2>
        <form method="POST">
            <label>Film</label>
            <input type="text" name="film" value="<?= $data['film'] ?>" required>

            <label>Jadwal</label>
            <input type="text" name="jadwal" value="<?= $data['jadwal'] ?>" required>

            <label>Penonton</label>
            <input type="text" name="penonton" value="<?= $data['penonton'] ?>" required>

            <label>Tiket</label>
            <input type="text" name="tiket" value="<?= $data['tiket'] ?>" required>

            <button type="submit" name="update" class="btn">Update</button>
        </form>
        <a href="index.php" class="back">← Kembali</a>
    </div>
</body>
</html>
