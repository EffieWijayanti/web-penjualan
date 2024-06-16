<?php
include('koneksi.php');
?>
<?php
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$notelp = $_POST['notelp'];

$query="UPDATE tbl_pembeli SET nama='$nama',alamat='$alamat',notelp='$notelp' WHERE id='$id'";
mysqli_query($koneksi, $query);
header("location:../index.php?page=pembeli");
?>
<script>
location.replace("index.php?page=pembeli");
</script>