<?php 
	require 'config.php';

	if (isset($_GET['key'])) {

		$key = $_GET['key'];


		$sql = mysqli_query($setting, "DELETE FROM tbl_1710310004 WHERE id_04=$key");

		if ($sql) {
			header('location: tampil.php');
		} else {
			echo 'Gagal Delete';
			}
		}
 ?>