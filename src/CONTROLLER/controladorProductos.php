<?php

require_once("Response.php");
require_once("Producto.php");
require_once("../MODEL/ProductosModel.php");



$url = $_SERVER["REQUEST_URI"];
$method = $_SERVER["REQUEST_METHOD"];
$respuesta = new Response();
$Productos = new ProductosModel();

if (strpos($url, "/hotelSanFranciscoWeb/src/CONTROLLER/controladorProductos.php/select/") === 0) {
  if ($method == "GET") {

    if (preg_match("/^\/hotelSanFranciscoWeb\/src\/CONTROLLER\/controladorProductos.php\/select\/$/", $url)) {
      $datosArrayProductos = $Productos->consultarProductos();

      if ($datosArrayProductos == 2) {
        $respuesta->error_210();
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($respuesta->jsonSerialize());
      } else if ($datosArrayProductos == 1) {
        $respuesta->error_500();
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($respuesta->jsonSerialize());
      } else {


        foreach ($datosArrayProductos as $key => $value) {
          $datosParaJson["producto" . $key] = [$value];
        }


        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($datosParaJson);
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

if (strpos($url, "/hotelSanFranciscoWeb/src/CONTROLLER/controladorProductos.php/id/") === 0) {
  if ($method == "GET") {
    if (preg_match("/^\/hotelSanFranciscoWeb\/src\/CONTROLLER\/controladorProductos.php\/id\/(\\d+)$/", $url, $parametros)) {
      $id = $parametros[1];
      $datosArrayProductos = $Productos->consultarProducto($id);

      if ($datosArrayProductos == 2) {
        $respuesta->error_210();
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($respuesta->jsonSerialize());
      } else if ($datosArrayProductos == 1) {
        $respuesta->error_500();
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($respuesta->jsonSerialize());
      } else {
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($datosArrayProductos[0]);
      }
    } else {
      $respuesta->error_220();
      echo json_encode($respuesta->jsonSerialize());
    }
  } else {
    $respuesta->error_405();
    echo json_encode($respuesta->jsonSerialize());
  }
}

if (strpos($url, "/hotelSanFranciscoWeb/src/CONTROLLER/controladorProductos.php/id/") === 0) {
  if ($method == "GET") {
    if (preg_match("/^\/hotelSanFranciscoWeb\/src\/CONTROLLER\/controladorProductos.php\/id\/(\\d+)$/", $url, $parametros)) {
      $id = $parametros[1];
      $datosArrayProductos = $Productos->consultarProducto($id);

      if ($datosArrayProductos == 2) {
        $respuesta->error_210();
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($respuesta->jsonSerialize());
      } else if ($datosArrayProductos == 1) {
        $respuesta->error_500();
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($respuesta->jsonSerialize());
      } else {
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($datosArrayProductos[0]);
      }
    } else {
      $respuesta->error_220();
      echo json_encode($respuesta->jsonSerialize());
    }
  } else {
    $respuesta->error_405();
    echo json_encode($respuesta->jsonSerialize());
  }
}

if (strpos($url, "/hotelSanFranciscoWeb/src/CONTROLLER/controladorProductos.php/bajarStock/id/") === 0) {
  if ($method == "GET") {
    if (preg_match("/^\/hotelSanFranciscoWeb\/src\/CONTROLLER\/controladorProductos.php\/bajarStock\/id\/(\\d+)$/", $url, $parametros)) {
      $id = $parametros[1];
      $resultado = $Productos->bajarStockProducto($id);

      if ($resultado === 2) {
        $respuesta->error_210();
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($respuesta->jsonSerialize());
      } else if ($resultado === 1) {
        $respuesta->error_500();
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($respuesta->jsonSerialize());
      } else {
        header('Content-Type: application/json; charset=utf-8');
        $arrayParaJson["resultado"] = $resultado;
        echo json_encode($arrayParaJson);
      }
    } else {
      $respuesta->error_220();
      echo json_encode($respuesta->jsonSerialize());
    }
  } else {
    $respuesta->error_405();
    echo json_encode($respuesta->jsonSerialize());
  }
}

if (strpos($url, "/hotelSanFranciscoWeb/src/CONTROLLER/controladorProductos.php/subirStock/id/") === 0) {
  if ($method == "GET") {
    if (preg_match("/^\/hotelSanFranciscoWeb\/src\/CONTROLLER\/controladorProductos.php\/subirStock\/id\/(\\d+)$/", $url, $parametros)) {
      $id = $parametros[1];
      $resultado = $Productos->subirStockProducto($id);

      if ($resultado === 2) {
        $respuesta->error_210();
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($respuesta->jsonSerialize());
      } else if ($resultado === 1) {
        $respuesta->error_500();
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($respuesta->jsonSerialize());
      } else {
        header('Content-Type: application/json; charset=utf-8');
        $arrayParaJson["resultado"] = $resultado;
        echo json_encode($arrayParaJson);
      }
    } else {
      $respuesta->error_220();
      echo json_encode($respuesta->jsonSerialize());
    }
  } else {
    $respuesta->error_405();
    echo json_encode($respuesta->jsonSerialize());
  }
}