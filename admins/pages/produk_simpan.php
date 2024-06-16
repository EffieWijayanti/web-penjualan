<?php
include('koneksi.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nama_produk = $_POST['nama_produk'];
    $harga_produk = $_POST['harga_produk'];
   

    $query = "INSERT INTO tbl_produk (id, nama_produk, harga_produk) VALUES ('$id', '$nama_produk', '$harga_produk')";

    if (mysqli_query($koneksi, $query)) {
        $message = "Terima Kasih!!";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header("location:../index.php?page=produk");
        exit(); // Penting untuk menghentikan eksekusi setelah redirect
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}

mysqli_close($koneksi);
?>
