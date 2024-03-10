<?php

class BBDD
{
  public function __construct()
  {
  }

  public function conectar($bbddSeleccionada)
  {
    $bbdd = $this->datosJson();

    try {
      $conn = new PDO("mysql:host=localhost;dbname=$bbdd[$bbddSeleccionada];", "root", "");
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $conn;
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }

  public function datosJson()
  {
    $direccion = dirname(__FILE__);
    $json = file_get_contents($direccion . "/BBDD.json");
    return json_decode($json, true);
  }
}