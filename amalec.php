<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Variables</title>
</head>
<body>
<?php
printf('<h1>Ahora ésto es un ejercicio de fibonacci...</h1> <br>');
$hastacuanto = 20;
//ciclo FOR <-- :D we love it!! .|.
	//fibonacci
	$a = 1;
	$b = 0;
	$c = 1;
	$i = 0;
	for ($i=0; $i < $hastacuanto; $i++) {
		echo $a.'<br>';
		$b = $a;
        $a = $a - $b + $c;
        $c = $b + $c;
	}
//ciclo WHILE <-- :D we REALLY love it <3
	//fibonacci
	$a = 1;
	$b = 0;
	$c = 1;
	$i = 0;
	while ($i < $hastacuanto) {
		$i++;
		echo $a.'<br>';
		$b = $a;
        $a = $a - $b + $c;
        $c = $b + $c;
	}
//ciclo DO-WHILE <-- :c we really don't remember it until we search into google... sorry.
	//fibonacci
	$a = 1;
	$b = 0;
	$c = 1;
	$i = 0;
	do{
		$i++;
		echo $a.'<br>';
		$b = $a;
        $a = $a - $b + $c;
        $c = $b + $c;
	}
	while($i < $hastacuanto);

?>
</body>
</html>