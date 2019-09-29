<?php 
	require 'seting.php';
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
	   		<h2 class="alert alert-danger" align="center">TAMBAH DATA BARU</h2>
	   	</div>
	</div>
	<br><br>
<?php 
	if (isset($_POST['Insert'])) {
		//proses input 
		$GENDER = $_POST['gender'];
		$NAME = $_POST['nama'];
		$EMAIL = $_POST['email'];
		$PASSWORD = $_POST['password'];
		$AVATAR = $_POST['avatar'];
		$ROLE = $_POST['role'];

		//Query Insert data
		$hasil = mysqli_query($koneksi, "insert into tbl_latihan value(NULL, '$GENDER', '$NAME', '$EMAIL', '$PASSWORD', '$AVATAR', '$ROLE')");

		//Pengecekan data berhasil atau gagal
		
		if ($hasil) {
			echo 'Data berhasil ditambah';
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
					<input type="text" class="form-control form-control-lg" name="nama" size="40" maxlength="50" placeholder="Masukan Nama..." required="">
				</div>

				<div class="form-group">
					<label>GENDER</label>
					<label class="container">
						<label>
							<input type="radio" name="gender" value="M">laki-laki
						</label>
						<label>
							<input type="radio" name="gender" value="W">perempuan
						</label>
					 </label>
				</div>

				<div class="form-group">
					<label>EMAIL</label>
					<input type="text" class="form-control form-control-lg" name="email" size="40" maxlength="35" placeholder="Masukan Email..." required="">		
				</div>
				
				<div class="form-group">
					<label>PASSWORD</label>
					<input type="password" class="form-control form-control-lg" name="password" placeholder="password..." required="">
				</div>

				<div class="form-group">
					<label>AVATAR</label>
					<input type="text" class="form-control form-control-lg" name="avatar" maxlength="50" placeholder="avatar..." required="">
				</div>

				<div class="form-group">
					<label>ROLE</label>
					<label class="container">
						<label>
							<input type="radio" name="role" value="admin">admin
						</label>
						<label>
							<input type="radio" name="role" value="operator">operator
						</label>
					</label>
				</div>

				<input type="submit" name="Insert" value="Simpan">
			</form>

</body>
</html>