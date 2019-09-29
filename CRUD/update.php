<?php 
	require 'seting.php';

	if (isset($_GET['key'])) {

		$key = $_GET['key'];

		$sql = mysqli_query($koneksi, "SELECT *FROM barang WHERE id=$key");

		$isi= mysqli_fetch_array($sql);

		} else{
			header('location: index.php');
		}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Update Data</title>
	<style>
		label{
			display: block;
		}
	</style>
</head>
<body>
<h2>Ubah Data</h2>

<?php 
if (isset($_POST['simpan'])) {
	//proses input 
	$id = $_POST['id'];
	$nama_barang = $_POST['nama_barang'];
	$harga_barang = $_POST['harga_barang'];
	$stok_barang = $_POST['stok_barang'];

	$hasil = mysqli_query($koneksi, "UPDATE barang SET nama='$nama_barang', harga='$harga_barang', stok='$stok_barang' WHERE id=$id");

	if ($hasil) {
		echo 'berhasil';
	}else {
		echo 'gagal:'.mysqli_error($koneksi);
	}
}

 ?>

<form action="" method="POST">
	<label>Nama Barang</label>
	<input type="text" name="nama_barang"
	value="<?php echo $isi['nama']; ?>">

	<label>Harga Barang</label>
	<input type="number" name="harga_barang"
	value="<?php echo $isi['harga']; ?>">

	<label>Stok</label>
	<input type="number" name="stok_barang"
	value="<?php echo $isi['stok']; ?>">

	<input type="hidden" name="id" value="<?php echo $isi['id']; ?>">

	<br>
	<input type="submit" name="simpan" value="simpa">

</form>


</body>
</html>