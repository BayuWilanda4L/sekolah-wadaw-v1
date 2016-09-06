<?php
include "koneksi.php";
$result=mysql_query("SELECT * FROM artikel");
echo "Total artikel = ".mysql_num_rows($result)." artikel.";
?>