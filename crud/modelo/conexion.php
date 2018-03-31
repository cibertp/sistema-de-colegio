<?php

class conexion extends mysqli
{
  public function __construct(){
    // private $servidor = 'localhost';//127.0.0.1
    // private $user='root';
    // private $pass='';
    // private $batad='login';

    parent:: __construct('localhost','root','','login');//accediendo a los metodos del padre mysqli

        $this->query("SET NAME 'utf8';");
        $this->connect_errno==true ? die('error con la conexion') : $x = 'conectado con exito';
      //  echo $x; // este es un mensaje de prueba
        unset($x);

  }

}

$db = new conexion();


 ?>
