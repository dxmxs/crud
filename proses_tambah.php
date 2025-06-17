<?php
include 'koneksi.php';

$nama = $_POST['nama_produk'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

mysqli_query($koneksi, "INSERT INTO produk(nama_produk, harga, stok) VALUES('$nama', '$harga', '$stok')");

header("location:dashboard.php");
?>