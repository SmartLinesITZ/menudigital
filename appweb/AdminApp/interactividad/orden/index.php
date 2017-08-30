<?php
$idpedido=$_REQUEST['idpedido'];
include "../conn/conexion.php";
$objConex = new Conexion();
$link=$objConex->conectarse();
saveOrden($idpedido,$link);
function saveOrden($idpedido,$link){
	$queryPedido = mysql_query("SELECT * FROM pedido WHERE idpedido=$idpedido", $link)or die(mysql_error());
	if (!$queryPedido){
		$row_array['mensaje']  = 'error';
  }else{
    $response = array();
    while($rows = mysql_fetch_array($queryPedido)){
      //$categoria=$rows['idcategoria'];
      $row_array['montototal']  = $rows['montototal'];
      $queryPlatillo = mysql_query("SELECT platillo.idplatillo,platillo.nombreplatillo, platillo.precio FROM platillo,orden WHERE orden.idpedido=$idpedido AND platillo.idplatillo = orden.idplatillo", $link)or die(mysql_error());
      //array_push ($response, $row_array);
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
