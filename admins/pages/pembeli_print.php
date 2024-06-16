<!DOCTYE html>
<?php
include 'koneksi.php';
$id = $_GET['id'];
$pembeli = mysqli_query($koneksi,"select*from tbl_pembeli where id='$id'");
$row = mysqli_fetch_array($pembeli);
?>
<html>
<head>
	<title>CETAK PRINT DATA PEMBELI</title>
</head>
<style>
@media print{
	body *{
		visibility:hidden;
	}
	#section-to-print,#section-to-print *{
		visibility:visible;
	}
	#section-to-print{
		position:absolute;
		left:0;
		top:0;
	}
}
</style>
<body>
<?php
include 'koneksi.php';
?>
<div id="section-to-print">
<h1>CV EWOOD COMP</h1>
<h3>Jl. Brigjen Katamso 94 Parakan</h3><br>
<hr>
<center><h2>DATA CUSTOMER CV EWOOD COMP</h2></center><br>
<table border="0" style="width:100%">
<?php
	$no=1;
	$sql = mysqli_query($koneksi,"select*from tbl_pembeli where id='$id'");
	while($data = mysqli_fetch_array($sql)){
	?>
	<tr width="100%">
	<td>Nama Customer</td>
	<td><?php echo ":".$data['nama'];?></td>
	</tr>
	<tr width="100%">
	<td>Alamat</td>
	<td><?php echo ":".$data['alamat'];?></td>
	</tr>
	<tr width="100%">
	<td>No Telepon</td>
	<td><?php echo ":".$data['notelp'];?></td>
	</tr>
	<?php
	}
	?>
</table>
</div>
<script>
window.print();
</script>
</body>
</html>
	