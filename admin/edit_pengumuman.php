<html>
<head>
	<title></title>
</head>
<body>
	<?php
	include "koneksi.php";
	$edit = $_GET['id'];
	$query=mysql_query("SELECT * FROM pengumuman WHERE id='$edit' ");
	$var=mysql_fetch_array($query);
	?>
	<form action='update_pengumuman.php' method='post'>
		<table>
			<tr>
				<td><input type='text' name='judul' maxlength='40'class='input'><?php
				echo "$var[judul]";
		 		?></td>
		 		
		 	</tr>
		 </table>
	</form>
</body>
</html>