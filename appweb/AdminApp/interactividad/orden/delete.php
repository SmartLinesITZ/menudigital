<?php

$idplatillo=$_REQUEST['idplatillo'];
$idpedido=$_REQUEST['idpedido'];
include "../conn/conexion.php";
$objConex = new Conexion();
$link=$objConex->conectarse();

deleteOrden($idplatillo,$idpedido,$link);
function deleteOrden($idplatillo,$idpedido,$link){
  $query = mysql_query("DELETE FROM orden WHERE idplatillo=$idplatillo AND idpedido=$idpedido", $link) or die(mysql_error());
  $queryPlatillo = mysql_query("SELECT * FROM platillo WHERE idplatillo=$idplatillo ", $link)or die(mysql_error());
  $queryPediosSelect = mysql_query("SELECT * FROM pedido WHERE idpedido=$idpedido ", $link)or die(mysql_error());
  $rows = mysql_fetch_array($queryPediosSelect);
  $rows1 = mysql_fetch_array($queryPlatillo);
  $precioa=$rows['montototal']-$rows1['precio'];
  $noplatillos=$rows['noplatillos']-1;
  $queryPedidos = mysql_query("UPDATE pedido SET montototal=$precioa, noplatillos=$noplatillos WHERE idpedido=$idpedido", $link) or die(mysql_error());
  $queryPediosSelect2 = mysql_query("SELECT * FROM pedido WHERE idpedido=$idpedido ", $link)or die(mysql_error());
  if (!$query&&!$queryPedidos){
    $row_array['mensaje']  = 'error';
    array_push ($response, $row_array);
  }else{
    $response = array();
    while($rows = mysql_fetch_array($queryPediosSelect2)){
      $row_array['montototal']  = $rows['montototal'];
      $queryPlatillo = mysql_query("SELECT platillo.idplatillo,platillo.nombreplatillo, platillo.precio FROM platillo,orden WHERE orden.idpedido=$idpedido AND platillo.idplatillo = orden.idplatillo", $link)or die(mysql_error());
      $response2=array();
      $row_array['platillos']="";
      while($rows2 = mysql_fetch_array($queryPlatillo)){
        $row_array2['idplatillo']  = $rows2['idplatillo'];
        $row_array2['nombreplatillo']  = $rows2['nombreplatillo'];
        $row_array2['precio']  = $rows2['precio'];
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
