<?php
include "../conn/conexion.php";
$objConex = new Conexion();
$idrestaurante=$_REQUEST['idrest'];
$link=$objConex->conectarse();
selectPlatillos($idrestaurante,$link);
function selectPlatillos($idrestaurante,$link){
  $querycat = mysql_query("SELECT * FROM categoria WHERE
    categoria.idrestaurante=$idrestaurante", $link);
  if (!$querycat){
    $row_array['mensaje']  = 'fail';
  }else{
    $response = array();
    while($rows = mysql_fetch_array($querycat)){
      $categoria=$rows['idcategoria'];
      $row_array['nomcategoria']  = $rows['nomcategoria'];
      $queryplat = mysql_query("SELECT * FROM platillo,categoria WHERE
        platillo.idcategoria = categoria.idcategoria AND categoria.idcategoria=$categoria", $link)or die(mysql_error());
      //array_push ($response, $row_array);
      $response2=array();
      $row_array['platillos']="";
      while($rows2 = mysql_fetch_array($queryplat)){
        $row_array2['idplatillo']  = $rows2['idplatillo'];
        $row_array2['nombreplatillo']  = $rows2['nombreplatillo'];
        $row_array2['imagen']  = $rows2['imagen'];
        $row_array2['precio']  = $rows2['precio'];
        $row_array2['descripcion']  = $rows2['descripcion'];
        array_push ($response2, $row_array2);
        $row_array['platillos']=$response2;

      }
      array_push ($response, $row_array);
    }
    echo $json_string = json_encode($response);
    mysql_close();
  }
}
?>
