<?php
$idpedido=$_REQUEST['idpedido'];
include "../conn/conexion.php";
$objConex = new Conexion();
$link=$objConex->conectarse();
saveReservacion($idpedido,$link);
function saveReservacion($idpedido,$link){
$query = mysql_query("UPDATE pedido SET estado='pendiente' WHERE idpedido=$idpedido", $link) or die(mysql_error());

		if (!$query){
			$row_array['mensaje']  = 'error';
		}else{
			$response = array();
				$row_array['mensaje']  = 'success';
		}
		array_push ($response, $row_array);
	echo $json_string = json_encode($response);
	mysql_close();
	}
	?>
