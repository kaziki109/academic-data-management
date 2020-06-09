<?php
	include_once 'koneksi_db.php';
	
	$kode_matkul = $_GET['kode_matkul'];
	
	$result = mysqli_query($connect,"DELETE FROM matkul WHERE kode_matkul='$kode_matkul'");
	
	header("location:index.php");
?>
