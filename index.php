<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Variables</title>
</head>
<body>
<?php
printf('<h1>Ahora ésto es un ejercicio de fibonacci...</h1> <br>');

//ciclo FOR <-- :D we love it!! .|.
	//fibonacci
	$a = 1;
	$b = 0;
	$c = 1;

	for ($i=0; $i < 12; $i++) {
		echo $a.'<br>';
		$b = $a;
        $a = $a - $b + $c;
        $c = $b + $c;
	}

?>
</body>
</html>