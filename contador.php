<?php
session_start();
	if (isset($_POST['boton'])) {
		$_SESSION['contador'] = $_SESSION['contador']+10;
		$modificado = $_SESSION['contador'];
		if($modificado >= 10){
			$wearara = ($_SESSION['contador'] / 10);
			if(is_int($wearara)){
				$modificado = $_SESSION['contador'].'K';
			}
			else{
				$modificado = $_SESSION['contador'];
			}
		}
		if(strlen($modificado) > 3){
			$modificado = $_SESSION['contador'];
		}
	}
	else{
		$modificado = 0;
		$_SESSION['contador'] = 0;
		$_SESSION['numero_especial'] = 0;
	}

	

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contador</title>
</head>
<body>
	<form action="contador.php" method="POST">
		<input type="Submit" name="boton" value="<?php echo '+'.$modificado; ?>" style="background: #cc0000; border:0; color: #eee; border-radius:3px; font-size:22px; cursor:pointer;">
	</form>
</body>
</html>