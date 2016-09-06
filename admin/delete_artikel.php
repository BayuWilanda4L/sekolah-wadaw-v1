<?php
include "koneksi.php";
$id=$_GET['id'];
$hapus=mysql_query("DELETE FROM `sekolah_bayu`.`artikel` WHERE `artikel`.`id` = '$id'");
if ($hapus) {
		echo "<script>alert('Menghapus Berhasil!')</script>";
		header("location:index.php");
	} else { 
		echo "<script>alert('GAGAL!')</script>";
		echo "<script>window.location=history.go(-1)</script>";
	}
		header("location:index.php");
?>