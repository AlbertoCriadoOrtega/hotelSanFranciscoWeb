<?php

class Usuario
{
  private $id;
  private $correo;
  private $password;

  public function __construct($id,$correo,$password){
    $this->id = $id;
    $this->correo = $correo;
    $this->password = $password;
  }

}