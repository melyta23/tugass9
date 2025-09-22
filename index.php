<?php
include "koneksi.php";
$query = mysqli_query($koneksi, "SELECT * FROM mobil");
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Data Mobil</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #ff9966, #ff5e62);
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 950px;
      margin: 50px auto;
      background: #fff;
      border-radius: 15px;
      padding: 25px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.2);
    }
    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }
    .btn-tambah {
      display: inline-block;
      padding: 10px 15px;
      margin-bottom: 20px;
      background: #4CAF50;
      color: white;
      text-decoration: none;
      border-radius: 8px;
      font-size: 14px;
    }
    .btn-tambah:hover {
      background: #45a049;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }
    table th, table td {
      padding: 12px 15px;
      text-align: center;
    }
    table th {
      background: #ff5e62;
      color: white;
    }
    table tr:nth-child(even) {
      background: #f9f9f9;
    }
    table tr:hover {
      background: #ffe0d1;
    }
    .aksi a {
      text-decoration: none;
      padding: 6px 10px;
      border-radius: 6px;
      font-size: 13px;
      margin: 0 3px;
      display: inline-block;
    }
    .ubah {
      background: #ff9800;
      color: white;
    }
    .ubah:hover {
      background: #e68900;
    }
    .hapus {
      background: #f44336;
      color: white;
    }
    .hapus:hover {
      background: #d32f2f;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>🚗 Daftar Data Mobil</h2>
    <a href="tambah.php" class="btn-tambah">+ Tambah Mobil</a>
    <table>
      <tr>
        <th>ID</th>
        <th>Nama Mobil</th>
        <th>Stok</th>
        <th>Harga</th>
        <th>Umur</th>
        <th>Email</th>
        <th>Aksi</th>
      </tr>
      <?php while ($row = mysqli_fetch_array($query)) { ?>
        <tr>
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['nama_mobil']; ?></td>
          <td><?php echo $row['stok']; ?></td>
          <td><?php echo $row['harga']; ?></td>
          <td><?php echo $row['umur']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td class="aksi">
            <a href="ubah.php?id=<?php echo $row['id']; ?>" class="ubah">Ubah</a>
            <a href="hapus.php?id=<?php echo $row['id']; ?>" class="hapus" onclick="return confirm('Yakin ingin hapus data ini?')">Hapus</a>
          </td>
        </tr>
      <?php } ?>
    </table>
  </div>
</body>
</html>
