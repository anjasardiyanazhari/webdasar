<?php 
	require 'seting.php';

	if (isset($_GET['key'])) {

		$key = $_GET['key'];


		$sql = mysqli_query($koneksi, "DELETE FROM barang WHERE id=$key");

		if ($sql) {
			header('location: index.php');
		} else {
			echo 'Gagal Delete';
			}
		}
 ?>