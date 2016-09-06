<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>
<h3><center>Selamat Datang Pokoknya</center></h3><hr>
			<?php
				echo "<table class='table1' border=1><tr bgcolor='#2ECC71'>
					<td><b><center>Username</b></td>
					<td><b><center>Nama Lengkap</b></td>
					<td><b><center>Bagian</b></td>
					</tr>";
				$uname = $_SESSION['uname'];
				$query=mysql_query("SELECT * FROM admin WHERE uname='$uname' ");
				while($var=mysql_fetch_array($query)){
					echo "<tr bgcolor='white'>
						<td><center>$var[uname]</center></td>
						<td><center>$var[nama]</center></td>
						<td><center>$var[jabatan]</center></td>
						</tr>";
				}
				echo "</table></<br><br><br>";
				$jml_admin=mysql_query("SELECT * FROM admin");
				$jml_artikel=mysql_query("SELECT * FROM artikel");
				$jml_pengumuman=mysql_query("SELECT * FROM pengumuman");
				echo "<table class='table1' bgcolor='#2A9FD6';>
					<tr bgcolor='white'>
						<td><b>Total Admin</b></td>
						<td>".mysql_num_rows($jml_admin)."</td>
						<td></td>
					</tr>
					<tr bgcolor='white'>
						<td><b>Total Artikel</b></td>
						<td>".mysql_num_rows($jml_artikel)."</td>
						<td><a href='edit.php?bag=lihat_artikel'>Lihat & Edit</a></td>
					</tr>
					<tr bgcolor='white'>
						<td><b>Total Pengumuman</b></td>
						<td>".mysql_num_rows($jml_pengumuman)."</td>
						<td><a href='edit.php?bag=lihat_pengumuman'>Lihat & Edit</a></td>
					</tr>
					</table>"
				
			?>

</body>
</html>