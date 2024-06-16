<?php
include('koneksi.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $notelp = $_POST['notelp'];

    $query = "INSERT INTO tbl_pembeli (id, nama, alamat, notelp) VALUES ('$id', '$nama', '$alamat', '$notelp')";

    if (mysqli_query($koneksi, $query)) {
        $message = "Terima Kasih!!";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header("location:../index.php?page=pembeli");
        exit(); // Penting untuk menghentikan eksekusi setelah redirect
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}

mysqli_close($koneksi);
?>
