<?php
  include "../conn/conexion.php";
  $objConex = new Conexion();
  $iduser=$_REQUEST['iduser'];
  $idrest=$_REQUEST['idrest'];
  $link=$objConex->conectarse();




  function selectReservacion($link){
  $query = mysql_query("SELECT * FROM reservaciones,restaurante WHERE idusurario=$iduser AND idrestaurante=$idrest AND estado=pendiente ", $link)or die(mysql_error());
  if (!$query){
    $row_array['mensaje']  = 'fail';
echo "fail";
  }else{
    echo "else";
    $response = array();
      while($rows = mysql_fetch_array($query)){
        $row_array['nombrerest']  = utf8_decode($rows['nombrerest']);
        $row_array['nopersonas']  = utf8_decode($rows['nopersonas']);
        $row_array['horallegada']  = utf8_decode($rows['horallegada']);
        array_push ($response, $row_array);


      }
      echo $json_string = json_encode($response);
      mysql_close();
    }
  }



?>
