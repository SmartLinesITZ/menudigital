    <?php


      $usuario=$_REQUEST['usuario'];
      $password=$_REQUEST['password'];

      include "../conn/conexion.php";
      $objConex = new Conexion();
      $link=$objConex->conectarse();

      logeoUsuario($usuario,$password,$link);
      function logeoUsuario($usuario,$password,$link){
        $encrypt=md5($password);
      $query = mysql_query("SELECT * FROM user WHERE username='$usuario' and password='$encrypt'", $link);
      if (!$query){
        $row_array['mensaje']  = 'fail';
        finish($row_array);
      }else{
        $numrows=mysql_num_rows($query);
        if($numrows==1){
          $row_array['mensaje']  = '1';
          finish($row_array);

        }else{
          $row_array['mensaje']  = '0';
          finish($row_array);
        }
      }
    }

      function finish($row_array){
      $response = array();
      array_push ($response, $row_array);
      echo $json_string = json_encode($response);
      mysql_close();
      }
    ?>
