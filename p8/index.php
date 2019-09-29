<!DOCTYPE html>
<html>
<head>
	<title>Belajar PHP</title>
</head>
<body>
	<h2>Variabel</h2>
	<hr>

	<?php
		$nama = 'Anjas Ardiyan Azhari';
		$umur = 50;
		echo 'nama ; '.$nama;
		echo '<br>';
		echo 'umur : '.$umur;
	?>
	<hr>
	<?php
		$a = 50;
		$b = 100;
		$jumlah = $a + $b;
		echo $jumlah;
	?>
	<hr>
	<?php
		$nilaia = 10;
		$nilaib = 20;
		$jumlah = $nilaia + $nilaib;
		echo 'Nilai A:'.$nilaia;
		echo '<br>';
		echo 'Nilai B:'.$nilaib;
		echo '<br>';
		echo 'Jumlah:'.$jumlah;
	?>
	<hr>
	<?php
		echo "array indexed <br>";
		$arrayumur = array(89,78,56);
		$arrayumur2 = array(9 => 89,78,56);

		print_r($arrayumur[1]);
		echo "<br>";
		print_r($arrayumur2[10]);


		echo "<hr> array Asosiatif<br>";
		$ass = array('a' => 78, 'x' => 89 );
		print_r($ass['x']);
		//array asosiatif menggunakan kata kunci string,
	?>

</body>
</html>