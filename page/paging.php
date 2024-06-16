<?php
	$page=(isset($_GET['page']))?$_GET['page']:"main";
	switch ($page){
		case 'home':include "page/home.html";break;
		case 'sejarah':include "page/sejarah.html";break; 
		case 'visi':include "page/visi.html";break;
		case 'tujuan':include "page/tujuan.html";break;
		case 'gallery':include "page/gallery.html";break;
		case 'contact':include "page/contact.html";break;
		case 'pemesanan':include "page/pemesanan.html";break;
		case 'main':
		default:include"page/home.html";
	}
	?>