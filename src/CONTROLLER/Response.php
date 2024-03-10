<?php

class Response implements JsonSerializable
{
  private $status = "OK";
  private $result = array();

  public function __construct()
  {
  }
  public function error_210()
  {
    $this->status = "OK";
    $this->result["error_id"] = "210";
    $this->result["error_msg"] = "Tarea no existente";
  }

  public function error_220()
  {
    $this->status = "error";
    $this->result["error_id"] = "220";
    $this->result["error_msg"] = "Parametros no validos";
  }

  public function error_405()
  {
    $this->status = "error";
    $this->result["error_id"] = "405";
    $this->result["error_msg"] = "Metodo no permitido";
  }

  public function error_500()
  {
    $this->status = "error";
    $this->result["error_id"] = "500";
    $this->result["error_msg"] = "error de base de datos";
  }

  public function jsonSerialize()
  {
    return [
      "status" => $this->status,
      "result" => $this->result
    ];
  }

  /**
   * Get the value of status
   */
  public function getStatus()
  {
    return $this->status;
  }

  /**
   * Set the value of status
   */
  public function setStatus($status)
  {
    $this->status = $status;
  }

  /**
   * Get the value of result
   */
  public function getResult()
  {
    return $this->result;
  }

  /**
   * Set the value of result
   */
  public function setResult($result)
  {
    $this->result = $result;

  }
}