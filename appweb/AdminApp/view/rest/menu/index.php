<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<title></title>
	<style type="text/css">
		#logo{
			width: 9%;
			height: 100%;
		}
	</style>
</head>
<body class="grey lighten-2">
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
	<form class="" action="index.html" method="post">
		<div class="row">
			<div class="col s12">
				<div class="col s10 offset-s1 card-panel ">
					<div class="big-padding text-center black-text">
						<div class="center-align">
							<h1>Listado de  platillos</h1>
						</div>
					</div>
					<div class="right-align">
					</div>
					<div class="row">
						<table class="ccentered striped bordered z-depth-3">
							<thead>
								<tr>
									<th>Platillo</th>
									<th width="500px">Descripción</th>
									<th>Precio</th>
									<th>Accion</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Pollo Gurmet</td>
									<td>El pollo a la naranja es un plato chino-estadounidense originario de Hunan</td>
									<td>$75.00</td>
									<td>
										<a class="btn-floating waves-effect waves-light green"><i class="material-icons">edit</i></a>
										<a  class="btn-floating waves-effect waves-light red"><i class="material-icons">delete</i></a>
										<a  class="btn-floating waves-effect waves-light #2962ff blue accent-4"><i class="material-icons">visibility</i></a>
									</td>
								</tr>
								<tr>
									<td>Ensalada de nopales</td>
									<td >La ensalada de nopal es una ensalada muy rica y nutritiva. El nopal es una fuente importante de fibra,</td>
									<td>$55.00</td>
									<td>
										<a class="btn-floating waves-effect waves-light green"><i class="material-icons">edit</i></a>
										<a  class="btn-floating waves-effect waves-light red"><i class="material-icons">delete</i></a>
										<a  class="btn-floating waves-effect waves-light #2962ff blue accent-4"><i class="material-icons">visibility</i></a>
									</td>
								</tr>
								<tr>
									<td>Pay de nutella</td>
									<td>Un pastel de Nutella es un postre hecho a base de requesón con Nuella y Fresas</td>
									<td>$80.00</td>
									<td>
										<a class="btn-floating waves-effect waves-light green"><i class="material-icons">edit</i></a>
										<a  class="btn-floating waves-effect waves-light red"><i class="material-icons">delete</i></a>
										<a  class="btn-floating waves-effect waves-light #2962ff blue accent-4"><i class="material-icons">visibility</i></a>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="floating s1 offset-s10">
			<a  class="btn-floating btn-large waves-effect waves-light bkue" href="create.php"><i class="material-icons">add</i></a>
		</div>
	</body>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
	</html>
