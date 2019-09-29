<?php 
	require 'config.php';
	$sql = mysqli_query($setting, "SELECT * FROM tbl_1710310004");
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Database</title>
	<link rel="stylesheet" type="text/css" href="assets/Bootstrap/css/bootstrap.min.css">
</head>
<body>

<div class="container">
	<h2 class="alert alert-danger" align="center">INFORMASI DATABASE</h2>

<table border="1" cellspacing="0" class="table table-bordered" >
	<thead>
		<tr>
			<th>No</th>
			<th>Nama User</th>
			<th>Email User</th>
			<th>Aksi</th>
		</tr>
	</thead>

	<tbody>
<?php 
	$No = 1;
	while ($r = mysqli_fetch_array($sql)) {
	 ?>
 		<tr>
			<td><?php echo $No++; ?></td>
			<td><?php echo $r['nama_user']; ?></td>
			<td><?php echo $r['email_user']; ?></td>

			<td align="center">
				<a href="hapus.php?key=<?php echo $r['id_04']; ?>" class="btn btn-warning" onclick="return confirm('apakah anda yakin?')" >Delete</a>

				<a href="ubah.php?key=<?php echo $r['id_04']; ?>" class="btn btn-success" >Update</a>
			</td>
		</tr>
<?php 
}
	?>
	</tbody>

</table>

</body>
</html>