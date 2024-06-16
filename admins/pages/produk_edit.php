<?php
include'koneksi.php';
$id = $_GET['id'];
$produk = mysqli_query($koneksi,"select*from tbl_produk where id='$id'");
$row = mysqli_fetch_array($produk);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Produk Edit</title>
</head>
<body>
<hr><center>
<h2>EDIT DATA PRODUK</h2></center>
<hr>
<form method="post"action="index.php?page=produk_update">
<input type="hidden" value="<?php echo $row['id'];?>"name="id">
<table width = "100%">
<tr>
<td>Nama Produk</td>
<td>
<input type="text"value="<?php echo $row['nama_produk'];?>"name="nama_produk">
</td>
</tr>
<tr>
<td>Harga Produk</td>
<td>
<input type="text" value="<?php echo $row['harga_produk'];?>"name="harga_produk">
</td>
</tr>

<tr>
<td colspan="2">
<button type="submit" value="simpan">SIMPAN PERUBAHAN</button>
<a href="index.php?page=produk">Kembali</a></td>
</tr>
</table>
</form>
</body>
</html>