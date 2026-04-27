<?php
include 'koneksi.php';

$barang   = $_POST['barang'];
$jumlah   = $_POST['jumlah'];
$supplier = $_POST['supplier'];
$status   = $_POST['status'];

mysqli_query($conn,"INSERT INTO pesanan 
(barang, jumlah, supplier, status)
VALUES (
'$barang','$jumlah','$supplier','$status'
)");

header("Location:pesanan.php");
?>