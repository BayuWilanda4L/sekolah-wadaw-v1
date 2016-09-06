<?php
	$page = (isset($_GET['p']))? $_GET['p'] : "main";
	switch($_GET['p']) {
		case "artikel" :  header("location:artikel.php"); break;
		case "add_admin" : header("location:tambah_admin.php"); break;
		case "pengumuman" : header("location:pengumuman.php"); break;
		case "pengaturan" : header("Location:pengaturan.php"); break;
		break;
	}
?>