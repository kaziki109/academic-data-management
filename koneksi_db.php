<?php
   define('DB_SERVER', 'localhost:3308');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'academic_data_management');
   $connect = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   if ($connect) {
	echo "sukses terhubung ke Mysql";
   }else{
	echo "gagal terhubung ke database";
   }
?>