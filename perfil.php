<?php
	require_once("funciones.php");

	$idUsuario = $_GET["id"];

	$usuario = dameUnoPorId($idUsuario);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
	<h1>Bienvenidos al perfil de <?=$usuario["username"]?></h1>
	<ul>
		<?php foreach($usuario as $propiedad => $valor) { ?>
			<li>
				<?=$propiedad?>: <?=$valor?>
			</li>
		<?php } ?>
	</ul>
</body>
</html>