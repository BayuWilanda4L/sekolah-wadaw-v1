<html>
<head>
	<title></title>
</head>
<body>
	<?php
        include "koneksi.php";
        $query=mysql_query("SELECT * FROM artikel");

        while($var=mysql_fetch_array($query)){
        echo "
        <h3><center>List Artikel</center></h3><hr>
        <table class='table1'  border='1';>
        		<tr>
                    <td>$var[id]</td>
        			<td>$var[judul]</td>
        			<td><a href='edit_artikel.php?id=$var[id]'>Edit</a></td>
                    <td><a href='delete_artikel.php?id=$var[id]'>Hapus</a></td>
        		</tr>
        	</table>";
        }
    ?>
</body>
</html>