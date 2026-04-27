<?php
include 'koneksi.php';

mysqli_query($conn,"INSERT INTO pembelian VALUES(
NULL,
'$_POST[tanggal]',
'$_POST[supplier]',
'$_POST[barang]',
'$_POST[jumlah]',
'$_POST[harga]',
'$_POST[total]'
)");

header("Location:pembelian.php");
?>