<?php

$idplatillo=$_REQUEST['idplatillo'];
//$idrest=$_REQUEST['idrest'];
$idpedido=$_REQUEST['idpedido'];
include "../conn/conexion.php";
$objConex = new Conexion();
$link=$objConex->conectarse();

saveOrden($idplatillo,$idpedido,$link);
function saveOrden($idplatillo,$idpedido,$link){
	$query = mysql_query("INSERT INTO orden VALUES ($idplatillo,$idpedido)", $link) or die(mysql_error());
	$queryPlatillo = mysql_query("SELECT * FROM platillo WHERE idplatillo=$idplatillo ", $link)or die(mysql_error());
	$queryPediosSelect = mysql_query("SELECT * FROM pedido WHERE idpedido=$idpedido ", $link)or die(mysql_error());
	$rows = mysql_fetch_array($queryPediosSelect);
	$rows1 = mysql_fetch_array($queryPlatillo);
	$precio=$rows['montototal'];
	$precioa=$rows1['precio']+$rows['montototal'];
	$noplatillos=$rows['noplatillos']+1;
	$queryPedidos = mysql_query("UPDATE pedido SET montototal=$precioa, noplatillos=$noplatillos WHERE idpedido=$idpedido", $link) or die(mysql_error());
	$queryPediosSelect2 = mysql_query("SELECT * FROM pedido WHERE idpedido=$idpedido ", $link)or die(mysql_error());
	if (!$query&&!$queryPedidos){
		$row_array['mensaje']  = 'error';
		finish($row_array);
	}else{
		$row_array['mensaje']  = 'success';
		$rowss = mysql_fetch_array($queryPediosSelect2);
			$row_array['mensaje']  = 'success';
			$row_array['idpedido'] = $rowss['idpedido'];
			$row_array['idusuario'] = $rowss['idusuario'];
			$row_array['idrestaurante'] = $rowss['idrestaurante'];
			$row_array['tiposervicio'] = $rowss['tiposervicio'];
			$row_array['montototal'] = $rowss['montototal'];
			$row_array['estado'] = $rowss['estado'];
			$row_array['cantplatillos'] = $rowss['noplatillos'];

		finish($row_array);

	}
}
function finish($row_array){
	$response = array();
	array_push ($response, $row_array);
	echo $json_string = json_encode($response);
	mysql_close();
}
?>
