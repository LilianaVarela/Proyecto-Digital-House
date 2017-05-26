<?php

session_start();

if (!isset($_SESSION["usuario"]) && isset($_COOKIE["recordar_usu"])) {
	loguear($_COOKIE["recordar_usu"]);
}

function validarDatos($datos) {
	$errores = [];

	if (strlen(trim($datos["username"])) <= 4) {
		$errores["username"] = "El usuario debe tener minimo 4 caracteres ";
	}
	$email = trim($datos["mail"]);

	if ($email === "") {
		$errores["mail"] = "E-mail obligatorio";
	} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$errores["mail"] = "formato de e-mail invalio";
	}
	else if (dameUnoPorMail($email) != NULL) {
		$errores["mail"] = "El e-mail ya existe";
	}


	$pass = trim($_POST["password"]);
	$cpass = trim($_POST["cpassword"]);
	if ($pass === "") {
		$errores["password"] = "Debes elegir una contraseña";
	}
	if ($cpass === "") {
		$errores["cpassword"] = "Repite tu contraseña";
	}
	if ($pass != "" && $cpass != "" && $pass != $cpass) {
		$errores["password"] = "Las contraseñas no coinciden";
	}


	return $errores;
}

function guardarImagen($upload, $errores) {
		if ($_FILES[$upload]["error"] == UPLOAD_ERR_OK)
		{
			$nombre=$_FILES[$upload]["name"];
			$archivo=$_FILES[$upload]["tmp_name"];

			$ext = pathinfo($nombre, PATHINFO_EXTENSION);

			if ($ext != "png" && $ext != "jpg") {
				$errores[] = "extension invalida";
			}
			else {
				$miArchivo = dirname(__FILE__);
				$miArchivo = $miArchivo . "/img/";
				$miArchivo = $miArchivo . $_POST["username"] . "." . $ext;

				move_uploaded_file($archivo, $miArchivo);
			}
		} else
		{
			$errores[] = "La foto no fue guardada";
		}
		return $errores;
	}

	function crearUsuario($datos) {
		$usuario = [
			
			"username" => $datos["username"],
			"mail" => $datos["mail"],
			"password" => password_hash($datos["password"], PASSWORD_DEFAULT),
			"pais" => $datos["pais"]
		];

		$usuario["id"] = traerNuevoId();

		return $usuario;
	}

	function traerNuevoId() {
		$archivo = file_get_contents("usuarios.json");

		// Si el archivo estaba vacio devuelvo 1
		if ($archivo == "") {
			return 1;
		}

		// Divido mi archivo por enters
		$usuarios = explode(PHP_EOL, $archivo);

		// Borro la linea del enter vacio
		array_pop($usuarios);

		// Obtengo el ultimo usuario
		$ultimoUsuario = $usuarios[count($usuarios) - 1];

		// Transformo mi ultimo usuario en formoto array
		$ultimoUsuario = json_decode($ultimoUsuario,true);

		// Devuelvo ese id + 1
		return $ultimoUsuario["id"] + 1;
	}

	function guardarUsuario($usuario) {
		$json = json_encode($usuario);

		file_put_contents("usuarios.json", $json . PHP_EOL, FILE_APPEND);
	}

	function dameUnoPorMail($mail) {
		$usuarios = dameTodos();

		foreach ($usuarios as $usuario) {
			if ($usuario["mail"] == $mail) {
				return $usuario;
			}
		}

		return NULL;
	}

	function dameTodos() {
		$archivo = file_get_contents("usuarios.json");

		// Lo separo linea por linea
		$usuariosJSON = explode(PHP_EOL, $archivo);

		// Borro el enter vacio
		array_pop($usuariosJSON);

		$usuariosFinal = [];
		foreach ($usuariosJSON as $usuarioJSON) {
			$usuariosFinal[] = json_decode($usuarioJSON,true);
		}

		return $usuariosFinal;
	}

	function dameUnoPorId($id) {
		$usuarios = dameTodos();

		foreach ($usuarios as $usuario) {
			if ($usuario["id"] == $id) {
				return $usuario;
			}
		}

		return NULL;
	}

	function validarLogin($datos) {
		$errores = [];

		$email = trim($datos["mail"]);

		if ($email === "") {
			$errores["mail"] = "Ingresar e-mail";
		} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$errores["mail"] = "E-mail invalido";
		}
		else if (dameUnoPorMail($email) == NULL) {
			$errores["mail"] = "El e-mail no existe";
		} else {
			// SIGNIFICA QUE EL USUARIO EXISTE

			$usuario = dameUnoPorMail($email);
			if (!password_verify($datos["password"], $usuario["password"])) {
				$errores["mail"] = "Contraseña invalida";
			}
		}


		return $errores;
	}

	function loguear($mail) {
		$_SESSION["usuario"] = $mail;
	}
