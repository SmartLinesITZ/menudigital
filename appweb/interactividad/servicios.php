<?php
  include "../conn/conexion.php";
  $objConex = new Conexion();
  $idrest=$_REQUEST['idrest'];
  $link=$objConex->conectarse();

  selectServicios($idrest,$link);
  function selectServicios($idrest,$link){
  $query = mysql_query("SELECT * FROM servicios WHERE  idrestaurante = $idrest", $link)or die(mysql_error());
  if (!$query){
    $row_array['mensaje']  = 'fail';
  }else{
    $response = array();
        $row_array['servicios']  = 'Pedidos anticipados';
        array_push ($response, $row_array);
    }

    echo $json_string = json_encode($response);
    mysql_close();
  }



?>
