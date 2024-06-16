<?php
include'koneksi.php';
$id = $_GET['id'];
$pembeli = mysqli_query($koneksi,"select*from tbl_pembeli where id='$id'");
$row = mysqli_fetch_array($pembeli);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pembeli Edit</title>
</head>
<body>
<hr><center>
<h2>EDIT DATA PEMBELI</h2></center>
<hr>
<form method="post"action="pages/pembeli_update.php">
<input type="hidden" value="<?php echo $row['id'];?>"name="id">
<table width = "100%">
<tr>
<td>Nama Customer</td>
<td>
<input type="text"value="<?php echo $row['nama'];?>"name="nama">
</td>
</tr>
<tr>
<td>Alamat</td>
<td>
<input type="text" value="<?php echo $row['alamat'];?>"name="alamat">
</td>
</tr>
<tr>
<td width="220px">No Telepon</td>
<td>
<input type="text" value="<?php echo $row['notelp'];?>"name="notelp">
</td>
</tr>
<tr>
<td colspan="2">
<button type="submit" value="simpan">SIMPAN PERUBAHAN</button>
<a href="index.php?page=pembeli">Kembali</a></td>
</tr>
</table>
</form>
</body>
</html>