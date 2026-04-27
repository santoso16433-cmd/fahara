<?php
session_start();
include 'koneksi.php';
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
<h2>Data Barang</h2>

<form method="POST" action="simpan_barang.php">
<input name="nama" placeholder="Nama Barang">
<input name="stok" placeholder="Stok">
<input type="date" name="exp">
<button>Simpan</button>
</form>
</div>

<div class="card">
<table>
<tr>
<th>Nama</th>
<th>Stok</th>
<th>Kadaluarsa</th>
<th>Aksi</th>
</tr>

<?php
$q=mysqli_query($conn,"SELECT * FROM barang");
while($d=mysqli_fetch_assoc($q)){
echo "<tr>
<td>$d[nama_barang]</td>
<td>$d[stok]</td>
<td>$d[kadaluarsa]</td>
<td>
<a href='hapus_barang.php?id=$d[id]'>Hapus</a>
</td>
</tr>";
}
?>
</table>
</div>
</div>