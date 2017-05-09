<?php
$usuario=$_REQUEST['usuario'];
$password=$_REQUEST['password'];
//$email=$_POST['email'];
//$telefono=$_POST['telefono'];
//$domicilio=$_POST['domicilio'];
include "../conn/conexion.php";
$objConex = new Conexion();
$link=$objConex->conectarse();
compruebausuario($usuario,$password,$link);
function compruebausuario($usuario,$password,$link){
	$response = array();
	$query = mysql_query("SELECT username FROM user WHERE username='$usuario'", $link);
	if (!$query){
	//die("<p>Fallo la insersion a la base de datos: ".mysql_error()."</p>");
		$row_array['error']  = 'Algo salio mal';
		array_push($response, $row_array);
		echo $json_string = json_encode($response);
		mysql_close();
	}else{
		$numrows=mysql_num_rows($query);
		if($numrows==1){
			$row_array['error']  = 'El usuario ya existe';
			array_push($response, $row_array);
			echo $json_string = json_encode($response);
			mysql_close();
		}else{
			insertausuario($usuario,$password,$link);
		}
	}
}
function insertausuario($usuario,$password,$link){
	$response = array();
	$encrypt=md5($password);
	$query = mysql_query("INSERT INTO user VALUES (null,'$usuario','$encrypt')", $link);
	if (!$query){
		$row_array['error']  = 'Algo salio mal';
		array_push($response, $row_array);
		echo $json_string = json_encode($response);
		mysql_close();
	}else{
		$row_array['mensaje']  = 'success';
		array_push($response, $row_array);
		echo $json_string = json_encode($response);
		mysql_close();
	}
}
function createusuario(){
	$query = mysql_query("INSERT INTO Usuarios VALUES ()", $link);
	if (!$query){
		die("<p>Fallo la insersion a la base de datos: ".mysql_error()."</p>");
	}else{
		$row_array['error']  = 'Algo Salio mal';
		array_push ($response, $row_array);
		echo $json_string = json_encode($response);
		mysql_close();
	}
}
?>