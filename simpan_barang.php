<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$stok = $_POST['stok'];
$exp  = $_POST['exp'];

mysqli_query($conn,"INSERT INTO barang 
(nama_barang, stok, kadaluarsa)
VALUES (
'$nama','$stok','$exp'
)");

header("Location:barang.php");
?>