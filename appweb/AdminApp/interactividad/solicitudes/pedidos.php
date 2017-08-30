<?php
$iduser=$_REQUEST['iduser'];
include "../conn/conexion.php";
$objConex = new Conexion();
$link=$objConex->conectarse();
readPedido($iduser,$link);
function readPedido($iduser,$link){
		$queryPedidos = mysql_query("SELECT * FROM pedido,restaurante WHERE pedido.idusuario=$iduser AND pedido.idrestaurante=restaurante.idrestaurante AND pedido.estado='pendiente'", $link) or die(mysql_error());

		if (!$queryPedidos){
			$row_array['mensaje']  = 'error';
		}else{
			$response = array();
			while($rows = mysql_fetch_array($queryPedidos)){
				$row_array['mensaje']  = 'success';
				$row_array['idpedido'] = $rows['idpedido'];
				$row_array['idusuario'] = $rows['idusuario'];
				$row_array['idrestaurante'] = $rows['idrestaurante'];
				$row_array['nombrerest'] = $rows['nombrerest'];
				$row_array['tiposervicio'] = $rows['tiposervicio'];
				$row_array['montototal'] = $rows['montototal'];
				$row_array['cantplatillos'] = $rows['noplatillos'];
				$row_array['destino'] = $rows['destino'];
				$row_array['estado'] = $rows['estado'];
				array_push ($response, $row_array);
			}
			echo $json_string = json_encode($response);
			mysql_close();
		}
	}
	?>
