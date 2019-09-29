<!DOCTYPE html>
<html>
<head>
	<title>Perulangan</title>
</head>
<body>

<H2>Perulangan For</H2>
<?php 
	for ($i=10; $i > 1 ; $i--) { 
		echo "Perulang Ke :", $i, '<br>';
	
	}
?>

<hr>

<h2>Perulangan While</h2>
<?php 
	$j = 1;
	while ($j <= 10) {
		echo $j;
		$j++;
	}

 ?>

</body>
</html>