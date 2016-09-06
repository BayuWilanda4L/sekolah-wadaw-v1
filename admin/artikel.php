<html>
<head>
	<title>Buat Artikel</title>
</head>
<body>
	<h3><center>Buat Artikel</center></h3><hr>
			<form action='pros_post.php' method='post'>
				<table>
					<tr>
						<td>Judul</td>
						<td>:</td>
						<td><input type='text' name='judul' maxlength='40' class='input'></td>
					</tr>
					<tr>
						<td>Isi</td>
						<td>:</td>
						<td><textarea name='isi' cols="80" rows="20" class='isi'></textarea></td>
					</tr>
					<tr>
						<td>Deskripsi [200]</td>
						<td>:</td>
						<td><input type='text' name='deskripsi' class='input'></td>
					</tr>
					<tr>
						<td><input type='submit' class='post' value='Terbitkan'></td>
					</tr>
				</table>
			</form>
</body>
</html>