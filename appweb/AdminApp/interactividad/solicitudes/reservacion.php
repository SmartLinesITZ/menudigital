<?php
$iduser=$_REQUEST['iduser'];
include "../conn/conexion.php";
$objConex = new Conexion();
$link=$objConex->conectarse();
readPedido($iduser,$link);
function readPedido($iduser,$link){
		  $query = mysql_query("SELECT * FROM reservación,restaurante WHERE reservación.idusuario=$iduser AND reservación.estado='pendiente' AND reservación.idrestaurante=restaurante.idrestaurante ", $link)or die(mysql_error());

		if (!$query){
			$row_array['mensaje']  = 'error';
		}else{
			$response = array();
			while($rows = mysql_fetch_array($query)){
				$row_array['mensaje']  = 'success';
			$row_array['idreservacion']  = ($rows['idreservacion']);
			$row_array['idrestaurante']  = ($rows['idrestaurante']);
			$row_array['idusuario']  = ($rows['idusuario']);
			$row_array['nombrerest']  = ($rows['nombrerest']);
			$row_array['nopersonas']  = ($rows['nopersonas']);
			$row_array['horallegada']  = ($rows['horallegada']);
			$row_array['fecha']  = ($rows['fecha']);
			$row_array['nombre']  = ($rows['nombre']);
			$row_array['estado'] = $rows['estado'];
				array_push ($response, $row_array);
}
			echo $json_string = json_encode($response);
			mysql_close();
		}
	}
	?>
