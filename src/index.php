<?php
session_start();


require_once("VIEW/html/head.php");

?>

<body>

  <header>
    <?php
    require_once("VIEW/html/header.php"); ?>
  </header>

  <div id="spacer">
    <br />
  </div>

  <main>
    <?php

    if (isset($_GET["about"])) {
      require_once("VIEW/html/about.php");
    } elseif (isset($_GET["registro"])) {
      require_once("VIEW/html/registro.php");
    } elseif (isset($_GET["productos"])) {
      require_once("VIEW/html/productos.php");
    } elseif (isset($_GET["galeria"])) {
      require_once("VIEW/html/gallery.php");
    } else {
      require_once("VIEW/html/home.php");
    }
    ?>
  </main>



  <footer class="footer mt-auto">

    <?php
    if (isset($_GET["registro"])) {
    } else {
      require_once("VIEW/html/footer.php");
    }
    ;
    ?>
  </footer>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" defer></script>
  <script src="VIEW/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js" defer></script>
  <script type="text/javascript" defer>
  function downloadJSAtOnload() {
    var element = document.createElement("script");
    element.src = "VIEW/js/carrito.js";
    document.body.appendChild(element);
  }
  if (window.addEventListener)
    window.addEventListener("load", downloadJSAtOnload, false);
  else if (window.attachEvent)
    window.attachEvent("onload", downloadJSAtOnload);
  else window.onload = downloadJSAtOnload;
  </script>
  <script src="VIEW/js/buscador.js"></script>
  <script src="VIEW/js/home.js"></script>
</body>

</html>