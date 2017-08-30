<div class="container-login center-align #d50000 red accent-4" id="divlogin">
    <div style="margin:15px 0;" >
      <img src="scr/img/logo.png" id="logo">
      <p class="white-text">Inicia sesión con tu cuenta</p>
    </div>
    <form action="controller/sesion/checkuser.php" enctype="multipart/form-data" method="POST">
      <div class="input-field col s12">
        <input id="usuario" type="text" class="validate white-text" name="usuario">
        <label ><i class="material-icons">perm_identity</i>&nbsp;Usuario</label>
      </div>
      <div class="input-field col s12">
        <input id="password" type="password" class="validate white-text" name="password">
        <label ><i class="material-icons" >lock</i>&nbsp;Contraseña</label>
      </div>
      <button class="waves-effect waves-teal btn-large white black-text">Acceder</button>
    </form>
    <br>
  </div>