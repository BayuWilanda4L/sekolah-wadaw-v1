<?php
include "koneksi.php";
$id = $_GET['id'];
$isi = $_POST['isi'];
$test=mysql_query("UPDATE  `sekolah_bayu`.`pengumuman` SET  `isi` =  '$isi' WHERE  `pengumuman`.`id` ='$id';")
?>