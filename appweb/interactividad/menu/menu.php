<?php
  include "../conn/conexion.php";
  $objConex = new Conexion();
  //$idcategoria=$_REQUEST['idcategoria'];
  $idrestaurante=$_REQUEST['idrest'];
  $link=$objConex->conectarse();
  selectPlatillos($idrestaurante,$link);
  //categoria.idcategoria,platillo.nombreplatillo, platillo.imagen, platillo.precio, platillo.descripcion
  function selectPlatillos($idrestaurante,$link){
  $response = array();
  $querycat = mysql_query("SELECT * FROM categoria WHERE
  categoria.idrestaurante=$idrestaurante", $link)or die(mysql_error());
  if (!$querycat){
    $row_array['mensaje']  = 'fail';
  }else{
    $response = array();
      while($rows = mysql_fetch_array($querycat)){
        $categoria=$rows['idcategoria'];
        $row_array['nomcategoria']  = $rows['nomcategoria'];
         array_push ($response, $row_array);
        $queryplat = mysql_query("SELECT * FROM platillo,categoria WHERE
  platillo.idcategoria = categoria.idcategoria AND categoria.idcategoria=$categoria", $link)or die(mysql_error());
        $response2=array();
        while($rows2 = mysql_fetch_array($queryplat)){
          $row_array2['nombreplatillo']  = $rows2['nombreplatillo'];
          $row_array2['imagen']  = $rows2['imagen'];
          $row_array2['precio']  = $rows2['precio'];
          $row_array2['descripcion']  = $rows2['descripcion'];
          array_push ($response2, $row_array2);
          }
          array_push ($response, $response2);
      }
      echo $json_string = json_encode($response);
      mysql_close();
    }
  }
?>
