<?php
session_start();
include 'koneksi.php';
?>

<h2>Pesanan</h2>

<form method="POST" action="simpan_pesanan.php">
<input name="barang" placeholder="Barang">
<input name="jumlah" placeholder="Jumlah">
<input name="supplier" placeholder="Supplier">

<select name="status">
<option>Pending</option>
<option>Dikirim</option>
<option>Selesai</option>
</select>

<button>Kirim</button>
</form>

<table>
<tr><th>Barang</th><th>Jumlah</th><th>Supplier</th><th>Status</th></tr>

<?php
$q=mysqli_query($conn,"SELECT * FROM pesanan");
while($d=mysqli_fetch_assoc($q)){
echo "<tr>
<td>$d[barang]</td>
<td>$d[jumlah]</td>
<td>$d[supplier]</td>
<td>$d[status]</td>
</tr>";
}
?>
</table>