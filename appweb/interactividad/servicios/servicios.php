  <?php
    include "../conn/conexion.php";
    $objConex = new Conexion();
    $idrest=$_REQUEST['idrest'];
    $link=$objConex->conectarse();

    selectServicios($idrest,$link);
    function selectServicios($idrest,$link){
      $response = array();
    $query = mysql_query("SELECT * FROM servicios WHERE  idrestaurante = $idrest AND pedidos=1", $link)or die(mysql_error());
    if (!$query){
      $row_array['mensaje']  = 'fail';
    }else{
      $numrows=mysql_num_rows($query);
      if($numrows>0){

          $row_array['panticipado']  = 'true';
          array_push ($response, $row_array);
      }else{
        $row_array['panticipido']  = 'false';
        array_push ($response, $row_array);
      }
    }
  $query = mysql_query("SELECT * FROM servicios WHERE  idrestaurante = $idrest AND adomicilio=1", $link)or die(mysql_error());
  if (!$query){
    $row_array['mensaje']  = 'fail';
  }else{
    $numrows=mysql_num_rows($query);
    if($numrows>0){

        $row_array['padomicilio']  = 'true';
        array_push ($response, $row_array);
    }else{
      $row_array['padomiclio']  = 'falso';
      array_push ($response, $row_array);
    }
  }
  $response = array();
$query = mysql_query("SELECT * FROM servicios WHERE  idrestaurante = $idrest AND reservacion=1", $link)or die(mysql_error());
if (!$query){
  $row_array['mensaje']  = 'fail';
}else{
  $numrows=mysql_num_rows($query);
  if($numrows>0){
      $row_array['reservacion']  = 'true';
      array_push ($response, $row_array);
  }else{
    $row_array['reservacion']  = 'falso';
    array_push ($response, $row_array);
  }
}
      echo $json_string = json_encode($response);
      mysql_close();
    }



  ?>
