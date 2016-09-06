<html>
<head>
	<title>Halaman Edit</title>
	<link rel="stylesheet" type="text/css" href="css/wadaw.css">
	<link rel="stylesheet" type="text/css" href="css/hover.css">
</head>
<body>
	<div id='header'>Halaman Edit</div>
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
				switch($_GET['bag']) {
					case "lihat_artikel" : include "lihat_artikel.php"; break;
					case "lihat_pengumuman" :  include "lihat_pengumuman.php"; break;
					default :
						echo "
						<h3><center>Edit</center></h3><hr>
						<div id='tombol'>
						<a href='?bag=lihat_artikel' class='hvr-back-pulse'>Lihat & Edit Artikel</a>
						<a href='?bag=lihat_pengumuman' class='hvr-back-pulse'>Lihat & Edit Pengumuman</a>
						</div>"; break;
				break;
				}
			?>
		</div>
		<div id='footer'><center><br><br><br><br><br><br><br>Designed By : Muhamad Bayu Wilanda<br>2016</center></div>
</body>
</html>