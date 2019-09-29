<?php 
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$database = 'db_uas_1710310004';

	$setting = mysqli_connect($host, $user, $pass, $database);
	if (!$setting) {
		echo 'koneksi gagal'.mysqli_error($setting);
	}
 ?>