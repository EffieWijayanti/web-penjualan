<!DOCTYPE html>
<html>
<head><title>Website Ewood Comp</title></head>
<body>
<link rel="stylesheet" type="text/css" href="css/tampilan.css">
<div class="header">
		<?php include"page/header.html"?></div>
<div id="navbar">
		<?php include"page/menu.html"?></div>
		<?php include"page/runningteks.html"?>
<div class="row">
	<div class="leftcolumn">
		<div class="card">
		<?php include"page/paging.php"?></div>
		</div>
	<div class="rightcolumn">
		<div class="card">
			<?php include"page/about.html"?></div>
		<div class="card">
			<?php include"page/lokasi.html"?></div>
		<div class="card">
			<?php include"page/socialmedia.html"?></div>
</div>
</div>
<div class="footer">
	<?php include"page/footer.html"?></div>
	<script src="js/aksi.js"></script>
</body>
</html>