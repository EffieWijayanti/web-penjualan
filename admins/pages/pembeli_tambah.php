<!DOCTYPE html>
<html>
<head>
	<title>Daftar Pembeli</title>
</head>
<body>
	<center>
		<hr>
		<H3>DATA CUSTOMER</H3>
		</hr>
		<div>
			<form method="post" action="pages/pembeli_simpan.php">
				<table class="table">
					<tr>
						<td width="200px">No</td>
						<td><input type="text" name="id" required placeholder="no"></td>
					</tr>
					<tr>
						<td>Nama Customer</td>
						<td><input type="text" name="nama" required placeholder="Masukkan nama"></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td><input type="text" name="alamat" required placeholder="Masukkan alamat"></td>
					</tr>
					<tr>
						<td>No Telepon</td>
						<td><input type="text" name="notelp" required placeholder="Masukkan No Telepon"></td>
					</tr>
				</table>
				<table>
					<tr>
						<td><button type="submit" class="btn btn-primary">SIMPAN</button>
						<button onclick="location.href='index.php?page=pembeli'" class="btn btn-secondary">KEMBALI</button></td>
					</tr>
					<tr>
						<td colspan="2"></td>
					</tr>
				</table>
			</form>
		</div>
	</center>
</body>
</html>
