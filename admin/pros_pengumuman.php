<?php
	include "koneksi.php";
	$judul = $_POST['judul'];
	$isi = $_POST['isi'];
	if(empty($judul)) {
		echo "<script>alert('Judul belum diisi!')</script>";
		echo "<script>window.location=history.go(-1)</script>";
	}
	$query=mysql_query("INSERT INTO pengumuman (judul,isi) value ('$judul','$isi')");
	if ($query) {
		echo "<script>alert('Menambahkan pengumuman sukses!')</script>";
		header ('location:index.php');
	} else { 
		echo "<script>alert('GAGAL! Judul sudah pernah dibuat!')</script>";
		echo "<script>window.location=history.go(-1)</script>";
	}
		header ('location : index.php'); 
?>