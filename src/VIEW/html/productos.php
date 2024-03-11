<div class="col d-flex justify-content-center m-3">
  <div class="container-fluid w-50 d-flex justify-content-center">
    <form class="d-flex w-100" role="search">
      <input class="w-100" type="text" name="buscador" id="buscador" placeholder="Buscar...">
    </form>
  </div>
</div>

<div id="productos" class="mt-4 mb-4">
  <div class="row justify-content-center ps-2 pe-2">

    <?php
    $url = "http://localhost/hotelSanFranciscoWeb/src/CONTROLLER/controladorProductos.php/select/";
    $datosProductosBBDD = json_decode(file_get_contents($url), JSON_OBJECT_AS_ARRAY);

    // Cargamos los datos de los productos a la vista por cada uno de ellos obtenidos por json y luego transformados a array
    foreach ($datosProductosBBDD as $key => $value) {
      echo '<div class="articulo col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-4">';
      echo '<div class="card">';
      echo '<img class="card-img-top" src="VIEW/img/' . $key . '.jpeg" data-bs-toggle="modal" data-bs-target="#myModal' . $key . '" title="Información" />';
      echo '<div class="modal fade" id="myModal' . $key . '" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"aria-hidden="true">';
      echo '<div class="modal-dialog" role="document">';
      echo '<div class="modal-content">';
      echo '<div class="modal-header">';
      echo '<h5 class="modal-title" id="exampleModalLabel">' . $value[0]["nombre"] . '</h5>';
      echo '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>';
      echo '</div>';
      echo '<div class="modal-body">' . $value[0]["descripcion"] . '</div>';
      echo '</div>';
      echo '</div>';
      echo '</div>';
      echo '<div class="card-body">';
      echo '<h5 class="card-title">' . $value[0]["nombre"] . '</h5>';
      echo '<p>Precio por persona: ' . $value[0]["precio"] . '€</p>';
      echo '<button class="botonAñadir" id="añadir" onclick=añadir_' . $key . '() >Añadir al carrito</button>';
      echo '</div>';
      echo '</div>';
      echo '</div>';
    }
    ?>
  </div>
</div>


</body>