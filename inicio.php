<?php

require_once("funciones.php");

if (!isset($_SESSION["usuario"])) {
	header("location:login.php");exit;
}

$usuarios = dameTodos();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
	<h1>Listado de usuarios</h1>
	<ul>
		<?php foreach($usuarios as $usuario) { ?>
			<li>
				<a href="perfil.php?id=<?=$usuario["id"]?>">
					<?=$usuario["username"]?>
				</a>
			</li>
		<?php } ?>
	</ul>
</body>
</html>
