<?php 
session_start();

include 'koneksi_db.php';

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

 
$data = mysqli_query($connect,"INSERT INTO users VALUES('','$nama','$username','$password','$email')");

$count = mysqli_num_rows($data);
 
if($count > 0) {
	header("location:signup.php?pesan=gagal");
} else {
	header("location:login.php");
	
}
?>