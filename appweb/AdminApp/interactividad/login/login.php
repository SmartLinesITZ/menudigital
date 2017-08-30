
    <?php


      $usuario=$_REQUEST['usuario'];
      $password=$_REQUEST['password'];

      include "../conn/conexion.php";
      $objConex = new Conexion();
      $link=$objConex->conectarse();

      logeoUsuario($usuario,$password,$link);
      function logeoUsuario($usuario,$password,$link){
        $encrypt=md5($password);
        $response = array();
          $response2 = array();
      $query = mysql_query("SELECT * FROM user WHERE username='$usuario' and password='$encrypt'", $link);
      $queryiduser = mysql_query("SELECT * FROM user WHERE username='$usuario' and password='$encrypt'", $link);
      if (!$query&&!$queryiduser){
        $row_array['mensaje']  = 'fail';
        array_push ($response, $row_array);

      }else{
        $rows = mysql_fetch_array($queryiduser);
        $numrows=mysql_num_rows($query);
        if($numrows==1){

          $row_array['mensaje']  = '1';
          $row_array['idusuario']  = $rows['idusuario'];
          $row_array['username']  = $rows['username'];
            array_push ($response, $row_array);
        }else{
          $row_array['mensaje']  = '0';
          $row_array['idusuario']  = '2';
          array_push ($response, $row_array);
        }
      }
      echo $json_string = json_encode($response);
      mysql_close();
    }


    ?>
