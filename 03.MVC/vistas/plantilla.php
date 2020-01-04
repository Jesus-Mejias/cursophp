<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<!--=========================
	]: Plugins CSS            
	==========================-->

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	
	<!--=========================
	]: Plugins JS            
	==========================-->

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 

	<!-- Latest compiled Fontawesome-->
	<script src="https://kit.fontawesome.com/e632f1f723.js" crossorigin="anonymous"></script>

</head>
<body>

	<!--=====================================
	]: Logotipo
	======================================-->
	<div class="container-fluid">
	  <h3 class="text-center py-3">LOGO</h3>
	</div>

	<!--=====================================
	]: Botonera
	======================================-->
	<div class="container-fluid bg-light">
		<div class="container">
			<ul class="nav nav-justified py-2 nav-pills">

				<!-- ]: Verifica que existan variables GET para activar cada boton -->
				<?php if (isset($_GET["pagina"])): ?>

					<!-- ]: Boton Registro -->					
					<?php if ($_GET["pagina"] == "registro"): ?>
						<li class="nav-item">
							<a href="index.php?pagina=registro" class="nav-link active">Registro</a>
						</li>
					<?php else: ?>
						<li class="nav-item">
							<a href="index.php?pagina=registro" class="nav-link">Registro</a>
						</li>
					<?php endif ?>
					
					<!-- ]: Boton Ingreso -->
					<?php if ($_GET["pagina"] == "ingreso"): ?>
						<li class="nav-item">
							<a href="index.php?pagina=ingreso" class="nav-link active">Ingreso</a>
						</li>
					<?php else: ?>
						<li class="nav-item">
							<a href="index.php?pagina=ingreso" class="nav-link">Ingreso</a>
						</li>
					<?php endif ?>
					
					<!-- ]: Boton Inicio -->
					<?php if ($_GET["pagina"] == "inicio"): ?>
						<li class="nav-item">
							<a href="index.php?pagina=inicio" class="nav-link active">Inicio</a>
						</li>
					<?php else: ?>
						<li class="nav-item">
							<a href="index.php?pagina=inicio" class="nav-link">Inicio</a>
						</li>
					<?php endif ?>

					<!-- ]: Boton Salir -->	
					<?php if ($_GET["pagina"] == "salir"): ?>
						<li class="nav-item">
							<a href="index.php?pagina=salir" class="nav-link active">Salir</a>
						</li>
					<?php else: ?>
						<li class="nav-item">
							<a href="index.php?pagina=salir" class="nav-link">Salir</a>
						</li>
					<?php endif ?>
				
				<!-- ]: En caso de no existir variables GET: -->
				<?php else: ?>
					
					<!-- ]: Se muestra activo el boto de registro que es la pagina inicial -->
					<li class="nav-item">
						<a href="index.php?pagina=registro" class="nav-link active">Registro</a>
					</li>

					<li class="nav-item">
						<a href="index.php?pagina=ingreso" class="nav-link">Ingreso</a>
					</li>

					<li class="nav-item">
						<a href="index.php?pagina=inicio" class="nav-link">Inicio</a>
					</li>

					<li class="nav-item">
						<a href="index.php?pagina=salir" class="nav-link">Salir</a>
					</li>
					
				<?php endif ?>

			</ul>
		</div>
	</div>
	
	<!--=====================================
	]: Contenido
	======================================-->

	<div class="container-fluid">
		<div class="container">

			<?php

				# ]: Verifica que existan variables GET
				if (isset($_GET["pagina"])) {
					
					# ]: Verifica el valor pasado en la variable GET para cada pagina
					if ($_GET["pagina"] == "registro" ||
						$_GET["pagina"] == "ingreso" ||
						$_GET["pagina"] == "inicio" ||
						$_GET["pagina"] == "salir") 
					{
						
						# ]: Incluye la pagina que se este llamando en la variable GET
						include "paginas/".$_GET["pagina"].".php";
					}else{

						# ]: Error si la pagina no se encuentra 
						include "paginas/error404.php";

					}

				}else {

					# ]: Pagina inicial si no existen variables GET
					include "paginas/registro.php";

				}

			?>

		</div>
	</div>

</body>
</html>