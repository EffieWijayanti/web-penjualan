<!DOCTYE html>
<?php
include 'koneksi.php';
$id = $_GET['id'];
$produk = mysqli_query($koneksi,"select*from tbl_produk where id='$id'");
$row = mysqli_fetch_array($produk);
?>
<html>
<head>
	<title>CETAK PRINT DATA PRODUK</title>
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
<center><h2>DATA PRODUK CV EWOOD COMP</h2></center><br>
<table border="0" style="width:100%">
<?php
	$no=1;
	$sql = mysqli_query($koneksi,"select*from tbl_produk where id='$id'");
	while($data = mysqli_fetch_array($sql)){
	?>
	<tr width="100%">
	<td>Nama Produk</td>
	<td><?php echo ":".$data['nama_produk'];?></td>
	</tr>
	<tr width="100%">
	<td>Harga Produk</td>
	<td><?php echo ":".$data['harga_produk'];?></td>
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
	