<?php
  include "../conn/conexion.php";
  $objConex = new Conexion();
  $idrest=$_REQUEST['idrest'];
  $link=$objConex->conectarse();
  selectPlatillos($idrest,$link);
  function selectPlatillos($idrest,$link){
    $response = array();
  $query = mysql_query("SELECT * FROM platillo   WHERE  idrestaurante = $idrest", $link)or die(mysql_error());
  if (!$query){
    $row_array['mensaje']  = 'fail';
  }else{
    $response = array();
      while($rows = mysql_fetch_array($query)){
        $row_array['categoria']  = utf8_decode($rows['categoria']);
          array_push ($response, $row_array);
      }
      echo $json_string = json_encode($response);
      mysql_close();
    }
  }
?>
