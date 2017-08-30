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
      <div class="col s6  card-panel ">
        <h3 class="center-align">Pendientes</h3>
        <table class="centered striped bordered z-depth-3">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Tipo de servicio</th>
              <th>Monto total</th>
              <th>Ver Pedido Completo</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>Alvin</td>
              <td>Pedido anticipado</td>
              <td>$0.87</td>
              <td>
                <a  class="btn-floating waves-effect waves-light #2962ff blue accent-4"><i class="material-icons">visibility</i></a>
                <a  class="btn-floating waves-effect waves-light green"><i class="material-icons">done</i></a>
                <a  class="btn-floating waves-effect waves-light red"><i class="material-icons">cancel</i></a>
              </td>
            </tr>
            <tr>
              <td>Alvin</td>
              <td>Pedido anticipado</td>
              <td>$0.87</td>
              <td>
                <a  class="btn-floating waves-effect waves-light #2962ff blue accent-4"><i class="material-icons">visibility</i></a>
                <a  class="btn-floating waves-effect waves-light green"><i class="material-icons">done</i></a>
                <a  class="btn-floating waves-effect waves-light red"><i class="material-icons">cancel</i></a>
              </td>
            </tr>
            <tr>
              <td>Alvin</td>
              <td>Pedido anticipado</td>
              <td>$0.87</td>
              <td>
                <a  class="btn-floating waves-effect waves-light #2962ff blue accent-4"><i class="material-icons">visibility</i></a>
                <a  class="btn-floating waves-effect waves-light green"><i class="material-icons">done</i></a>
                <a  class="btn-floating waves-effect waves-light red"><i class="material-icons">cancel</i></a>
              </td>
            </tr>
            <tr>
              <td>Alvin</td>
              <td>Pedido anticipado</td>
              <td>$0.87</td>
              <td>
                <a  class="btn-floating waves-effect waves-light #2962ff blue accent-4"><i class="material-icons">visibility</i></a>
                <a  class="btn-floating waves-effect waves-light green"><i class="material-icons">done</i></a>
                <a  class="btn-floating waves-effect waves-light red"><i class="material-icons">cancel</i></a>
              </td>
            </tr>

          </tbody>
        </table class="centered striped bordered z-depth-3">
      </div>
      <div class="col s6  card-panel ">
        <h3 class="center-align">Confirmados</h3>
        <table class="striped">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Tipo de servicio</th>
              <th>Monto total</th>
              <th>Ver Pedido Completo</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>Alvin</td>
              <td>Pedido anticipado</td>
              <td>$0.87</td>
              <td>
                <a  class="btn-floating waves-effect waves-light #2962ff blue accent-4"><i class="material-icons">visibility</i></a>
                <a  class="btn-floating waves-effect waves-light green"><i class="material-icons">done_all</i></a>
              </td>
            </tr>
            <tr>
              <td>Alvin</td>
              <td>Pedido anticipado</td>
              <td>$0.87</td>
              <td>
                <a  class="btn-floating waves-effect waves-light #2962ff blue accent-4"><i class="material-icons">visibility</i></a>
                <a  class="btn-floating waves-effect waves-light green"><i class="material-icons">done_all</i></a>
              </td>
            </tr>
            <tr>
              <td>Alvin</td>
              <td>Pedido anticipado</td>
              <td>$0.87</td>
              <td>
                <a  class="btn-floating waves-effect waves-light #2962ff blue accent-4"><i class="material-icons">visibility</i></a>
                <a  class="btn-floating waves-effect waves-light green"><i class="material-icons">done_all</i></a>
              </td>
            </tr>
            <tr>
              <td>Alvin</td>
              <td>Pedido anticipado</td>
              <td>$0.87</td>
              <td>
                <a  class="btn-floating waves-effect waves-light #2962ff blue accent-4"><i class="material-icons">visibility</i></a>
                <a  class="btn-floating waves-effect waves-light green"><i class="material-icons">done_all</i></a>
              </td>
            </tr>

          </tbody>
        </table>
      </div>
    </div>
    <div class="row">
      <div class="col s12">
        <div class="col s10 offset-s1 card-panel ">
          <h3 class="center-align">Terminados</h3>
          <table class="centered striped bordered z-depth-3">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Tipo de servicio</th>
                <th>Monto total</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>Alvin</td>
                <td>Pedido anticipado</td>
                <td>$0.87</td>
                <td>
                  <i class="material-icons">thumb_up</i>

                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </form>
</body>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
</html>
