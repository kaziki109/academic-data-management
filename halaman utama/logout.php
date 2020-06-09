<<?php 

//mengaktifkan session
session_start();

//menghapus semua session
session_destroy();

//mengalihkan halaman sambil mengirim pesan logout
header("location:/academic_data_management/login.php?pesan=logout");
 ?>