<?php 
	require 'seting.php';
	$sql = mysqli_query($koneksi, "SELECT * FROM tbl_latihan");
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Barang</title>
	<link rel="stylesheet" type="text/css" href="../p7/assets/Bootstrap/css/Bootstrap.min.css">
</head>
<body>


<div class="container">
	<h2 class="alert alert-danger" align="center">INFORMASI DATA</h2>

<hr>
	<a href="insert.php" class="btn btn-primary">Tambah Data</a> 
<hr>

<table border="1" cellspacing="0" class="table table-bordered" >
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Gender</th>
			<th>Email</th>
			<th>Password</th>
			<th>Avatar</th>
			<th>Role</th>
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
			<td><?= $r['NAME']; ?></td>
			<td><?php echo $r['GENDER']; ?></td>
			<td><?php echo $r['EMAIL']; ?></td>
			<td><?php echo $r['PASSWORD']; ?></td>
			<td><?php echo $r['AVATAR']; ?></td>
			<td><?php echo $r['ROLE']; ?></td>

			<td align="center">
				<a href="delete.php?key=<?php echo $r['ID_USER']; ?>" class="btn btn-warning" onclick="return confirm('apakah anda yakin?')" >Delete</a>

				<a href="update.php?key=<?php echo $r['ID_USER']; ?>" class="btn btn-success" >Update</a>
			</td>
		</tr>
<?php 
}
	?>
	</tbody>

</table>

</body>
</html>