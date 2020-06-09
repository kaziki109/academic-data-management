<?php
	include_once 'koneksi_db.php';
	
	$nrp = $_GET['nrp'];
	
	$result = mysqli_query($connect,"DELETE FROM mahasiswa WHERE nrp='$nrp'");
	
	header("location:index.php");
?>
