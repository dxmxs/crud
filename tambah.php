<?php
// Mulai session untuk memastikan hanya user yang sudah login bisa akses
session_start();
if ($_SESSION['status'] != "login") {
    header("location:login.php?pesan=belum_login");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Produk - Aplikasi CRUD</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h3>Tambah Data Produk Baru</h3>
        
        <a href="dashboard.php" class="btn btn-kembali"> &larr; Kembali ke Dashboard</a>

        <form action="proses_tambah.php" method="post">
            <table>
                <tr>
                    <td>Nama Produk</td>
                    <td><input type="text" name="nama_produk" placeholder="Masukkan nama produk" required></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td><input type="number" name="harga" placeholder="Masukkan harga" required></td>
                </tr>
                <tr>
                    <td>Stok</td>
                    <td><input type="number" name="stok" placeholder="Masukkan jumlah stok" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="SIMPAN DATA"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>