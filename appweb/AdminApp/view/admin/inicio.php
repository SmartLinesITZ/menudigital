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
			background: url(../../scr/img/4.jpg) no-repeat center center fixed;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}
		#contenedor{
			opacity: 0.9;
		}
		#botones{
			opacity: 1.0;
		}
		#logo{
			width: 9%;
			height: 100%;
		}
	</style>
</head>
<body class="grey lighten-2">
	<nav class="z-depth-2 #d50000 red accent-4" role="navigation">
		<div class="nav-wrapper container">
			<img src="../../scr/img/logo.png" id="logo">
			<ul id="nav-mobile" class="right hide-on-med-and-down">
				<li><a href="rest/create.php"><i class="material-icons left">folder_shared</i>Registro</a></li>
				<li><a href="rest/index.php"><i class="material-icons left">store</i>Restaurantes</a></li>
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
						<div class="col m6">
							<a href="rest/create.php">
								<div class="card-panel white accent-4 center">
									<h4 class="black-text">Registro</h4>
									<i class="material-icons center" style="font-size: 100px; color: black;">folder_shared</i>
								</div>
							</a>
						</div>
						<div class="col m6">
							<a href="rest/index.php">
								<div class="card-panel white accent-4 center">
									<h4 class="black-text">Restaurantes</h4>
									<i class="material-icons center" style="font-size: 100px; color: black;">store</i>
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
