<?php 
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$database = 'db_web_latihan';

	$koneksi = mysqli_connect($host, $user, $pass, $database);
	if (!$koneksi) {
		echo 'koneksi gagal'.mysqli_error($koneksi);
	}
 ?>