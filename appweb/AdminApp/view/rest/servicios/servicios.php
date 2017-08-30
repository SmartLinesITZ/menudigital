<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Empresa</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<style type="text/css">
		#logo{
			width: 9%;
			height: 100%;
		}
	</style>
</head>
<body class="grey lighten-2">
	<div class="container">
	</div>
	<nav class="z-depth-2 #d50000 red accent-4" role="navigation">
		<div class="nav-wrapper container">
		<a href="../inicio.php"><img src="../../../scr/img/logo.png" id="logo"></a>
			<ul id="nav-mobile" class="right hide-on-med-and-down">
				<li><a href="../servicios/servicios.php"><i class="material-icons left">headset_mic</i>Servicios</a></li>
				<li><a href="../menu/index.php"><i class="material-icons left">restaurant_menu</i>Menu de platillos</a></li>
				<li><a href="../pedidos/pedidos.php"><i class="material-icons left">room_service</i>Pedidos</a></li>
				<li><a href="../perfil/edit.php"><i class="material-icons left">face</i>Perfil</a></li>
				<li><a href="../controller/logout.php"><i class="material-icons right">directions_run</i>Cerrar sesión</a></li>
			</ul>
		</div>
	</nav>
	<div class="container">
		<div class="collection">
			<ul class="collapsible" data-collapsible="accordion">
				<li>
					<div class="collapsible-header"><span class="badge"><div class="switch">
						<label>
							Off
							<input type="checkbox">
							<span class="lever"></span>
							On
						</label>
					</div></span>Reservaciones</div>
					<div class="collapsible-body"><p>Cuentas con servicio de resarvación. Habilita la opcion de ON para que tus clientes puedas ver y hacer resevacion por medio de la app.</p></div>
				</li>
				<li>
					<div class="collapsible-header"><span class="badge"><div class="switch">
						<label>
							Off
							<input type="checkbox">
							<span class="lever"></span>
							On
						</label>
					</div></span>Pedido anticipado</div>
					<div class="collapsible-body"><p></p></div>
				</li>
				<li>
					<div class="collapsible-header"><span class="badge"><div class="switch">
						<label>
							Off
							<input type="checkbox">
							<span class="lever"></span>
							On
						</label>
					</div></span>Pedido a domicilio</div>
					<div class="collapsible-body"><p>Descripcion d eun pedido a domicilio.</p></div>
				</li>
			</div>
		</div>
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
	</body>
	</html>
