<?php
$host = 'localhost';
$username = '';
$password = '';
$database = 'sekolah_bayu';
$koneksi = mysql_connect($host, $username, $password) or die ('Koneksi gagal');
mysql_select_db($database) or die ('Database tak ditemukan'); 
?>