<?php
require('../modelo/conexion.php'); //Utilizare por que es mas exigente
//include ('../../index.php');

$conex= new conexion();


$modo = isset($_GET['modo']) ? $_GET['modo'] : 'default';
//
// if (isset($_GET['modo'])  {
//   $modo=  $_GET['modo'])
// }else {
//   $modo='default';
// }



switch ($modo) {
  case 'login':
      //echo 'este  el login de captura';
      if (isset($_POST['login'])) { //este es un dato oculto
            //echo 'se ha enviado el formulario';//le trajo el voton login
            if (!empty($_POST['email']) and !empty($_POST['pass'])) {
                //echo "no estan vacios";
                include('acceso.php');

                $login = new acceso($_POST['email'],$_POST['pass']);
                $login->Login();

            }else {
              //echo 'estan vacios';
            header("Location: http://localhost/Login_User/index.php");
            }
      }else {
        //echo 'no se envio dato';//es decir se iso manual por lo tanto direciono al index para q se loquee
          header("Location: http://localhost/Login_User/index.php");
      }
    break;
  case 'registro':
        echo 'este es el registro';
      break;
      case 'claveperdida':
            echo 'clave perdida';
          break;

  default:
    header("Location: http://localhost/Login_User/index.php");
    break;
}


 ?>
