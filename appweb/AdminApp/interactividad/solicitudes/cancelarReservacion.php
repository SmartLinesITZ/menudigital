<?php
$idreservacion=$_REQUEST['idreservacion'];
include "../conn/conexion.php";
$objConex = new Conexion();
$link=$objConex->conectarse();
cancelar($idreservacion,$link);
function cancelar($idreservacion,$link){
  $query = mysql_query("UPDATE reservación SET estado='cancelado' WHERE idreservacion=$idreservacion", $link) or die(mysql_error());
  if (!$query){
    $row_array['mensaje']  = 'error';
  }else{
    $response = array();
    $row_array['mensaje']  = 'success';
  }
  array_push ($response, $row_array);
  echo $json_string = json_encode($response);
  mysql_close();
}
?>
