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
    <title>Edit Data Produk - Aplikasi CRUD</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h3>Edit Data Produk</h3>

        <a href="dashboard.php" class="btn btn-kembali"> &larr; Kembali ke Dashboard</a>

        <?php
        include 'koneksi.php';
        $id = $_GET['id'];
        // Pastikan ID adalah angka untuk mencegah SQL Injection
        if(!is_numeric($id)){
            die("ID tidak valid");
        }
        $data = mysqli_query($koneksi, "SELECT * FROM produk WHERE id='$id'");
        while ($d = mysqli_fetch_array($data)) {
        ?>
        <form action="proses_edit.php" method="post">
            <table>
                <tr>
                    <td>Nama Produk</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                        <input type="text" name="nama_produk" value="<?php echo $d['nama_produk']; ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td><input type="number" name="harga" value="<?php echo $d['harga']; ?>" required></td>
                </tr>
                <tr>
                    <td>Stok</td>
                    <td><input type="number" name="stok" value="<?php echo $d['stok']; ?>" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="UPDATE DATA"></td>
                </tr>
            </table>
        </form>
        <?php } ?>
    </div>
</body>
</html>