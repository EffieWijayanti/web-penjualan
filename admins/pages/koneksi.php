<?php
$db_host	= 'localhost';
$db_usn		= 'root';
$db_pwd		= '';
$db_name	= 'materiweb2021';
$koneksi	= mysqli_connect($db_host,$db_usn,$db_pwd,$db_name);
if (!$koneksi){
	echo 'Tidak dapat terhubung ke database';
}
?>