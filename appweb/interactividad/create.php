<?php

$nopersonas=$_REQUEST['nopersonas'];
$horallegada=$_REQUEST['horallegada'];
$iduser=$_REQUEST['iduser'];
$idrest=$_REQUEST['idrest'];

include "../conn/conexion.php";
$objConex = new Conexion();
$link=$objConex->conectarse();

saveReservacion($iduser,$idrest,$nopersonas,$horallegada,$link);
function saveReservacion($iduser,$idrest,$horallegada,$nopersonas,$link){
	$query = mysql_query("INSERT INTO reservacion VALUES
		(null,$iduser,$idrest,$nopersonas,'$horallegada','null')", $link) or die(mysql_error());
	if (!$query){
		$row_array['mensaje']  = 'error';
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
