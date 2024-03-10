<?php
require_once("../MODEL/UsuariosModel.php");
require_once("Response.php");


$url = $_SERVER["REQUEST_URI"];
$method = $_SERVER["REQUEST_METHOD"];
$respuesta = new Response();
$Productos = new UsuariosModel();


if (strpos($url, "/hotelSanFranciscoWeb/src/CONTROLLER/controladorUsuarios.php/sigin/") === 0) {

  echo "2";
  if ($method == "POST") {
    echo "1";
    if (preg_match("/^\/hotelSanFranciscoWeb\/src\/CONTROLLER\/controladorUsuarios.php\/sigin\/$/", $url)) {

      $correo = $_POST["email"];
      $password1 = $_POST["password1"];
      $password2 = $_POST["password2"];

      $resultado = $Productos->insertarUser($correo, $password1, $password2);

      if ($resultado == true) {
        header('Location: http://localhost/hotelSanFranciscoWeb/src/index.php');
      } else {
        header('Location: http://localhost/hotelSanFranciscoWeb/src/index.php?registro=false');

      }
    } else {
      echo "s";
      $respuesta->error_220();
      echo json_encode($respuesta->jsonSerialize());
    }
  } else {
    $respuesta->error_405();
    echo json_encode($respuesta->jsonSerialize());
  }
}

if (strpos($url, "/hotelSanFranciscoWeb/src/CONTROLLER/controladorUsuarios.php/login/") === 0) {
  if ($method == "POST") {
    if (preg_match("/^\/hotelSanFranciscoWeb\/src\/CONTROLLER\/controladorUsuarios.php\/login\/$/", $url)) {

      $correo = $_POST["email"];
      $password = $_POST["password"];

      $resultado = $Productos->login($correo, $password);

      if ($resultado == true) {
        session_start();
        $_SESSION["login"] = $correo;
        header('Location: http://localhost/hotelSanFranciscoWeb/src/index.php');
      } else {
        header('Location: http://localhost/hotelSanFranciscoWeb/src/index.php?loginError=true');
      }
    } else {
      echo "s";
      $respuesta->error_220();
      echo json_encode($respuesta->jsonSerialize());
    }
  } else {
    $respuesta->error_405();
    echo json_encode($respuesta->jsonSerialize());
  }
}