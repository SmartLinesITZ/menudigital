<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
	<link href="{{url('/css/app.css')}}" rel="stylesheet">

	<!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
-->
</head>
<body class="grey lighten-2">
	<div class="container">
		
	</div>
  	<nav class="z-depth-2  #ffab00 amber accent-4" role="navigation">
    	<div class="nav-wrapper container">
      		<a href="#" class="brand-logo">Inicio</a>
      		<ul id="nav-mobile" class="right hide-on-med-and-down">
        		<li><a href="#"><i class="material-icons left">headset_mic</i>Servicios</a></li>
        		<li><a href="#"><i class="material-icons left">restaurant_menu</i>Menu de platillos</a></li>
        		<li><a href="#"><i class="material-icons left">room_service</i>pedidos</a></li>
        		<li><a href="#"><i class="material-icons right">directions_run</i>Cerrar sesión</a></li>
      		</ul>
    	</div>
  	</nav>
  	<div class="container">
	 	<div class="row">
			<div class="col m12">
			  <div class="card-panel white z-depth-3">
			    <div class="">

                @yield('contenido')

			    </div>
        </div>
			</div>
		</div>
  	</div>

</body>

<!--script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>

</html>
