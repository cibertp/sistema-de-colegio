<?php

class acceso{

  private $email;
  private $pass;

  public function __construct($email,$password){
    $this->email = $email;
    $this->pass = $password;

  }

  public function Login(){

  $conex= new conexion();//no es neseario por que ya se iso en validacion.php
//SELECT email,password FROM usuarios where email='poeta462@gmail.com' and password='1234'
  $sql= $conex->query("SELECT email,password FROM usuarios where email='$this->email' and password='$this->pass'");

//accedos al funcion publilca rrecorrer de la clase conexion
  $dato= $conex->recorrer($sql);//recorrermos la consulta ya eclha

  // $dato['email']=='poeta462@gamil.com';
  // $dato['password']='1234'

  if($dato['email']== $this->email and $dato['password']==$this->pass){
    echo "se inicio la secion";
  }else {
    echo "no se estable la conexion";
  }

  }

  public function Registro(){

  }

public function ClavePerdidad(){

}

}

 ?>
