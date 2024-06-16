<?php
include 'koneksi.php';
$id			=$_GET['id'];
$kucing	= mysqli_query($koneksi, "select * from tbl_visi where id='$id'");
$row		= mysqli_fetch_array($kucing);
?>
<hr><center>
<h2>EDIT DATA VISI-MISI</h2></center>
<hr>
<form method="post" action="pages/visi_update.php">
<input type="hidden" value="<?php echo $row['id'];?>" name="id">
<table>
	<tr><td>Judul</td>
	<td><input type="text" value="<?php echo $row['judul'];?>" name="judul"></td>
	</tr>
	<tr><td>Isi</td>
	<td width="100%"><textarea name="isi" rows="10" class="form-control">
	<?php echo $row['isi'];?></textarea></td>
	</tr>
	<tr>
	<td colspan="2">
	<button type="submit" value="simpan">SIMPAN PERUBAHAN</button>
	<a href="index.php?page=visi">Kembali</a></td>
	</tr>
</table>
</form>