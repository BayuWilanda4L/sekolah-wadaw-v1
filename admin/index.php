<?php
	include "koneksi.php";
 	session_start();
 	if(empty($_SESSION['uname'])){
 	header("location:login.php");
}
?>
<html>
	<head>
		<title>Selamat Datang</title>
		<link rel="stylesheet" type="text/css" href="css/wadaw.css">
		<link rel="stylesheet" type="text/css" href="css/hover.css">
	</head>
	<body>
		<div id='header'>
			<?php echo "Selamat Datang, ".$_SESSION['uname']; ?><br/>
			<div id='logout_btn'>
				<a href='logout.php' class='hvr-back-pulse'>Keluar</a><br>
			</div>
			<div id='tombol2'>
				<a href='/sekolah-bayu' class='hvr-back-pulse'>Lihat Website</a><br>
			</div>
		</div>
		<div id='kiri'>
			<center><h3>Pokoknya disini Sidebar</h3></center><hr>
				<center><ul>
					<li><a href='index.php?p=home' class='hvr-wobble-horizontal'>Home</a></li>
					<li><a href='index.php?p=artikel' class='hvr-wobble-horizontal'>Buat Artikel</a></li>
					<li><a href='index.php?p=pengumuman' class='hvr-wobble-horizontal'>Buat Pengumuman</a></li>
					<li><a href='index.php?p=add_admin' class='hvr-wobble-horizontal'>Tambah Admin</a></li>
					<li><a href='index.php?p=pengaturan' class='hvr-wobble-horizontal'>Pengaturan</a></li>
				</ul></center>
				
		</div>
		<div id='kanan'>
			<?php
				switch($_GET['p']) {
				case "home" : include "home.php"; break;
				case "artikel" :  include "artikel.php"; break;
				case "add_admin" : include "tambah_admin.php"; break;
				case "pengumuman" : include "pengumuman.php"; break;
				case "pengaturan" : include "pengaturan.php"; break;
				default : include "home.php";break;
				break;
				}
			?>
		</div>
		<div id='footer'><center><br><br><br><br><br><br><br>Designed By : Muhamad Bayu Wilanda<br>2016</center></div>
	</body>
</html>