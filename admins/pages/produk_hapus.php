<?php
include('koneksi.php');
?>
<?php
//menyimpan data kedalam variabel
$id = $_GET['id'];
//query SQL untuk insert data
$query="DELETE from tbl_produk where id='$id'";
mysqli_query($koneksi, $query);
//mengalihkan ke halaman index.php 
header("location:.../index.php?page=produk");
?>
<script>
location.replace("index.php?page=produk");
</script>
