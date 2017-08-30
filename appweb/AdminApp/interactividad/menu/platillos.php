<?php
  include "../conn/conexion.php";
  $objConex = new Conexion();
  $idcategoria=$_REQUEST['idcategoria'];
  $idrest=$_REQUEST['idrest'];
  $link=$objConex->conectarse();
  selectPlatillos($idcategoria,$idrest,$link);
  function selectPlatillos($idcategoria,$idrest,$link){
    $response = array();
  $query = mysql_query("SELECT platillo.nombreplatillo,platillo.imagen,platillo.precio,platillo.descripcion FROM platillo,categoria
    WHERE  platillo.idcategoria= $idcategoria AND idrestaurante = $idrest AND platillo.idcategoria = categoria.idcategoria", $link)or die(mysql_error());
  if (!$query){
    $row_array['mensaje']  = 'fail';
  }else{
    $response = array();
      while($rows = mysql_fetch_array($query)){
        $row_array['nombreplatillo']  = ($rows['nombreplatillo']);
        $row_array['imagen']  = ($rows['imagen']);
        $row_array['precio']  = ($rows['precio']);
          $row_array['descripcion']  = ($rows['descripcion']);
          array_push ($response, $row_array);
      }
      echo $json_string = json_encode($response);
      mysql_close();
    }
  }
?>
