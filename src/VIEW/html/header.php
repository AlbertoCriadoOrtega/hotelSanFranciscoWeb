<nav class="nav nav-tabs container-fluid justify-content-between pt-3 pb-3 d-flex" id="navId" role="navigation">
  <ul class="col-xxl-4 d-flex m-0 ps-0 ">
    <li class="nav-item dropdown ps-4 align-self-center">
      <a id="menuTexto" class="nav-link dropdown-toggle ps-0" href="#" role="button" aria-haspopup="true"
        aria-expanded="false" data-bs-toggle="dropdown">MENU</a>
      <div class="dropdown-menu animate slideIn">
        <a class="dropdown-item" href="index.php">Home</a>
        <a class="dropdown-item" href="index.php?about=true">About us</a>
        <a class="dropdown-item" href="index.php?galeria=true">Galeria</a>
        <a class="dropdown-item" href="index.php?productos=true">Experiencias</a>
      </div>
    </li>
  </ul>

  <!-- LOGOTIPO -->
  <div class="col-lg-4 d-none d-lg-block">
    <img class="img-fluid " src="VIEW/img/logo.png" />
  </div>

  <div class="col-lg-4 d-block d-lg-none w-25">
    <img class="img-fluid " src="VIEW/img/logoPequeño.png" />
  </div>
  <!-- FIN LOGOTIPO -->

  <div class="d-flex col-xxl-4 d-flex justify-content-end">
    <div class="pe-2 d-flex">
      <!-- Button trigger modal -->

      <?php
      if (isset($_SESSION["login"])) {
        echo '<button type="button" id="botonLogin" class="btn btn-lg rounded-pill align-self-center ms-2 ms-sm-0" data-bs-toggle="modal"
        data-bs-target="#modalLogin" aria-label="Iniciar sesión" disabled>
        Sesion Iniciada
        </button>';
      } else {
        echo '<button type="button" id="botonLogin" class="btn btn-lg rounded-pill align-self-center ms-2 ms-sm-0" data-bs-toggle="modal"
        data-bs-target="#modalLogin" aria-label="Iniciar sesión">
        Iniciar sesión
        </button>';
      }
      ?>


      <div class="modal fade" id="modalLogin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="modalLoginLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header border-0 text-center">
              <h5 class="modal-title" id="modalLoginLabel">
                Inicio de sesión
              </h5>

              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
              <form class="form-signin text-center"
                action="http://localhost/hotelSanFranciscoWeb/src/CONTROLLER/controladorUsuarios.php/login/"
                method="POST">
                <div class="form-group">
                  <label for="inputEmail" class="visually-hidden">Correo electrónico</label>
                  <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Correo electrónico"
                    required autofocus />
                </div>
                <div class="form-group">
                  <label for="inputPassword" class="visually-hidden">Contraseña</label>
                  <input name="password" type="password" id="inputPassword" class="form-control mt-3"
                    placeholder="Contraseña" required />
                </div>
                <button class="btn btn-lg btn-primary mt-2 w-50 mt-1 mb-1" type="submit">
                  Registrarse
                </button>
                <div class="text-center">
                  <a href="index.php?registro=true">¿No tienes cuenta?</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="cartIcon" class="p-1 pe-2 d-flex align-items-center">
      <div>
        <i id="modalCesta" class="bi bi-bag h1" data-bs-toggle="modal" data-bs-target="#myModalCesta"></i>
        <span id="numeroCarrito" class="badge bg-danger">0</span>
      </div>
    </div>

    <div class="modal" id="myModalCesta" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Tu cesta</h5>
          </div>
          <div class="modal-body" id="cesta">
          </div>
          <div class="modal-footer d-flex justify-content-between">
            <div class="d-flex">
              <h4>Total:</h4>
              <h4 id="precioTotalEuros" class="ms-1">0</h4>
              <h4>€</h4>
            </div>
            <div class="d-flex">


              <?php
              if (isset($_SESSION["login"])) {
                echo '<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>';
                echo '<button type="button" class="btn btn-primary ms-1" id="compra">Pagar</button>';
              } else {
                echo '<p class="text-danger pe-3">Primero Inicia sesión para pagar</p>';
                echo '<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>';
                echo '<button type="button" class="btn btn-primary ms-1" disabled>Pagar</button>';
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>