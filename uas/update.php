<?php 
	require 'seting.php';

	if (isset($_GET['key'])) {

		$key = $_GET['key'];

		$sql = mysqli_query($koneksi, "SELECT *FROM tbl_latihan WHERE ID_USER=$key");

		$isi= mysqli_fetch_array($sql);

		}else{
			header('location: index.php');
		}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Insert Data</title>
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
	<br><br>
<?php 
	if (isset($_POST['Ubah'])) {
		//proses input 
		$ID_USER = $_POST['id_user'];
		$GENDER = $_POST['gender'];
		$NAME = $_POST['nama'];
		$EMAIL = $_POST['email'];
		$PASSWORD = $_POST['password'];
		$AVATAR = $_POST['avatar'];
		$ROLE = $_POST['role'];

		//Query Insert data
		$hasil = mysqli_query($koneksi, "UPDATE tbl_latihan SET GENDER='$GENDER', NAME='$NAME', EMAIL='$EMAIL', PASSWORD='$PASSWORD', AVATAR='$AVATAR', ROLE='$ROLE' WHERE ID_USER=$ID_USER");

		//Pengecekan data berhasil atau gagal
		
		if ($hasil) {
			echo 'Data berhasil diubah';
		}else {
			echo 'gagal:'.mysqli_error($koneksi);
		}
	}
 ?>

<div class="row">
	<div class="col-md-12"> 
		<div class="card">
			<div class="card-header">
			<form action="" method="POST">

				<div class="form-group">
					<label>NAMA</label>
					<input type="text" class="form-control form-control-lg" name="nama" value="<?php echo $isi['NAME']; ?>" size="40" maxlength="50" placeholder="Masukan Nama..." required="">
				</div>

				<div class="form-group">
					<label>GENDER</label>
					<label class="container">
						<label>
							<input type="radio" name="gender" value="M" <?php if($isi['GENDER']=='M')echo 'checked'?> >laki-laki
						</label>
						<label>
							<input type="radio" name="gender" value="W" <?php if($isi['GENDER']=='W')echo 'checked'?> >Perempuan
						</label>
					 </label>
				</div>


				<div class="form-group">
					<label>EMAIL</label>
					<input type="text" class="form-control form-control-lg" name="email" value="<?php echo $isi['EMAIL']; ?>" size="40" maxlength="35" placeholder="Masukan Email..." required="">		
				</div>
				
				<div class="form-group">
					<label>PASSWORD</label>
					<input type="text" class="form-control form-control-lg" name="password" value="<?php echo $isi['PASSWORD']; ?>" placeholder="password..." required="">
				</div>

				<div class="form-group">
					<label>AVATAR</label>
					<input type="text" class="form-control form-control-lg" name="avatar" value="<?php echo $isi['AVATAR']; ?>" maxlength="50" placeholder="avatar..." required="">
				</div>

				<div class="form-group">
					<label>ROLE</label>
					<label class="container">
						<label>
							<input type="radio" name="role" value="admin" <?php if ($isi['ROLE']=='admin')echo 'checked'?> >admin
						</label>
						<label>
							<input type="radio" name="role" value="operator" <?php if ($isi['ROLE']=='operator')echo 'checked'; ?> >operator
						</label>
					</label>

					<label>
						<input type="hidden" name="id_user" value="<?php echo $isi['ID_USER']; ?>">
					</label>

					<label>
						<input type="submit" name="Ubah" value="Simpan">
					</label>
				</div>

				
			</form>

</body>
</html>