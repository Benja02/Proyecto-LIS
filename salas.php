<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AutoCube Biblioteca - Universidad Don Bosco</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/pricing/">

	<link rel="stylesheet" href="css/estilos.css">
	 <!-- Custom styles for this template -->
	 <link href="pricing.css" rel="stylesheet">
</head>
<body>
	<?php
		include("funciones.php");

		if(isset($_POST['aceptar'])){
			echo "<META HTTP-EQUIV='Refresh' CONTENT='0; url=salas.php'>";
		}

		//validación del modal: Login
		if(isset($_POST['ingresar'])){
			$carnet = isset($_POST['carnet']) ? $_POST['carnet'] : null;
			$password = isset($_POST['contra']) ? $_POST['contra'] : null;
			ingresar($carnet, $password);		
		}
	
		//validación del modal: Solicitar
		if(isset($_POST['solicitar'])){
			$carnet = isset($_POST['carnet']) ? $_POST['carnet'] : null;
			$password = isset($_POST['contra']) ? $_POST['contra'] : null;
			$elementoID = isset($_POST['cubiculo']) ? $_POST['cubiculo'] : null;
			$cRID = 2; //prestamo
			solicitar($carnet, $password, $elementoID, $cRID);
		}
	
		//validación del modal: Reservar
		if(isset($_POST['reservar'])){
			$carnet = isset($_POST['carnet']) ? $_POST['carnet'] : null;
			$password = isset($_POST['contra']) ? $_POST['contra'] : null;
			$elementoID = isset($_POST['cubiculo']) ? $_POST['cubiculo'] : null;			
			$cRID = 1; //reserva
			solicitar($carnet, $password, $elementoID, $cRID);
		}
	?>
	<header>
		<div  class="container-fluid">
			<nav class="navbar navbar-expand-lg navbar-light bd-highlight border-bottom">
				<a class="navbar-brand pl-4" href="inicio.php"><img src="img/UDB_negras.png" alt="udb" width="75px;" weigh="75px;"><img src="img/biblio_logo.png" alt="udb" width="75px;" weigh="75px;"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<h6 style="color: rgb(67, 73, 161);">Biblioteca Rafael Meza Ayau</h6>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
				  <ul class="navbar-nav ml-auto pr-4">
					<li class="nav-item ">
					  <a class="nav-link" id="words" href="inicio.php">Primera planta&nbsp;&nbsp;|</a>
					</li>
					<li class="nav-item ">
					  <a class="nav-link font-weight-normal" id="words" href="segundaPlanta.php">Segunda planta&nbsp;&nbsp;|</a>
					</li>
					<li class="nav-item ">
						<a class="nav-link" id="words" href="salas.php"><strong>Salas</strong></a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link"  href="login.html" data-toggle='modal' data-target='#login'>
							&nbsp;<img src="img/login-icons-png-7.png"  width="32px;" weigh="33px;" alt="login">
						</a>
					  </li>
				  </ul>
				</div>
			</nav> 
		</div>
	</header>
	<section>
	<!-- contenedor de 3 -->
	<div class="container pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto">
		<div class="card-deck mb-3 text-center">
			<!-- sala de reuniones -->
			  	<div class="card mb-4 shadow-sm">
					<div class="card-header">
						<img src="img/sR.png" width="120px" alt=""></p>
						<!-- script para obtener el estado del cubiculo -->
						<?php echo imprimirEstado("sRP2"); ?>
					</div>
					<div class="card-body">
						<ul class="list-unstyled mt-3 mb-4">
							<li>
								<!-- impresión del usuario activo -->
								<?php echo impresionUsuarioActivo("sRP2",date("Y-m-d")); ?>
							</li>
							<hr>
							<li>
								<strong><span style="justify-content: center;">Reservas</span></strong>
							</li>
							<!-- obtención e impresión de las reservas pasando la categoria de registro y el codigo del cubiculo-->
							<?php echo obtenerReservas(1, "sRP2"); ?>
						</ul>
						<?php echo botonSolicitar("sRP2"); ?>
						<?php echo botonReservar("sRP2"); ?>
					</div>
			  	</div>
			<!-- termina sala de reuniones -->

			<!-- sala de conferencias -->
			<div class="card mb-4 shadow-sm">
					<div class="card-header">
						<img src="img/sC.png" width="120px" alt=""></p>
						<!-- script para obtener el estado del cubiculo -->
						<?php echo imprimirEstado("sCP4"); ?>
					</div>
					<div class="card-body">
						<ul class="list-unstyled mt-3 mb-4">
							<li>
								<!-- impresión del usuario activo -->
								<?php echo impresionUsuarioActivo("sCP4",date("Y-m-d")); ?>						 
							</li>
							<hr>
							<li>
								<strong><span style="justify-content: center;">Reservas</span></strong>
							</li>
							<!-- obtención e impresión de las reservas pasando la categoria de registro y el codigo del cubiculo-->
							<?php obtenerReservas(1, "sCP4"); ?>
						</ul>
						<?php echo botonSolicitar("sCP4"); ?>
						<?php echo botonReservar("sCP4"); ?>
					</div>
			  	</div>
			<!-- termina sala de conferencias -->
		</div>
	</div>
	<!-- termina contenedor de 3 -->

	</section>

