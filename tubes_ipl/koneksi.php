<?php 
	$con = mysqli_connect("localhost","root","","register_login");

	//periksa koneksi
	if (mysqli_connect_errno()){
		echo "Gagal menghubungkan database : " . mysqli_connect_errno();
		exit();
	}



?>