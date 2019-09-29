<!DOCTYPE html>
<html>
<head>
	<title>kondisi</title>
</head>
<body>
	<h2>Switch Case</h2>

	<?php
		$status = 'dosen';

		switch ($status) {
			case 'dosen':
				echo 'status dosen';
				break;

				case 'admin':
					echo 'status admin';
					break;
			
			default:
				echo 'status bukan dosen bukan admin';
				break;
		}
	?>

	<?php
		$nilai = 80;

		if ($nilai >= 90) {
			$grade = "A";
		}elseif ($nilai > 80) {
			$grade = "B";
		}else{
			$grade = "F";
		}

		echo 'Nilai anda:'.$nilai;
		echo '<br>';
		echo 'grade:'.$grade;
	?>

</body>
</html>