<?php
include 'koneksi.php';

mysqli_query($conn,"UPDATE pesanan 
SET status='$_POST[status]' 
WHERE id='$_POST[id]'");

header("Location:pesanan.php");
?>