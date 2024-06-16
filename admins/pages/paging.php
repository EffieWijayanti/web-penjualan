<?php
	$page=(isset($_GET['page']))?$_GET['page']:"main";
	switch ($page){
	case 'home':include "pages/panelkanan.html";break;	
	case 'sejarah':include "pages/sejarah_lihat.php";break;
	case 'sejarah_edit':include "pages/sejarah_edit.php";break;
	case 'sejarah_update':include "pages/sejarah_update.php";break;
	case 'tujuan': include "pages/tujuan_lihat.php";break;
	case 'tujuan_edit': include "pages/tujuan_edit.php";break;
	case 'tujuan_update': include "pages/tujuan_update";break;
	case 'visi': include "pages/visi_lihat.php";break;
	case 'visi_edit': include "pages/visi_edit.php";break;
	case 'visi_update': include "pages/visi_update.php";break;
	
	case 'produk':include "pages/produk_lihat.php";break;
	case 'produk_edit':include "pages/produk_edit.php";break;
	case 'produk_tambah':include "pages/produk_tambah.php";break;
	case 'produk_update' :include "pages/produk_update.php";break;
	case 'produk_simpan' :include "pages/produk_simpan.php";break;
	case 'produk_hapus' :include "pages/produk_hapus.php";break;
	case 'produk_print' :include "pages/produk_print.php";break;
	
	case 'pembeli':include "pages/pembeli_lihat.php";break;
	case 'pembeli_edit':include "pages/pembeli_edit.php";break;
	case 'pembeli_tambah':include "pages/pembeli_tambah.php";break;
	case 'pembeli_update' :include "pages/pembeli_update.php";break;
	case 'pembeli_simpan' :include "pages/pembeli_simpan.php";break;
	case 'pembeli_hapus' :include "pages/pembeli_hapus.php";break;
	case 'pembeli_print' :include "pages/pembeli_print.php";break;
	
	case 'login':include "pages/page-login.html";break;	
	case 'register':include "pages/page-register.html";break;	
	case 'main':
	default:include"pages/panelkanan.html";	
	}
?>
