<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Guardar</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
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
        <div class="col s6 offset-s3 card-panel ">
          <div class="col s12"><h3 class="center-align">Agregar Platillo</h3></div>
          <div class="row">
            <div class="col s6">
              <label>Cetgorira</label>
              <select class="browser-default">
                <option value="" disabled selected>Entra</option>
                <option value="1">Ensalada</option>
                <option value="2">Botana</option>
                <option value="3">Platillo fuerte</option>
              </select>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s6">
              <i class="material-icons prefix">restaurant</i>
              <input id="nombre" type="text" class="validate">
              <label for="nombre">Nombre del platillos</label>
            </div>
            <div class="row">
              <div class="input-field col s6">
                <i class="material-icons prefix">$</i>
                <input id="precio" type="text" class="validate">
                <label for="precio">Precio</label>
              </div>

              <div class="row">
                <div class="input-field col s12">
                  <i class="material-icons prefix">short_text</i>
                  <textarea id="textarea1" class="materialize-textarea"></textarea>
                  <label for="textarea1">Descripcion</label>
                </div>
              </div>
            </div>
            <div class=" col s1 offset-s10">
              <a class="btn-floating btn-large  waves-effect waves-light blue" href="index.php"><i class="material-icons">save</i></a>
            </div>
          </div>

        </div>
        <div class="col s8 offset-s2  card-panel ">
          <div class="col s12"><h3 class="center-align">Menu</h3></div>
          <table class="centered responsive-table highlight">
            <thead>
              <tr>
                <th>Platillo</th>
                <th width="500px"></th>
                <th>Precio</th>
                <th>Accion</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Pollo Gurmet</td>
                <td>........................................................................</td>
                <td>$75.00</td>
                <td>
                  <a class="btn-floating waves-effect waves-light red"><i class="material-icons">add</i></a>
                </td>
              </tr>

            </tbody>
          </div>
        </div>
      </div>
    </form>

  </body>
  </html>
