<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
     <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		 	<link href="{{url('/css/app.css')}}" rel="stylesheet">
		 <title>Inicio</title>
</head>
<body class="grey lighten-2">
	<div class="container">
		<div class="row">

			<div class="col m2 push-m1">
				<img src="" alt="" class="responsive-img">
			</div>
			<!--div class="col m10">

				<h4 class="center">Smart Lines</h4>
				<h5 class="center">Software justo para tu empresa</h5>
			</div-->
		</div>
	</div>
  	<nav class="z-depth-2 teal" role="navigation">
    	<div class="nav-wrapper container">
      		<a href="#" class="brand-logo">Inicio</a>
      		<ul id="nav-mobile" class="right hide-on-med-and-down">
        		<li><a href=""><i class="material-icons left">folder_shared</i>Registro</a></li>
        		<li><a href="#"><i class="material-icons left">store</i>Restaunrantes</a></li>
        		<li><a href="#"><i class="material-icons right">directions_run</i>Cerrar sesión</a></li>
      		</ul>
    	</div>
  	</nav>
  	<div class="container">
	 		<div class="row">
				<div class="col m12">
			    <div class="card-panel white z-depth-3">
			      <div class="row">
							@yield('contenido')
						</div>
					</div>
				</div>
  		</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
</body>


</html>
