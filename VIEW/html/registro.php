<div class="d-flex justify-content-center align-items-center mb-5">
  <form class="form-signin mb-5 col-xxl-6 col-xl-8 col-lg-8 col-md-8 col-sm-8 col-xs-8 col-10 text-center"
    action="/hotelSanFranciscoWeb/src/CONTROLLER/controladorUsuarios.php/sigin/" method="POST">
    <h3 class="text-center m-0 mt-3">Registro</h3>
    <div class="form-group">
      <label for="inputEmailregistro" class="visually-hidden">Correo electrónico</label>
      <input name="email" type="email" id="inputEmailRegistro" class="form-control mt-3"
        placeholder="Correo electrónico" required autofocus />
    </div>
    <div class="form-group">
      <label for="inputPasswordRegistro" class="visually-hidden">Contraseña</label>
      <input name="password1" type="password" id="inputPasswordRegistro" class="form-control mt-3"
        placeholder="Contraseña" required />
    </div>
    <div class="form-group">
      <label for="inputConfirmPassword" class="visually-hidden">Repetir contraseña</label>
      <input name="password2" type="password" id="inputConfirmPassword" class="form-control mt-3"
        placeholder="Repetir contraseña" required />
    </div>
    <button class="btn btn-lg btn-primary btn-block mt-2 col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6 col-6"
      type="submit">
      Registrarse
    </button>
    <div class="text-center">
      <a href="index.php">¿ya estas registrado?</a>
    </div>
  </form>
</div>

<?php
$resultado = $_GET["registro"];
if ($resultado == "false") {
  echo " <h1 class='text-center text-danger'>Error registro</h1>";
}
?>