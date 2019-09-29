<?php 
	require 'config.php';

	if (isset($_GET['key'])) {

		$key = $_GET['key'];

		$sql = mysqli_query($setting, "SELECT *FROM tbl_1710310004 WHERE id_04=$key");

		$isi= mysqli_fetch_array($sql);

		if ($sql) {
			header('location: index.php');
		} else {
			echo 'Gagal Delete';
			}
		}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
	<style>
		label{
			display: block;
		}

	</style>
</head>
<body>
	<div class="container">
	<div class="row">
	 	<div class="col-md-12">
	   		<h2 class="alert alert-danger" align="center">UPDATE DATA</h2>
	   	</div>
	</div>

<?php 
	if (isset($_POST['Ubah'])) {
		//proses input 
		$id_04 = $_POST['id_04'];
		$nama_user = $_POST['nama_user'];
		$email_user = $_POST['email_user'];
		
		//Query Insert data
		$hasil = mysqli_query($setting, "UPDATE tbl_1710310004 SET nama_user='$nama_user', email_user='$email_user' WHERE id_04=$id_04");

		//Pengecekan data berhasil atau gagal
		
		if ($hasil) {
			echo 'Data berhasil diubah';
		}else {
			echo 'gagal:'.mysqli_error($setting);
		}
	}
 ?>

<div class="row">
	<div class="col-md-12"> 
		<div class="card">
			<div class="card-header">
			<form action="" method="POST">

				<div class="form-group">
					<label>NAMA USER</label>
					<input type="text" class="form-control form-control-lg" name="nama_user" value="<?php echo $isi['nama_user']; ?>" size="40" maxlength="50" placeholder="Masukan Nama User..." required="">
				</div>

				<div class="form-group">
					<label>EMAIL USER</label>
					<input type="text" class="form-control form-control-lg" name="email_user" value="<?php echo $isi['email_user']; ?>" size="40" maxlength="50" placeholder="Masukan Email User..." required="">		
				</div>
					
					<label>
						<input type="hidden" name="id_04" value="<?php echo $isi['id_04']; ?>">
					</label>

					<label>
						<input type="submit" name="Ubah" value="SIMPAN">
					</label>
				</div>

				
			</form>

</body>
</html>