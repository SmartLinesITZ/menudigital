<?php

$name=$_REQUEST['nombre'];
$correo=$_REQUEST['correo'];
$telefono=$_REQUEST['telefono'];
$usuario=$_REQUEST['usuario'];
$password=$_REQUEST['password'];

include "../conn/conexion.php";
$objConex = new Conexion();
$link=$objConex->conectarse();

compruebaUsuario($name,$correo,$telefono,$usuario,$password,$link);
function compruebaUsuario($name,$correo,$telefono,$usuario,$password,$link){
	$query = mysql_query("SELECT * FROM user WHERE username='$usuario'", $link);
	if (!$query){
	die("<p>Fallo la insersion a la base de datos: ".mysql_error()."</p>");
		$row_array['error']  = 'fail';
		finish($row_array);
	}else{
		$numrows=mysql_num_rows($query);
		//echo $numrows;
		if($numrows>0){
			$row_array['error']  = 'El usuario ya existe';
			finish($row_array);
		}else{
			insertaUsuario($name,$correo,$telefono,$usuario,$password,$link);
		}
	}
}
function insertaUsuario($name,$correo,$telefono,$usuario,$password,$link){
	
	$encrypt=md5($password);
	$query = mysql_query("INSERT INTO user VALUES (null,'$usuario','$encrypt')", $link);
	if (!$query){
		$row_array['error']  = 'fail';
		finish($row_array);
	}else{
		asignacionId($name,$correo,$telefono,$usuario,$link);
	}
}
function asignacionId($name,$correo,$telefono,$usuario,$link){
	//echo $name.$correo.$telefono.$usuario;
	$query = mysql_query("SELECT * FROM user WHERE username='$usuario'", $link) or die(mysql_error());
	$row=mysql_fetch_array($query);
	$idUsuario=$row['idusuario'];
	//echo $idUsuario;
	if (!$query){
		$row_array['error']  = 'fail';
		finish($row_array);
	}else{
		//echo $idUsuario;
		saveDateUser($idUsuario,$name,$correo,$telefono,$link);
	}
}
function saveDateUser($idUsuario,$name,$correo,$telefono,$link){
	//echo $idUsuario." ".$name." ".$correo.$telefono;
	$query = mysql_query("INSERT INTO usuarios VALUES ($idUsuario,'$correo','$name','$telefono','null','movil',1)", $link) or die(mysql_error());
	if (!$query){
		$row_array['error']  = 'fail';
		finish($row_array);
	}else{
		$row_array['mensaje']  = 'success';
		finish($row_array);
	}
}
function finish($row_array){
	$response = array();
	array_push ($response, $row_array);
	echo $json_string = json_encode($response);
	mysql_close();
}
?>