<?php

class conexion extends mysqli
{
  public function __construct(){
    // private $servidor = 'localhost';//127.0.0.1
    // private $user='root';
    // private $pass='';
    // private $batad='login';

    parent:: __construct('localhost','root','','logindb');//accediendo a los metodos del padre mysqli

        $this->query("SET NAME 'utf8';");
        $this->connect_errno==true ? die('error con la conexion') : $x = 'conectado con exito';
      //  echo $x; // este es un mensaje de prueba
        unset($x);

  }
  public function recorrer($y){
    return mysqli_fetch_array($y);
  }

}

//$db = new conexion();// instancia de  prueba

//crearemo un metodo  para ver valor de correo y contraseña y analizar




 ?>
