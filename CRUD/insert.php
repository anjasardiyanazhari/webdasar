<?php 
	require 'seting.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Insert Data</title>
	<style>
		label{
			display: block;
		}
	</style>
</head>
<body>

<h2>Tambah Data Baru</h2>

<?php 
	if (isset($_POST['simpan'])) {
		//proses input 
		$nama_barang = $_POST['nama_barang'];
		$harga_barang = $_POST['harga_barang'];
		$stok_barang = $_POST['stok_barang'];

		//Query Insert data
		$hasil = mysqli_query($koneksi, "insert into barang value(NULL, '$nama_barang', '$harga_barang', '$stok_barang')");

		//Pengecekan data berhasil atau gagal
		if ($hasil) {
			echo 'Data berhasil';
		}else {
			echo 'gagal:'.mysqli_error($koneksi);
		}
	}

 ?>

<form action="" method="POST">
	<label>Nama Barang</label>
	<input type="text" name="nama_barang" required="">

	<label>Harga Barang</label>
	<input type="number" name="harga_barang" required="">

	<label>Stok</label>
	<input type="number" name="stok_barang" required="">

	<br>

	<input type="submit" name="simpan" value="Simpan">
</form>


</body>
</html>