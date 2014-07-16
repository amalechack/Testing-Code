<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Hacker</title>
</head>
<body>
<?php
session_start();
$conex = mysql_connect('localhost','root','amalechack') or die('fuck you!');
mysql_select_db('amalechack');

if(isset($_POST['usuario']) && isset($_POST['token'])){
	//hacer consulta
	$largo = strlen($_POST['usuario']);

	if($_SESSION['token'] == $_POST['token']){
		if($largo >= 8 or $largo <= 9 && is_int($_POST['usuario'])){
		$query = "SELECT * FROM `clientes` WHERE `rut` = '".mysql_real_escape_string($_POST['usuario'])."'";
		$resul = mysql_query($query,$conex);
		$total = mysql_num_rows($resul);
			if($total > 0){
				while($fila = mysql_fetch_assoc($resul)){
					echo '<p>'.$fila['deuda'].'</p>';
				}
			}
			else{
				echo 'no se encontraron resultados';
			}
		}
		else{
			echo 'los valores ingresados no son correctos...';
		}
	}
}
else{
	//formulario
	$token = rand(1,60);
	$token = hash('sha1', $token);
	$token = hash('gost', $token);
	$_SESSION['token'] = $token;
	echo '
	<script>
		function validador(){
			var usuario = document.getElementById("usuario").value;
			if(usuario.length >= 8 && usuario.length <=9){
				return true;
			}
			else{
				alert("mundo");
				return false;
			}
		}
	</script>
	<form method="POST" action="" onsubmit="return validador()">
	<p>ESCRIBE EL RUT: <input type="text" name="usuario" maxlenth="9" id="usuario"></p>
	<input type="hidden" name="token" value="'.$_SESSION['token'].'">
	<input type="submit" value="enviar">
	</form>
	

	';

}

?>
</body>
</html>