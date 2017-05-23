<?php
  include "../conn/conexion.php";
  $objConex = new Conexion();
  $opcion=$_REQUEST['opcion'];
  $link=$objConex->conectarse();
  switch ($opcion) {
      case 1:
          selectDesayuno($link);
          break;
      case 2:
          selectComida($link);
          break;
      case 3:
          selectCena($link);
          break;
      case 4:
          selectTodo($link);
          break;
  }
  function selectDesayuno($link){  
  $query = mysql_query("SELECT * FROM restaurante,servicios
    WHERE restaurante.idrestaurante = servicios.idrestaurante and servicios.desayuno=1", $link)or die(mysql_error());
  if (!$query){
    $row_array['mensaje']  = 'fail';
  }else{
    $response = array();
      while($rows = mysql_fetch_array($query)){
        $row_array['idrestaurante']  = $rows['idrestaurante'];
        $row_array['nombrerest']  = $rows['nombrerest'];
        $row_array['horarios']  = $rows['horarios'];
        $row_array['logo']  = $rows['logo'];
        $row_array['descripcion']  = $rows['descripcion'];
         array_push($response, $row_array);  
      }
      echo $json_string = json_encode($response);
      mysql_close();
    }
  }
  //################################
  function selectComida($link){
  $query = mysql_query("SELECT * FROM restaurante,servicios
    WHERE restaurante.idrestaurante = servicios.idrestaurante and servicios.comida=1", $link)or die(mysql_error());
  if (!$query){
    $row_array['mensaje']  = 'fail';
  }else{
    $response = array();
      while($rows = mysql_fetch_array($query)){
        $row_array['idrestaurante']  = $rows['idrestaurante'];
        $row_array['nombrerest']  = $rows['nombrerest'];
        $row_array['horarios']  = $rows['horarios'];
        $row_array['logo']  = $rows['logo'];
        $row_array['descripcion']  = $rows['descripcion'];
         array_push($response, $row_array); 
      }
      echo $json_string = json_encode($response);
      mysql_close();
    }
  }
  //####################################################################
  function selectCena($link){
  $query = mysql_query("SELECT * FROM restaurante,servicios
    WHERE restaurante.idrestaurante = servicios.idrestaurante and servicios.cena=1", $link)or die(mysql_error());
  if (!$query){
    $row_array['mensaje']  = 'fail';

  }else{

    $response = array();
      while($rows = mysql_fetch_array($query)){
        $row_array['idrestaurante']  = $rows['idrestaurante'];
        $row_array['nombrerest']  = $rows['nombrerest'];
        $row_array['horarios']  = $rows['horarios'];
        $row_array['logo']  = $rows['logo'];
        $row_array['descripcion']  = $rows['descripcion'];
         array_push($response, $row_array); 
      }
      echo $json_string = json_encode($response);
      mysql_close();
    }
  }
  //############################################################################
  function selectTodo($link){
  $query = mysql_query("SELECT * FROM restaurante", $link)or die(mysql_error());
  if (!$query){
    $row_array['mensaje']  = 'fail';
  }else{
    $response = array();
      while($rows = mysql_fetch_array($query)){
        $row_array['idrestaurante']  = $rows['idrestaurante'];
        $row_array['nombrerest']  = $rows['nombrerest'];
        $row_array['horarios']  = $rows['horarios'];
        $row_array['logo']  = $rows['logo'];
        $row_array['descripcion']  = $rows['descripcion'];
         array_push($response, $row_array); 
      }
      echo $json_string = json_encode($response);
      mysql_close();
    }
  }
?>
