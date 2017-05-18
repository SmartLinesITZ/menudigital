<?php
  include "../conn/conexion.php";
  $objConex = new Conexion();
  $idcategoria=$_REQUEST['idcategoria'];
  $idrestaurante=$_REQUEST['idrestaurante'];
  $link=$objConex->conectarse();
  selectPlatillos($idcategoria,$idrestaurante,$link);
  function selectPlatillos($idcategoria,$idrestaurante,$link){
    $response = array();
  $query = mysql_query("SELECT * FROM platillo,categoria
    WHERE  platillo.idcategoria= $idcategoria AND idrestaurante = $idrest AND platillo.idcategoria = categoria.idcategoria AND idrestaurante=$idrestaurante", $link)or die(mysql_error());
  if (!$query){
    $row_array['mensaje']  = 'fail';
  }else{
    $response = array();
      while($rows = mysql_fetch_array($query)){
        $row_array['nombreplatillo']  = utf8_decode($rows['nombreplatillo']);
        $row_array['imagen']  = utf8_decode($rows['imagen']);
        $row_array['precio']  = utf8_decode($rows['precio']);
        $row_array['descripcion']  = utf8_decode($rows['descripcion']);
          array_push ($response, $row_array);
      }
      echo $json_string = json_encode($response);
      mysql_close();
    }
  }
?>
