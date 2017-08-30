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
        <div class="col s6 offset-s3 card-panel ">
          <h1>Registro de categoría</h1>
          <div class="row">
            <div class="input-field col s6">
              <i class="material-icons prefix">toc</i>
              <input id="icon_prefix" type="text" class="validate">
              <label for="icon_prefix">Categoría</label>
            </div>
            <div class="row">
              <div class="input-field col s6">
                <i class="material-icons prefix">short_text</i>
                <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
                <label for="icon_prefix2">Descripción</label>
              </div>
              <div class=" col s1 offset-s10">
                <a class="btn-floating btn  waves-effect waves-light blue"><i class="material-icons">save</i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col s12">
          <div class="col s6 offset-s3 card-panel ">
            <div class="row">
              <table class="centered striped bordered z-depth-3">
                <thead>
                  <tr>
                    <th>Categoría</th>
                    <th>Descripción</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Ensaladas</td>
                    <td>Plato que se prepara mezclando distintos alimentos, crudos o cocidos, principalmente hortalizas troceadas, y se sirve frío o tibio, y aliñado o aderezado con alguna salsa.</td>
                    <td>
                      <a class="btn-floating btn  waves-effect waves-light green"><i class="material-icons">edit</i></a>
                      <a class="btn-floating btn waves-effect waves-light red"><i class="material-icons">delete</i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Plato fuerte</td>
                    <td>Plato principal, o que más alimenta y satisface, de una comida, o plato mejor preparado por una persona o restaurante.Cosa que destaca o es la más importante entre las varias que componen algo.</td>
                    <td>
                      <a class="btn-floating btn  waves-effect waves-light green"><i class="material-icons">edit</i></a>
                      <a class="btn-floating btn waves-effect waves-light red"><i class="material-icons">delete</i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Postres</td>
                    <td>Alimento, generalmente dulce, que se sirve al finalizar una comida.</td>
                    <td>
                      <a class="btn-floating btn  waves-effect waves-light green"><i class="material-icons">edit</i></a>
                      <a class="btn-floating btn waves-effect waves-light red"><i class="material-icons">delete</i></a>
                    </td>
                  </tr>
                </tbody>
              </table>
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
