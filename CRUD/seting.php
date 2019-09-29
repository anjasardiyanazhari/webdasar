<?php 
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$database = 'pemrograman web 1';

	$koneksi = mysqli_connect($host, $user, $pass, $database);
	if (!$koneksi) {
		echo 'koneksi gagal'.mysqli_error($koneksi);
	}
 ?>