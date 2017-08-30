<?php
	$user=$_POST['usuario'];
	$password=$_POST['password'];
	include "../../model/conexion.php";
	$objConex = new Conexion();
	$link=$objConex->conectarse();
	session_start();
	$encrypt=md5($password);
	$sql = mysql_query("SELECT * FROM user,usuarios WHERE username='" .$user. "'
					   AND password='".$encrypt."' AND user.idusuario=usuarios.idusuario;" , $link) or die(mysql_error());
	$row=mysql_num_rows($sql);
	if ($row == 0){
			echo 	"<script type='text/javascript'>
					alert('Acceso incorrecto');
					</script>";
			echo 	"<script type='text/javascript'>
					window.location='../../index.html'
					</script>";
	}else{
		while ($rows = mysql_fetch_array($sql)){
			$_SESSION['login'] = $rows['username'];
			$_SESSION['contra'] = $rows['password'];
			$_SESSION['seguridad'] = "ok";
			$tipousuario=$rows['tipousuario'];
		}
		if($tipousuario=='adminapp'){
			echo "<script type='text/javascript'>
				alert('Bienvenido " .$_SESSION['login']. "');
				</script>";
				echo "<script type='text/javascript'>
				window.location='../../view/admin/inicio.php'
				</script>";
		}else if($tipousuario=='adminrest'){
			echo 	"<script type='text/javascript'>
				alert('Bienvenido " .$_SESSION['login']. "');
				</script>";
				echo "<script type='text/javascript'>
				window.location='../../view/rest/inicio.php'
				</script>";
		}else{
			echo 	"<script type='text/javascript'>
					alert('Acceso incorrecto');
					</script>";
			echo 	"<script type='text/javascript'>
					window.location='../../index.html'
					</script>";
		}
		
	}
	mysql_close($link);

?>