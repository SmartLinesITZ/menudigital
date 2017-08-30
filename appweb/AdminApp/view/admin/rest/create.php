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
        <li><a href="../controller/logout.php"><i class="material-icons right">directions_run</i>Cerrar sesión</a></li>
      </ul>
    </div>
  </nav>
  <br>
  <form class="" action="index.html" method="post">
    <div class="row">
      <div class="col s12">
        <div class="col s10 offset-s1 card-panel ">
          <H3 align="center">Agregar restaurante</H3>
          <div class="aling-center">
            <h4>Información de usuario</h4>
            <div class="divider"></div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <i class="material-icons prefix">account_circle</i>
              <input id="nombre" type="text" class="validate">
              <label for="nombre">Nombre completo</label>
            </div>
            <div class="input-field col s6">
              <i class="material-icons prefix">email</i>
              <input id="correo" type="email" class="validate">
              <label for="correo">Correo</label>
            </div>
            <div class="input-field col s6">
              <i class="material-icons prefix">phone</i>
              <input id="telefono" type="text" class="validate">
              <label for="telefono">Teléfono</label>
            </div>
            <div class="input-field col s6">
              <i class="material-icons prefix">account_balance</i>
              <input id="nocueta" type="text" class="validate">
              <label for="nocueta">Número de cuenta bancaria</label>
            </div>
            <div class="input-field col s6">
              <i class="material-icons prefix">perm_identity</i>
              <input id="nameuser" type="text" class="validate">
              <label for="nameuser">Nombre de usuario</label>
            </div>
            <div class="input-field col s6">
              <i class="material-icons prefix">lock</i>
              <input id="password" type="text" class="validate">
              <label for="password">Contraseña</label>
            </div>
          </div>
          <div class="input-field col s6 offset-s6">
            <button class="btn waves-effect waves-light green right" type="submit" name="action">Aceptar
            </button><br><br><br>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
</body>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
</html>
