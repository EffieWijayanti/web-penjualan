<?php
include('koneksi.php');
?>
<?php
$id = $_POST['id'];
$nama_produk = $_POST['nama_produk'];
$harga_produk = $_POST['harga_produk'];

$query="UPDATE tbl_produk SET nama_produk='$nama_produk',harga_produk='$harga_produk', WHERE id='$id'";
mysqli_query($koneksi, $query);
header("location:../index.php?page=produk");
?>
<script>
location.replace("index.php?page=produk");
</script>