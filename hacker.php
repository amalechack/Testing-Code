<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Hacker</title>
</head>
<body>
<?php

$conex = mysql_connect('localhost','root','amalechack') or die('fuck you!');
mysql_select_db('amalechack');

if(isset($_POST['usuario'])){
	//hacer consulta
	$query = "SELECT * FROM `clientes` WHERE `rut` = '".$_POST['usuario']."'"; // CON COMILLAS CORRESPONDIENTES EVITAS UNA INYECCIÓN SQL
	$resul = mysql_query($query,$conex);
	$total = mysql_num_rows($resul);

	if($total > 0){
		while ($fila = mysql_fetch_assoc($resul)) {
			echo '<p>'.$fila['deuda'].'</p>';
		}
	}
}
else{
	//formulario
	echo '
	<form method="POST" action="hacker.php">
	<p>ESCRIBE EL RUT: <input type="text" name="usuario"></p>
	<input type="submit" value="enviar">
	</form>
	';
}

?>
</body>
</html>