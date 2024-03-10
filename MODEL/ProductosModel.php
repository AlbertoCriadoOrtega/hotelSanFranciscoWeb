<?php
require_once("BBDD.php");

class ProductosModel extends BBDD
{

  public function __construct()
  {
    parent::__construct();
  }

  public function consultarProductos()
  {
    $bbdd = $this->conectar("bbddProducts");

    $consultaSql = "SELECT * FROM experiencias";

    try {
      $stmt = $bbdd->query($consultaSql);
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo $e->getMessage();
      return null;
    }

    if (empty($result)) {
      return null;
    }

    return $result;
  }

  public function consultarProducto($id)
  {
    $bbdd = $this->conectar("bbddProducts");

    $consultaSql = "SELECT * FROM experiencias where id = $id";

    try {
      $stmt = $bbdd->query($consultaSql);
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo $e->getMessage();
      return null;
    }

    if (empty($result)) {
      return null;
    }

    return $result;
  }


  public function insertarProducto($nombre, $descripcion, $precio, $cantidad)
  {
    $bbdd = $this->conectar("bbddProducts");

    $consultaSql = "INSERT INTO experiencias INSERT INTO experiencias(nombre, precio, descripcion, cantidad) VALUES (?,?,?,?)";

    try {
      $stmt = $bbdd->prepare($consultaSql);
      $stmt->bindParam(1, $nombre, PDO::PARAM_STR);
      $stmt->bindParam(2, $precio, PDO::PARAM_STR);
      $stmt->bindParam(3, $descripcion, PDO::PARAM_STR);
      $stmt->bindParam(4, $cantidad, PDO::PARAM_INT);
      $result = $stmt->execute();
    } catch (PDOException $e) {
      echo $e->getMessage();
      return null;
    }

    return $result;
  }

  public function actualizarProducto($id, $nombre = null, $descripcion = null, $precio = null, $cantidad = null)
  {
    $bbdd = $this->conectar("bbddProducts");

    $arrayDatosPrevios = $this->consultarProducto($id);
    $datosProducto = $arrayDatosPrevios[0];

    $consultaSql = "UPDATE experiencias SET nombre=?,precio=?,descripcion=?,cantidad=? WHERE id = $id";

    try {
      $stmt = $bbdd->prepare($consultaSql);
      if ($nombre != null) {
        $stmt->bindParam(1, $nombre, PDO::PARAM_STR);
      } else {
        $nombre = $datosProducto["nombre"];
        $stmt->bindParam(1, $nombre, PDO::PARAM_STR);
      }

      if ($precio != null) {
        $stmt->bindParam(2, $nombre, PDO::PARAM_STR);
      } else {
        $precio = $datosProducto["precio"];
        $stmt->bindParam(2, $nombre, PDO::PARAM_STR);
      }

      if ($descripcion != null) {
        $stmt->bindParam(3, $descripcion, PDO::PARAM_STR);
      } else {
        $descripcion = $datosProducto["descripcion"];
        $stmt->bindParam(3, $descripcion, PDO::PARAM_STR);
      }

      if ($cantidad != null) {
        $stmt->bindParam(4, $precio, PDO::PARAM_STR);
      } else {
        $cantidad = $datosProducto["cantidad"];
        $stmt->bindParam(4, $cantidad, PDO::PARAM_STR);
      }

      $result = $stmt->execute();
    } catch (PDOException $e) {
      echo $e->getMessage();
      return null;
    }

    return $result;
  }

  public function borrarProducto($id)
  {
    $bbdd = $this->conectar("bbddProducts");
    $consultaSql = "DELETE FROM `experiencias` WHERE $id";

    try {
      $stmt = $bbdd->query($consultaSql);
      $result = $stmt->fetch();
    } catch (PDOException $e) {
      echo $e->getMessage();
      return null;
    }

    return $result;
  }

  public function subirStockProducto($id)
  {
    $bbdd = $this->conectar("bbddProducts");

    $arrayDatosPrevios = $this->consultarProducto($id);
    $datosProducto = $arrayDatosPrevios[0];

    $consultaSql = "UPDATE experiencias SET cantidad=? WHERE id = $id";

    try {
      $stmt = $bbdd->prepare($consultaSql);
      $cantidad = $datosProducto["cantidad"] + 1;
      $stmt->bindParam(1, $cantidad, PDO::PARAM_STR);
      $result = $stmt->execute();

    } catch (PDOException $e) {
      echo $e->getMessage();
      return null;
    }

    return $result;
  }

  public function bajarStockProducto($id)
  {
    $bbdd = $this->conectar("bbddProducts");

    $arrayDatosPrevios = $this->consultarProducto($id);
    $datosProducto = $arrayDatosPrevios[0];

    $consultaSql = "UPDATE experiencias SET cantidad=? WHERE id = $id";

    try {
      $stmt = $bbdd->prepare($consultaSql);
      $cantidad = $datosProducto["cantidad"];
      $cantidad -= 1;
      $stmt->bindParam(1, $cantidad, PDO::PARAM_STR);
      $result = $stmt->execute();

    } catch (PDOException $e) {
      echo $e->getMessage();
      return null;
    }

    return $result;
  }
}