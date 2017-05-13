
<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/js/material.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/js/ripples.min.js"></script>
 		<script >$.material.init();</script>
		<script src="/js/app.js"></script>
		<title>Iniciar sesión | SGR</title>
</head>
<body class="grey lighten-2">
	<div class="col m12 teal">
  			<br>
  			<br>
  	</div>
		<div class="container">
	 	<div class="row">
			<div class="col m12">
			    <div class="card-panel white z-depth-3">
			       	<H3 align="center">Bienvenido</H3>
			       	<div class="row">
				       	<div class="col m6">
				       		<a href="{{url('/restaurantes/rest')}}">
				    		<div class="card-panel amber darken-3 z-depth-5 center">
								<h4 class="white-text">Administrador de App</h4>
				    			<i class="material-icons center" style="font-size: 100px; color: black;">important_devices</i>
				   			</div>
				   			</a>
						</div>
						<div class="col m6">
				    		<a href="{{ url('homerest') }}">
				    		<div class="card-panel amber darken-3 z-depth-5 center">
								<h4 class="white-text">Anministrador de Rest.</h4>
				    			<i class="material-icons center" style="font-size: 100px; color: black;">store</i>
				   			</div>
				   			</a>
						</div>

			    </div>
			</div>
		</div>
  	</div>
</body>
</html>
