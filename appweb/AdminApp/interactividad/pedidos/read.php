<?php
$idpedido=$_REQUEST['idpedido'];
include "../conn/conexion.php";
$objConex = new Conexion();
$link=$objConex->conectarse();
readPedido($idpedido,$link);
function readPedido($idpedido,$link){
		$queryPedidos = mysql_query("SELECT * FROM pedido WHERE idpedido=$idpedido", $link) or die(mysql_error());

		if (!$queryPedidos){
			$row_array['mensaje']  = 'error';
		}else{
			$response = array();
			$rows = mysql_fetch_array($queryPedidos);
				$row_array['mensaje']  = 'success';
				$row_array['idpedido'] = $rows['idpedido'];
				$row_array['idusuario'] = $rows['idusuario'];
				$row_array['idrestaurante'] = $rows['idrestaurante'];
				$row_array['tiposervicio'] = $rows['tiposervicio'];
				$row_array['montototal'] = $rows['montototal'];
				$row_array['estado'] = $rows['estado'];
				$row_array['cantplatillos'] = $rows['noplatillos'];
				$row_array['destino'] = $rows['destino'];
				array_push ($response, $row_array);

			echo $json_string = json_encode($response);
			mysql_close();
		}
	}
	?>
