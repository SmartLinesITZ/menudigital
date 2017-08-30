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
  <form class="" action="index.html" method="post">
    <div class="row">
      <div class="col s12">
        <div class="col s10 offset-s1 card-panel ">
          <div class="big-padding text-center black-text">
            <div class="center-align">
              <h1>Restaurantes registrados</h1>
            </div>
          </div>
          <table class="centered striped bordered z-depth-3">
            <thead>
              <tr>
                <th width="24%">Nombre de Usuario</th>
                <th width="20%">Restaurante</th>
                <th width="26%">Domicilio</th>
                <th width="16%">Teléfono</th>
                <th width="18%">Acción</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>Alejandro Gonzales Torres</td>
                <td>Lucky Luciano</td>
                <td>Orito Av. Pino Suarez #303</td>
                <td>4929052800</td>
                <td><a class="btn-floating btn  waves-effect waves-light green" href="update.php"><i class="material-icons">edit</i></a>
                  <a class="btn-floating btn waves-effect waves-light red"><i class="material-icons">delete</i></a>
                  <a class="btn-floating btn waves-effect waves-light #2962ff blue accent-4"><i class="material-icons">visibility</i></a> 
                </td>
              </tr>
              <tr>
                <td>Alejandro Castro Saucedo</td>
                <td>VancuaverWings</td>
                <td>Calle 3a de los bolos #900</td>
                <td>4921134553</td>
                <td><a class="btn-floating btn  waves-effect waves-light green" href="update.php"><i class="material-icons">edit</i></a>
                  <a class="btn-floating btn waves-effect waves-light red"><i class="material-icons">delete</i></a>
                  <a class="btn-floating btn waves-effect waves-light #2962ff blue accent-4"><i class="material-icons">visibility</i></a> 
                </td>
              </tr>
              <tr>
                <td>Jesus Ramirez Vargas</td>
                <td>Wings Army</td>
                <td>Calle independencia #870</td>
                <td>4991028719</td>
                <td><a class="btn-floating btn  waves-effect waves-light green" href="update.php"><i class="material-icons">edit</i></a>
                  <a class="btn-floating btn waves-effect waves-light red"><i class="material-icons">delete</i></a>
                  <a class="btn-floating btn waves-effect waves-light #2962ff blue accent-4"><i class="material-icons">visibility</i></a> 
                </td>
              </tr>
              <tr>
                <td>Alejandro Gonzales Torres</td>
                <td>Lucky Luciano</td>
                <td>Orito Av. Pino Suarez #303</td>
                <td>4929052800</td>
                <td><a class="btn-floating btn  waves-effect waves-light green" href="update.php"><i class="material-icons">edit</i></a>
                  <a class="btn-floating btn waves-effect waves-light red"><i class="material-icons">delete</i></a>
                  <a class="btn-floating btn waves-effect waves-light #2962ff blue accent-4"><i class="material-icons">visibility</i></a> 
                </td>
              </tr>
              <tr>
                <td>Alejandro Castro Saucedo</td>
                <td>VancuaverWings</td>
                <td>Calle 3a de los bolos #900</td>
                <td>4921134553</td>
                <td><a class="btn-floating btn  waves-effect waves-light green" href="update.php"><i class="material-icons">edit</i></a>
                  <a class="btn-floating btn waves-effect waves-light red"><i class="material-icons">delete</i></a>
                  <a class="btn-floating btn waves-effect waves-light #2962ff blue accent-4"><i class="material-icons">visibility</i></a> 
                </td>
              </tr>
              <tr>
                <td>Jesus Ramirez Vargas</td>
                <td>Wings Army</td>
                <td>Calle independencia #870</td>
                <td>4991028719</td>
                <td><a class="btn-floating btn  waves-effect waves-light green" href="update.php"><i class="material-icons">edit</i></a>
                  <a class="btn-floating btn waves-effect waves-light red"><i class="material-icons">delete</i></a>
                  <a class="btn-floating btn waves-effect waves-light #2962ff blue accent-4"><i class="material-icons">visibility</i></a> 
                </td>
              </tr>
            </tbody>
          </table>
          <br>
        </div>
      </div>
    </div>
  </div>
  <div class=" col s1 offset-s11">
    <a class="btn-floating btn-large waves-effect waves-light blue" href="create.php"><i class="material-icons">add</i></a>
  </div>
</div>
</form>
</body>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
</html>
