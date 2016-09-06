<?php
	include "koneksi.php";
	$uname = $_POST['uname'];
	$passwd = $_POST['password'];
	$nama = $_POST['nama'];
	$jabatan = $_POST['jabatan'];
	if(empty($nama)) {
		echo "<script>alert('Nama belum diisi!')</script>";
		echo "<script>window.location=history.go(-1)</script>";
	}

	$query=mysql_query("INSERT INTO admin (uname,password,nama,jabatan) value ('$uname','$passwd','$nama','$jabatan')");
	if ($query) {
		echo "<script>alert('Tambah admin sukses!')</script>";
		include "index.php";
	} else { 
		echo "<script>alert('GAGAL! Username sama dengan username lainnya!')</script>";
		echo "<script>window.location=history.go(-1)</script>";
	}
		header ('location : index.php'); 
	?>