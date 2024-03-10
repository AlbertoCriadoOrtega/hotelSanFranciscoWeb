<?php

class Producto
{
  private $id;
  private $nombre;
  private $precio;
  private $descripcion;
  private $cantidad;

  public function __construct($id = null, $nombre, $precio, $descripcion, $cantidad)
  {
    $this->id = $id;
    $this->nombre = $nombre;
    $this->precio = $precio;
    $this->descripcion = $descripcion;
    $this->cantidad = $cantidad;
  }





  /**
   * Get the value of id
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * Set the value of id
   */
  public function setId($id): self
  {
    $this->id = $id;

    return $this;
  }

  /**
   * Get the value of nombre
   */
  public function getNombre()
  {
    return $this->nombre;
  }

  /**
   * Set the value of nombre
   */
  public function setNombre($nombre): self
  {
    $this->nombre = $nombre;

    return $this;
  }

  /**
   * Get the value of precio
   */
  public function getPrecio()
  {
    return $this->precio;
  }

  /**
   * Set the value of precio
   */
  public function setPrecio($precio): self
  {
    $this->precio = $precio;

    return $this;
  }

  /**
   * Get the value of descripcion
   */
  public function getDescripcion()
  {
    return $this->descripcion;
  }

  /**
   * Set the value of descripcion
   */
  public function setDescripcion($descripcion): self
  {
    $this->descripcion = $descripcion;

    return $this;
  }

  /**
   * Get the value of cantidad
   */
  public function getCantidad()
  {
    return $this->cantidad;
  }

  /**
   * Set the value of cantidad
   */
  public function setCantidad($cantidad): self
  {
    $this->cantidad = $cantidad;

    return $this;
  }
}