<!--Modals solicitar-->
<div class="modal fade" id="solicitarsRP2" tabindex="-1" role="dialog" aria-labelledby="solicitarLabel" aria-hidden="true">
	<?php echo impresionModalSolicitar("sRP2"); ?>
</div>
<div class="modal fade" id="solicitarsCP4" tabindex="-1" role="dialog" aria-labelledby="solicitarLabel" aria-hidden="true">
	<?php echo impresionModalSolicitar("sCP4"); ?>
</div>
<!--Termina Modal solicitar -->

<!--Modals reservar-->
<div class="modal fade" id="reservarsRP2" tabindex="-1" role="dialog" aria-labelledby="reservarLabel" aria-hidden="true">
	<?php echo impresionModalReservar("sRP2"); ?>
</div>
<div class="modal fade" id="reservarsCP4" tabindex="-1" role="dialog" aria-labelledby="reservarLabel" aria-hidden="true">
	<?php echo impresionModalReservar("sCP4"); ?>
</div>
<!--Termina Modal reservar -->

<!--login-->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginLabel" aria-hidden="true">
	<?php echo impresionLogin(); ?>
</div>
<!--Termina login-->

<!-- MODALS -->
<!------------>

<!-- modal solicitudIngresada -->
<div class="modal fade" id="solicitudIngresada" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="solicitudIngresadaLabel" style="color:green">¡Solicitud creada!</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
            <div class="modal-footer">
				<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
					<center><input type='submit' class='btn btn-success' name='aceptar' value='Aceptar'/></center>
				</form>
            </div>
        </div>
    </div>
</div>
<!-- termina modal solicitudIngresada -->


<!-- modal solicitudExistente -->
<div class="modal fade" id="solicitudExistente" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="solicitudExistenteLabel">Usted ya ha registrado una solicitud para un cubículo</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
            <div class="modal-footer">
				<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
					<center><input type="submit" class="btn btn-danger" data-dismiss="modal" name="aceptar" value="Cerrar"/></center>
				</form>
            </div>
        </div>

    </div>
</div>
<!-- termina modal solicitudExistente -->

<!-- modal contraseñaIncorrecta -->
<div class="modal fade" id="contraseñaIncorrecta" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="loginLabel">Contraseña incorrecta</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
            <div class="modal-footer">
				<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
					<center><input type="submit" class="btn btn-danger" data-dismiss="modal" name="aceptar" value="Cerrar"/></center>
				</form>
            </div>
        </div>

    </div>
</div>
<!-- termina modal contraseñaIncorrecta -->

<!-- modal usuarioNoEncontrado -->
<div class="modal fade" id="usuarioNoEncontrado" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="loginLabel">Usuario no encontrado</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
            <div class="modal-footer">
				<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
					<center><input type="submit" class="btn btn-danger" data-dismiss="modal" name="aceptar" value="Cerrar"/></center>
				</form>
            </div>
        </div>
    </div>
</div>
<!-- termina modal usuarioNoEncontrado -->

<!-- modal errorSolicitud -->
<div class="modal fade" id="errorSolicitud" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="errorSolicitudLabel">Ha ocurrido un error al ingresar la solicitud, intente nuevamente</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
            <div class="modal-footer">
				<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
					<center><input type="submit" class="btn btn-danger" data-dismiss="modal" name="aceptar" value="Cerrar"/></center>
				</form>
            </div>
        </div>
    </div>
