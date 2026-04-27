<?php
session_start();
include 'koneksi.php';
?>

<h2>Pembelian</h2>

<form method="POST" action="simpan_pembelian.php">
<input type="date" name="tanggal">
<input name="supplier" placeholder="Supplier">
<input name="barang" placeholder="Barang">
<input id="jumlah" name="jumlah" placeholder="Jumlah">
<input id="harga" name="harga" placeholder="Harga">
<input id="total" name="total" placeholder="Total" readonly>
<button>Simpan</button>
</form>

<table>
<tr><th>Tanggal</th><th>Supplier</th><th>Barang</th><th>Jumlah</th><th>Harga</th><th>Total</th></tr>

<?php
$q=mysqli_query($conn,"SELECT * FROM pembelian");
while($d=mysqli_fetch_assoc($q)){
echo "<tr>
<td>$d[tanggal]</td>
<td>$d[supplier]</td>
<td>$d[barang]</td>
<td>$d[jumlah]</td>
<td>$d[harga]</td>
<td>$d[total]</td>
</tr>";
}
?>
</table>

<script>
jumlah.oninput=harga.oninput=function(){
total.value=jumlah.value*harga.value;
}
</script>