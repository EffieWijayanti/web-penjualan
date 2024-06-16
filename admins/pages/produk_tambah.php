<!DOCTYPE html>
<html>
<head>
	<title>Daftar Produk</title>
</head>
<body>
<center>
<hr><H3>DATA PRODUK</H3></hr>
<div>
<form method="post" action="pages/produk_simpan.php">
<table class="table">
	<tr><td width="200px">No</td>
	<td><input type="text" name="no" required placeholder="Masukkan no"></td></tr>
	<tr><td>nama produk</td>
	<td><input type="text" name="nama_produk" required placeholder="Masukkan nama produk"></td></tr>
	<tr><td>harga produk</td>
	<td><input type="text" name="harga_produk" required placeholder="Masukkan harga"></td></tr>
</table>
<table>
<tr><td><button type="submit" value="simpan" class="btn btn-primary">SIMPAN</button>
<button onclick="location.href='index.php?page=produk'" class="btn btn-secondary">KEMBALI</button></td></tr>
<tr><td colspan="2"></td></tr>
</table>
</form>
</div>
</body>
</html>