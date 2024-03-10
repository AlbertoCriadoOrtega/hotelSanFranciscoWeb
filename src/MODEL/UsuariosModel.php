<?php
require_once("BBDD.php");
require_once("../CONTROLLER/Usuario.php");

class usuariosModel extends BBDD
{

  public function __construct()
  {
    parent::__construct();
  }

  public function borrarUsuario($id)
  {
    $conexion = $this->conectar("bbddUsers");
    $sql = $conexion->prepare("DELETE FROM usuario WHERE id = :id");
    if ($id != null) {
      $sql->bindParam(":id", $id);
      if ($sql->execute()) {
        return true;
      } else {
        return -2;
      }
    } else {
      return -1;
    }
  }

  public function actualizarNombre($nombre, $id)
  {

    $conexion = BBDD::conectar("bbddUsers");
    if ($nombre != null && $id != null) {
      $sql = $conexion->prepare("UPDATE usuario SET nombre = ? WHERE id = ?");
      $sql->bindParam(1, $nombre, PDO::PARAM_STR);
      $sql->bindParam(2, $id, PDO::PARAM_INT);

      if ($sql->execute()) {
        return true;
      } else {
        return -1;
      }
    } else {
      return -1;
    }
  }

  public function actualizarCorreo($correo, $id)
  {

    $conexion = $this->conectar("bbddUsers");
    if ($correo != null && $id != null) {
      $sql = $conexion->prepare("UPDATE usuario SET correo = ? WHERE id = ?");
      $sql->bindParam(1, $correo, PDO::PARAM_STR);
      $sql->bindParam(2, $id, PDO::PARAM_INT);

      if ($sql->execute()) {
        return true;
      } else {
        return -2;
      }
    } else {
      return -1;
    }
  }


  public function insertarUser($correo, $password, $password2)
  {

    $conexion = $this->conectar("bbddUsers");
    $sql = $conexion->prepare("INSERT INTO usuario (correo, password) VALUES (:correo, :password)");

    $sql->bindParam(":correo", $correo);
    $sql->bindParam(":password", $password);


    if ($password === $password2) {
      try {
        $result = $sql->execute();
      } catch (PDOException) {
        return false;
      }

      if ($result) {
        return true;
      } else {
        echo $result;
        return false;
      }
    }
  }

  public function login($correo, $password)
  {
    $conexion = $this->conectar("bbddUsers");
    $sql = "SELECT * FROM usuario WHERE correo=? AND password=?";

    if ($correo != "undefined" && $password != "undefined") {
      $sql = $conexion->prepare($sql);
      $sql->bindParam(1, $correo, PDO::PARAM_STR);
      $sql->bindParam(2, $pswd, PDO::PARAM_STR);
      $sql->execute();

      $result = $sql->fetch(PDO::FETCH_ASSOC);
      if ($result) {
        return true;
      } else {
        return -2; // Usuario no encontrado
      }
    } else {
      return -1; // Datos de inicio de sesión no válidos
    }
  }
}