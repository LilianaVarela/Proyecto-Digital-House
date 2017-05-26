<?php 
	include("funciones.php");
	$paises = [
		"Ar" => "Argentina",
		"Ch" => "Chile",
		"Br" => "Brasil",
		"Co" => "Colombia",
		"Ve" => "Venezuela",
		"Pe" => "Peru",
		"Ur" => "Uruguay",
		"Pa" => "Paraguay",
	];

	
	$usernameDefault ="";
	$mailDefault = "";


	
  if ($_POST)
	{
		// Esto significa que ESTA VEZ enviaron la info
		
		// Pregunto si hay errores y los guardo en un array (función aparte)
		$errores = validarDatos($_POST);

		// Si no hubo errores subo la foto
		//if (count($errores) == 0) {
		//	$errores = guardarImagen("avatar", $errores);
		//}

		// Si no hay errores tras subir la foto, voy a hacer DE TODO
		if (count($errores) == 0) {
			//Crear LA VARIABLE usuario
			$usuario = crearUsuario($_POST);

			//Guardar el usuario
			guardarUsuario($usuario);

			//Redirigir a felicidad
			header("location:felicidad.php");exit;
		}

	
	
		if (!isset($errores["username"])) {
			$usernameDefault = $_POST["username"];	
		}
	
		if (!isset($errores["mail"])) {
			$mailDefault = $_POST["mail"];	
		}
		
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<title>PYME SOCIAL</title>
</head>

<body>


<!-- Cabecera con LogIn -->
  <header class="row chicle">
	<div class="container col-md-6">
		<h1>LOGO<small>Texto Secundario</small>
		</h1>
	</div>


	<div class="col-md-6">
		<div class="navbar-form navbar-right">
				
        </div>
	</div>
  </header>
<!-- FIN Cabecera con LogIn -->

<!-- Bienvenido Registrate -->
	<div class="container">
	  <section>
	    <div class="jumbotron div-principal">
		  <h1>Bienvenido, partner!
		  </h1>
		    <p>JHSJK es la primera Red Social, que a la vez funciona como un e-commerce. No importa si eres un microempresario en busca de potenciar su negocio o un usuario comun. Al unirte a JSGHAGJ, automáticamente de conviertes en partner y puedes obtener beficios palpables vendiendo (Empresario) o ayudando a vender (Promotor). </p>
			  			
			
				
			<p>

			<a href="log.php"><button class="btn btn-primary btn-lg btn-outline fade-color col-md-offset-4" type="submit" value="">INGRESAR
				</button></a>
<!-- Button trigger modal --
			<button type="button" class="btn btn-primary btn-lg btn-outline fade-color col-md-offset-1" href="#" data-toggle="modal" data-target="#exampleModalshort" role="button">
  				REGISTRARME
			</button>

			</p>
			<!-- FIN Button trigger modal -->	
		</div>
	  </section>
	</div>
<!-- FIN Bienvenido Registrate -->

<!-- Comodo Facil Efectivo Social -->
	<div class="container">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-3">
					<p>
					<img src="img/persona1.jpg" width="250" height="200">
					</p>
					<h3>COMODO</h3>
					<p>
					Disfruta de todos los beneficios que trae trabajar en la comodidad de tu hogar, sin horarios, sin tranca, sin viajes apretados en el subte, sin perder tiempo esperando el colectivo.
					</p>
				</div>
				
				<div class="col-xs-12 col-sm-6 col-md-3">
					<p>
					<img src="img/persona2.jpg" width="250" height="200">
					</p>
					<h3>FACIL</h3>
					<p>
					NetW, te ofrece una interfaz muy sencilla de utilizar. En pocos minutos, entenderas como funciona nuestra politica de promotores y empresarios, descubriras todos los beneficios y sabras como emplear todas las herramientas que tenemos para que te conviertas en todo un empresario.
					</p>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3">
					<p>
					<img src="img/persona3.jpg" width="250" height="200"> 
					</p>
					<h3>EFECTIVO</h3>
					<p>
					Creamos una estrategia de negocios REAL, con la que solo poniendo un poco de esfuerzo y en poco tiempo, tu empresa comenzara a recibir resultados palpables. Con nuestra fórmula, es imposible que algo salga mal.  
					</p>	
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3">
					<p>
					<img src="img/persona4.jpg" width="250" height="200">
					</p>
					<h3>SOCIAL</h3>
					<p>
					NetW, fue creado pensando en los pequeños y medianos empresarios, pero tambien en fortalecer la comunidad a la que pertenecen. Por ello, aca tendras la opotunidad no solo de promocionar y vender tus productos de manera gratuita, sino conocer, intercambiar ideas y hacer conexiones con los demás miembros, al fin y al cabo todos somos partners no? 
					</p>
				</div>
			</div>
		</div>
	</div>
<!-- FIN Comodo Facil Efectivo Social -->
<div class="container">
		<div class="container">
   <form method="POST" action="home.php" enctype="multipart/form-data" role="form" id="register-form" autocomplete="off" >

		<div class="form-header">
          			<h3 class="form-title"><i class="fa fa-user"></i> Registrate</h3>
                </div>

      <div class="form-body">
                

                <div class="form-group">
                 <div class="input-group">
                   	<div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                   	<input placeholder="Usuario" class="form-control" type="text" name="username" value="<?=$usernameDefault?>">
                 </div>
                </div>

                <div class="form-group">
                 <div class="input-group">
                   	<div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                   	<input placeholder="E-mail" class="form-control" type="text" name="mail" value="<?=$mailDefault?>">
                 </div>
                </div>


                   <div class="form-group">
                 <div class="input-group">
                   	<div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                   	<input placeholder="Contraseña" class="form-control" type="password" name="password">
                 </div>
                </div>

		<?php if(!array_key_exists("versioncorta", $_GET)) { ?>
			 <div class="form-group">
                 <div class="input-group">
                   	<div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                   	<input placeholder="Repita Contraseña" class="form-control" type="password" name="cpassword">
                 </div>
                </div>

		<?php } ?>

		     <div class="form-group">
                 <div class="input-group">
                   	<div class="input-group-addon"><span class="glyphicon glyphicon-flag"></span></div>
                   	<select class="form-control" name="pais">
				<?php foreach($paises as $codigo => $pais) { ?> 
					<?php if ($codigo == $_POST["pais"]) { ?>
						<option value="<?=$codigo?>" selected>
							<?=$pais?>
						</option>
					<?php } else { ?> 
						<option value="<?=$codigo?>">
							<?=$pais?>
						</option>
					<?php } ?>
					
				<?php } ?>
			</select>
                 </div>
                </div>
		


		<div class="modal-footer">

		<div>	
			
			<input class="btn btn-secondary" type="file" name="avatar">
		</div>
		<div>
			<input class="btn btn-primary" type="submit" name="" value="Enviar">
		</div>
						
		</div>
				<div>
				<?php if ($_POST && count($errores) > 0) { ?>
									<ul>
										<?php foreach ($errores as $error) { ?>
											<li>
													<?=$error?>
											</li>
						<?php } ?>
									</ul>
						<?php } ?>
				</div>
	  	</div>
	
		</div>
  		</div>	 



</div>


</div>
<!-- FIN Modal -->  

</form>
</div>
</div>
<!-- Infiormacion al pie -->  
  <div class="container">
		<section class="main row">
			<aside class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
				<h3>Información</h3>
					<ul class="list-group listas">
						<a><p><li class="list-group-item">
							<span type="button"  href="" data-toggle="modal" data-target="#exampleModalLong" role="button">
  								Preguntas Frecuentes
							</span>
 							  </li>
 							</p>
 						</a>
						<a><p><li class="list-group-item">
							<span type="button"  href="" data-toggle="modal" data-target="#exampleModalLong" role="button">
  								Bases y Condiciones
							</span>
 							  </li>
 							</p>
 						</a>
 						<a><p><li class="list-group-item">
							<span type="button"  href="" data-toggle="modal" data-target="#exampleModalLong" role="button">
  								Sobre Nosotros
							</span>
 							  </li>
 							</p>
 						</a>
					</ul> 
			</aside>

			<article class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
				<h3>Columna</h3>
				<p>
					parrafo parrafo parrafo parrafo parrafo parrafo parrafo parrafo parrafo parrafo parrafo parrafo parrafo parrafo parrafo parrafo parrafo parrafo parrafo parrafo parrafo parrafo parrafo parrafo parrafo parrafo parrafo parrafo parrafo parrafo parrafo parrafo parrafo parrafo parrafo parrafo parrafo parrafo parrafo parrafo parrafo parrafo parrafo parrafo parrafo parrafo parrafo parrafo parrafo parrafo parrafo parrafo parrafo parrafo parrafo parrafo parrafo parrafo parrafo parrafo parrafo parrafo parrafo parrafo parrafo parrafo parrafo
				</p> 
					
			</article>
		</section>
				<br>
				<br>
				<br>

		
	</div>
<!-- FIN Infiormacion al pie -->

<!-- Footer -->
 <footer class="container">
		<div>
			<h3>PYME SOCIAL</h3>
		</div>
 </footer>
<!-- Footer -->

<!-- Modal --
 <div class="modal fade" id="exampleModalshort" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      	<div class="modal-header">
        	<h5 class="modal-title" id="exampleModalLongTitle">REGISTRATE EN 1 MINUTO</h5>
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          	<span aria-hidden="true">&times;</span>
        	</button>
      	</div>
      <div class="modal-body">
       <div class="signup-form-container"-->
    
        	
 
    
  <!-- Latest compiled and minified JavaScript -->
		<script src="https://code.jquery.com/jquery-3.2.0.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		

<br>



</body>
</html>