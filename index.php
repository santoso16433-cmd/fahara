<?php
session_start();
if(!isset($_SESSION['user'])) header("Location:login.php");
?>

<link rel="stylesheet" href="style.css">

<div class="sidebar">
    <h2>TOKO</h2>
    <a href="index.php">🏠 Dashboard</a>
    <a href="barang.php">📦 Barang</a>
    <a href="pesanan.php">🚚 Pesanan</a>
    <a href="pembelian.php">📥 Pembelian</a>
    <a href="laporan.php">📊 Laporan</a>
    <a href="logout.php">🚪 Logout</a>
</div>

<div class="content">
    <div class="card">
        <h2>Dashboard</h2>
        <p>Login: <?= $_SESSION['user']['username']; ?> (<?= $_SESSION['user']['role']; ?>)</p>
    </div>

    <div class="card">
        <h3>Fitur Sistem</h3>
        <ul>
            <li>Login multi user</li>
            <li>Kelola barang</li>
            <li>Pesanan supplier</li>
            <li>Pembelian / restok</li>
            <li>Laporan otomatis</li>
        </ul>
    </div>
</div>