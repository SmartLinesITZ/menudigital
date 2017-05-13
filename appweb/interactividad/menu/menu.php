<?php
  include "../conn/conexion.php";
  $objConex = new Conexion();
  $idcategoria=$_REQUEST['idcategoria'];
  $idrestaurante=$_REQUEST['idrestaurante'];
  $link=$objConex->conectarse();
  selectPlatillos($idcategoria,$idrestaurante,$link);
  function selectPlatillos($idrest,$link){
    $response = array();
    $respon = array();
  $query = mysql_query("SELECT categoria.idcategoria,platillo.nombreplatillo, platillo.imagen, platillo.precio, platillo.descripcion FROM platillo,categoria WHERE
  platillo.idcategoria = categoria.idcategoria AND idrestaurante=$idrestaurante", $link)or die(mysql_error());
  if (!$query){
    $row_array['mensaje']  = 'fail';
  }else{
    $response = array();
      while($rows = mysql_fetch_array($query)){
        $row_array['idcategoria']  = utf8_decode($rows['idcategoria']);
        while($rows = mysql_fetch_array($query)){
          $row_array['nombreplatillo']  = utf8_decode($rows['nombreplatillo']);
          $row_array['imagen']  = utf8_decode($rows['imagen']);
          $row_array['precio']  = utf8_decode($rows['precio']);
          $row_array['descripcion']  = utf8_decode($rows['descripcion']);
            //array_push ($respon, $row_array);
          }
          array_push ($response, $row_array);
      }
      echo $json_string = json_encode($response);
      mysql_close();
    }
  }
?>
