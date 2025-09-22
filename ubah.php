<?php
include "koneksi.php";

$query = mysqli_query($koneksi, "SELECT * FROM bioskop");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Data Bioskop</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #ffecd2, #fcb69f);
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 900px;
            margin: 50px auto;
            background: #fff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        .add-btn {
            display: inline-block;
            margin-bottom: 15px;
            padding: 10px 15px;
            background: #4CAF50;
            color: #fff;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }
        .add-btn:hover {
            background: #43a047;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        table th, table td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
        table th {
            background: #ff758c;
            color: white;
        }
        table tr:nth-child(even) {
            background: #f9f9f9;
        }
        table tr:hover {
            background: #ffe0e6;
        }
        .btn {
            padding: 6px 10px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 14px;
            margin: 0 2px;
            display: inline-block;
        }
        .edit {
            background: #2196F3;
            color: white;
        }
        .edit:hover {
            background: #1976D2;
        }
        .delete {
            background: #e53935;
            color: white;
        }
        .delete:hover {
            background: #c62828;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Daftar Data Bioskop</h2>
        <a href="tambah.php" class="add-btn">+ Tambah Data</a>
        <table>
            <tr>
                <th>ID</th>
                <th>Film</th>
                <th>Jadwal</th>
                <th>Penonton</th>
                <th>Tiket</th>
                <th>Aksi</th>
            </tr>
            <?php while ($data = mysqli_fetch_assoc($query)) { ?>
            <tr>
                <td><?= $data['id'] ?></td>
                <td><?= $data['film'] ?></td>
                <td><?= $data['jadwal'] ?></td>
                <td><?= $data['penonton'] ?></td>
                <td><?= $data['tiket'] ?></td>
                <td>
                    <a href="ubah.php?id=<?= $data['id'] ?>" class="btn edit">Ubah</a>
                    <a href="hapus.php?id=<?= $data['id'] ?>" class="btn delete" onclick="return confirm('Yakin mau hapus?')">Hapus</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>
