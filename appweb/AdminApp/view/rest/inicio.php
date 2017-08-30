<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="../src/js/jquery.js"></script>
	<script src="../src/js/materialize.min.js"></script>
	<title>Inicio</title>
	<style type="text/css">
		body {
			background: url(../../scr/img/2.jpg) no-repeat center center fixed;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}
		#contenedor{
			opacity: 0.9;
		}
		#botones{
			opacity: 1;
		}
		#logo{
			width: 9%;
			height: 100%;
		}
	</style>
</head>
<body>
	<nav class="z-depth-2 #d50000 red accent-4" role="navigation">
		<div class="nav-wrapper container">
		<img src="../../scr/img/logo.png" id="logo">
			<ul id="nav-mobile" class="right hide-on-med-and-down">
				<li><a href="servicios/servicios.php"><i class="material-icons left">headset_mic</i>Servicios</a></li>
				<li><a href="menu/index.php"><i class="material-icons left">restaurant_menu</i>Menu de platillos</a></li>
				<li><a href="pedidos/pedidos.php"><i class="material-icons left">room_service</i>Pedidos</a></li>
				<li><a href="perfil/edit.php"><i class="material-icons left">face</i>Perfil</a></li>
				<li><a href="../../index.html"><i class="material-icons right">directions_run</i>Cerrar sesión</a></li>
			</ul>
		</div>
	</nav>
	<br><br><br>
	<div class="container">
		<div class="row">
			<div class="col m12">
				<div class="card-panel #d50000 red accent-4"  id="contenedor">
					<H3 align="center" class="white-text" id="botones">Bienvenido</H3>
					<div class="row">
						<div class="col m4">
							<a href="servicios/servicios.php">
								<div class="card-panel white center" id="botones">
									<h4 class="black-text">Servicios</h4>
									<i class="material-icons center" style="font-size: 100px; color: black;">headset_mic</i>
								</div>
							</a>
						</div>
						<div class="col m4">
							<a href="menu/index.php">
								<div class="card-panel white center" id="botones">
									<h4 class="black-text">Menu</h4>
									<i class="material-icons center" style="font-size: 100px; color: black;">restaurant_menu</i>
								</div>
							</a>
						</div>
						<div class="col m4" id="botones">
							<a href="pedidos/index.php">
								<div class="card-panel white center" id="botones">
									<h4 class="black-text">Pedidos</h4>
									<i class="material-icons center" style="font-size: 100px; color: black;">room_service</i>
								</div>
							</a>
						</div>

					</div>
				</div>
			</div>
		</div>

	</body>
	<script type="text/javascript">
	</script>
	</html>
