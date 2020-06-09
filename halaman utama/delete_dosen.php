<?php
	include_once 'koneksi_db.php';
	
	$nip = $_GET['nip'];
	
	$result = mysqli_query($connect,"DELETE FROM dosen WHERE nip='$nip'");
	
	header("location:index.php");
?>
