


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<title></title>
</head>
<body>
	<header class="row chicle">
	
		<div class="container col-md-6">
			<h1>HEADER <small>Texto secundario</small></h1>
		</div>
		<br>
		<div class="col-md-6">
		    <form id="signin" class="navbar-form navbar-right" role="form">
                <div class="input-group">
	                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	                <input id="email" type="email" class="form-control" name="email" value="" placeholder="Email Address">                                        
                </div>

                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input id="password" type="password" class="form-control" name="password" value="" placeholder="Password">                                        
                </div>

                    <button type="submit" class="btn btn-primary">Login</button>
            </form>
						
	</header>
	<div class="container-fluid">
		<section>
			<div class="jumbotron div-principal">
			  		<h1>Bienvenido, partner!</h1>
			  			<p>JHSJK es la primera Red Social, que a la vez funciona como un e-commerce. No importa si eres un microempresario en busca de potenciar su negocio o un usuario comun. Al unirte a JSGHAGJ, automáticamente de conviertes en partner y puedes obtener beficios palpables vendiendo (Empresario) o ayudando a vender (Promotor). </p>
			  			
			  			<p><button class="btn btn-lg btn-outline fade-color col-md-offset-5" href="#" role="button"> ¡Descubre más!</button></p>
			</div>
		</section>
	</div>
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

	<div class="container">

    	<div class="signup-form-container">
    
        	<form role="form" id="register-form" autocomplete="off" method="post">
          		<div class="form-header">
          			<h3 class="form-title"><i class="fa fa-user"></i> Registrate</h3>
                </div>
         
         <div class="form-body">
                      
            <div class="form-group">
                <div class="input-group">
                   	<div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                   	<input name="username" type="text" class="form-control" placeholder="Usuario" value="<?=$usernameDefault?>">
                </div>
                <span class="help-block" id="error"></span>
            </div>
                        
            <div class="form-group">
                <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                   <input name="mail" type="text" class="form-control" placeholder="Correo Electrónico" value="<?=$mailDefault?>">
                </div> 
                <span class="help-block" id="error"></span>                     
            </div>
                        
              <div class="row">
                        
                   <div class="form-group col-lg-12">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></div>
                        <input name="cel" type="code" class="form-control" placeholder="Celular" value="<?=$celDefault?>">
                        </div>  
                        <span class="help-block" id="error"></span>                    
                   </div>

                   <div class="form-group col-lg-12">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-home"></span></div>
                        <input name="direccion" type="text" class="form-control" placeholder="Dirección">
                        </div>  
                        <span class="help-block" id="error"></span>                    
                   </div>

                    <div class="form-group col-lg-6">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                        <input name="password1" id="password" type="password" class="form-control" placeholder="Introduce la Contraseña" value="<?=$password1Default?>">
                        </div>  
                        <span class="help-block" id="error"></span>                    
                   </div>
                            
                   <div class="form-group col-lg-6">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                        <input name="password2" type="password" class="form-control" placeholder="Repite la Contraseña" value="<?=$password2Default?>">
                        </div>  
                        <span class="help-block" id="error"></span>                    
                   </div>
                            
             </div>
                        
                        
            </div>
            
            <div class="form-footer">
                 <button type="submit" class="btn btn-info">
                 <span class="glyphicon glyphicon-log-in"></span> Inicia Seción !
                 </button>
            </div>


            </form>
            
           </div>

           <br>

		<section class="main row">
			<aside class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
				<h3>Información</h3>
					<ul class="list-group listas">
						<a href=""><li class="list-group-item">Preguntas Frecuentes</li></a>
						<a href=""><li class="list-group-item">Bases y Condiciones</li></a>
						<a href=""><li class="list-group-item">Sobre Nosotros</li></a>
						<a href=""><li class="list-group-item">Privacidad</li></a>
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

	<footer class="container">
		<div>
			<h3>YSYERLY VARELA</h3>
		</div>
	</footer>
		
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://code.jquery.com/jquery-3.2.0.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		aieudhaeohdoahdojqwodhqowhdoiqhwdoqwhdioqwodh
		wsdoewhfdowhfopwhefwuefew
		weofewohfowenfewnofnwoenfoewnofnweonfoiwnlkasnfihwesbgvoewlshdvowiesjfd
</body>
</html>