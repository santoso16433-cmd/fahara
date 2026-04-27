<?php
include 'koneksi.php';

$total=mysqli_fetch_assoc(mysqli_query($conn,"SELECT SUM(total) as t FROM pembelian"));
?>

<h2>Laporan</h2>
<p>Total Pembelian: Rp <?= $total['t']; ?></p>