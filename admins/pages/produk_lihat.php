<?php
include('pages/koneksi.php');
?>
<html>
<head>
	<title>Produk</title>
</head>
<body bgcolor="#CCCCCC">
<?php
$sql	='select * from tbl_produk';
$query	= mysqli_query($koneksi,$sql);
?>
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
<div id="section-to-print">
<center>
		<br>
	<hr>
		<h2>DATA PRODUK</h2>
		<hr>
</center>
<table class="table" width="807" border="1" cellpadding="0" cellspacing="0" align="center">
<tr>
 <td width="10" height="29" align="center" valign="midlle" bgcolor="#00FFFF">No</td>
 <td width="100" align="center" valign="middle" bgcolor="#00FFFF">Nama Produk</td>
 <td width="100" align="center" valign="middle" bgcolor="#00FFFF">Harga Produk</td>
 <td width="30" align="center" valign="middle" bgcolor="#00FFFF">Aksi</td>
<?php
		while($data	= mysqli_fetch_array($query)){
?>
 <tr>
  <td p align="center" bgcolor="#FFFFFF"><?php echo $data['id'];?></td>
  <td p align="left" bgcolor="#FFFFFF"><?php echo $data['nama_produk'];?></td>
  <td p align="left" bgcolor="#FFFFFF">Rp. <?php echo $data['harga_produk'];?></td>
  <td p align="center" bgcolor="#FFFFFF">
	<a href="index.php?page=produk_edit&id=<?php echo$data['id'];?>">Edit</a>
	<a href="index.php?page=produk_hapus&id=<?php echo$data['id'];?>"onclick="return confirm('Yakin Mau Dihapus?');">HAPUS</a>
	<a href="index.php?page=produk_print&id=<?php echo$data['id'];?>">Print</a>
	</td>
</tr>
<input type="hidden" name="id" value="<?php echo$data['id']?>">
<?php
	}
?>
</table>
<?php echo "Tanggal Hari Ini". Date (" d/m/y ")?>
</div>

<div class="card-body">
<button onclick="location.href='index.php?page=produk_tambah'"type="button"class="btn btn-primary">Tambah</button>
<button onclick="window.print()"type="button"class="btn btn-secondary">Print</button>
<button onclic="location.href='index.php?page=main'"type="button"class="btn btn-secondary">Kembali</button>
</div>
<script>
funcion myFuncion(){
	var txt;
	var r = confirm("Press a button");
	if(r == true){
	  txt = "You pressed OK!";
	} else{
	  txt = "You pressed Cancel!";
	}
	document.getElementById("demo").innerHTML=txt;
}
</script>
</body>
</html>