</div>
<!-- termina modal errorSolicitud -->

<!-------------------->
<!-- TERMINA MODALS -->

<footer class="page-footer text-center md-4	 pt-5 border-top">
	<!--Footer Links-->
	<div class="container-fluid">
		<div class="row">
			<!--First column-->
			<div class="col-md-2">
    	        <h5 class="text-uppercase font-weight-bold mb-4">Información</h5>
				<ul class="list-unstyled">
					<li><a href="http://www.udb.edu.sv/udb/" target="_blank">Página Oficial UDB</a></li>
					<li><a href="https://www.udbvirtual.edu.sv/auladigital/login/index.php" target="_blank">UDB Virtual</a></li>
					<li><a href="https://admacad.udb.edu.sv/portalweb" target="_blank">Portal Web</a></li>
			  	</ul>
			</div>
			<!--/.First column-->
	
			<hr class="w-100 clearfix d-md-none">
	
			<!--Second column-->
			<div class="col-md-2 ml-auto mx-auto">
				<h5 class="text-uppercase font-weight-bold mb-4">Mapa de Sitio</h5>
				<ul class="list-unstyled">
					<li><a href="inicio.php">Primera Planta</a></li>
					<li><a href="segundaPlanta.php">Segunda Planta</a></li>
					<li><a href="salas.php">Salas</a></li>
				</ul>
			</div>
			<!--/.Second column-->
	
			<hr class="w-100 clearfix d-md-none">
	
			<!--Third column-->
			<div class="col-md-3 mx-auto">
				<h5 class="text-uppercase font-weight-bold mb-3">CONTÁCTANOS</h5>
				<ul class="list-unstyled">
					<li><a href="https://www.waze.com/ul?preview_venue_id=177471625.1774454103.453726&navigate=yes" target="_blank">Ciudadela Don Bosco, Soyapango, San Salvador.</a></li>
					<li><a href="#!"><strong>Phone:</strong> (503) 2251-8253</a></li>
					<li><a href="#!"> <strong>Email:</strong> udbvirtual@udb.edu.sv</a></li>
				</ul>
			</div>
			<!--/.Third column-->
	
			<hr class="w-100 clearfix d-md-none">
	
            <!--Fourth column-->
            <div class="col-md-2 mx-auto">
                <h5 class="text-uppercase font-weight-bold mb-3">Redes Sociales</h5>
                <ul class="">
					<li><a href="https://www.facebook.com/UDBelsalvador/" target="_blank"><img src="https://www.waldorfgarden.org/wp-content/uploads/2019/04/facebook-logo-circle-new.png" width="47px" weight="40px" alt="fb"></a><a href="https://www.instagram.com/udbelsalvador/" target="_blank"><img src="https://www.insquebec.org/wp-content/uploads/2019/08/instagram.jpg" width="55px" weight="30px" alt="insta" ></a></li>
					<br>
					<li><a href="https://twitter.com/UDBElsalvador" target="_blank"><img src="https://cdn2.iconfinder.com/data/icons/social-icon-3/512/social_style_3_twiter-512.png" width="35px" weight="35px" alt="insta" ></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.youtube.com/user/UDBmultimedia" target="_blank"><img src="https://cdn.pixabay.com/photo/2017/06/23/02/35/youtube-2433301_960_720.png" width="35px" weight="35px" alt="youtube" ></a></li>
                </ul>
            </div>
            <!--/.Fourth column-->

            <div class="col-md-2 mx-auto">
                <!-- <img src="img/UDB_negras.png" alt="udb" width="75px;" weigh="75px;">  -->
                <h5 class="text-uppercase font-weight-bold mb-3">Creadores</h5>    
                <ul>
                    <li>Benjamín Gómez</li>
                    <li>Andrés Chapetón</li>
                    <li>Eduardo Nave</li>
                    <li>Manuel Hurtado</li>
                    <li>Lisbeth Godoy</li>
                </ul>
			</div>
		  </div>
	</div>
	<!--/.Footer Links-->

	<!--Copyright-->
	<div class="footer-copyright py-3 text-center">
		<div class="container-fluid">
            <strong>
                © 2020 Copyright
            </strong>
		</div>
	</div>
	<!--/.Copyright-->
</footer>
</body>
</html>