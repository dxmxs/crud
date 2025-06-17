<?php
session_start();
// Cek jika pengguna belum login
if ($_SESSION['status'] != "login") {
    header("location:login.php?pesan=belum_login");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Aplikasi CRUD</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Selamat Datang, <?php echo $_SESSION['username']; ?>!</h2>
        <a href="logout.php" class="btn btn-logout">LOGOUT</a>
        <hr>
        <h3>Manajemen Data Produk</h3>
        <a href="tambah.php" class="btn btn-tambah">[+] Tambah Produk Baru</a>
        <br/><br/>
        <table>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Opsi</th>
            </tr>
            <?php
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi, "SELECT * FROM produk");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['nama_produk']; ?></td>
                    <td>Rp <?php echo number_format($d['harga']); ?></td>
                    <td><?php echo $d['stok']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $d['id']; ?>" class="btn btn-edit">EDIT</a>
                        <a href="hapus.php?id=<?php echo $d['id']; ?>" class="btn btn-hapus" onclick="return confirm('Yakin ingin menghapus data ini?')">HAPUS</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
</body>
</html>