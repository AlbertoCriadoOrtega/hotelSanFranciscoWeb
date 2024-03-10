let nombres = {
  producto0: "Experiencia culinaria",
  producto1: "Tour cultural",
  producto2: "Experiencias hotel",
  producto3: "Relajación en Spa",
  producto4: "Experiencia Deportes",
};

let precios = {
  producto0: 50,
  producto1: 100,
  producto2: 200,
  producto3: 150,
  producto4: 300,
};
function guardaCarritoEnLocalStorage() {
  var divPadre = document.getElementById("cesta");

  localStorage.setItem("carrito", divPadre.innerHTML);
}

function recargarCarrito() {
  var divPadre = document.getElementById("cesta");

  if (localStorage.getItem("carrito") === "[]") {
    localStorage.setItem("carrito", null);
  }

  divPadre.innerHTML = localStorage.getItem("carrito");

  divPadre.addEventListener("click", function (event) {
    if (event.target.id === "eliminar0") {
      eliminar_producto0();
    } else if (event.target.id === "eliminar1") {
      eliminar_producto1();
    } else if (event.target.id === "eliminar2") {
      eliminar_producto2();
    } else if (event.target.id === "eliminar3") {
      eliminar_producto3();
    } else if (event.target.id === "eliminar4") {
      eliminar_producto4();
    }
  });
}

recargarCarrito();

function guardaTotalEnLocalStorage() {
  var total = document.getElementById("precioTotalEuros");
  localStorage.setItem("precioTotal", total.innerHTML);
}

//lo mismo pero para el totalDelCarrito
function recargarTotalDelCarrito() {
  var total = document.getElementById("precioTotalEuros");
  total.innerHTML = localStorage.getItem("precioTotal");
}

recargarTotalDelCarrito();

function guardarNumCarrito() {
  var numCarrito = document.getElementById("numeroCarrito");

  localStorage.setItem("numCarrito", numCarrito.innerHTML);
}

function recargarNumCarrito() {
  var numCarrito = document.getElementById("numeroCarrito");

  numCarrito.textContent = localStorage.getItem("numCarrito");
}

recargarNumCarrito();

function añadir_producto0() {
  if (document.getElementById("producto0")) {
    var numeroCantidadProducto = document.getElementById("cantidadProducto0");
    numeroCantidadProducto.textContent =
      Number(numeroCantidadProducto.textContent) + 1;

    añadirPrecioTotal(precios["producto0"]);

    aumentarNumCarrito();
  } else {
    var productoDiv = document.createElement("div");
    productoDiv.className = "row d-flex ps-5 pe-5"; //estilos
    productoDiv.id = "producto0";

    // Crear elementos para el contenido del producto
    var nombreProducto = document.createElement("p");
    nombreProducto.textContent = nombres["producto0"];
    nombreProducto.className = "w-auto";

    var cantidadProducto = document.createElement("p");
    cantidadProducto.textContent = "cantidad: "; //estilos
    cantidadProducto.className = " w-auto";

    var numeroCantidadProducto = document.createElement("p");
    numeroCantidadProducto.textContent = 1;
    numeroCantidadProducto.className = " w-auto ps-1 pe-1"; //estilos
    numeroCantidadProducto.id = "cantidadProducto0";

    var precioProducto = document.createElement("p");
    precioProducto.textContent = precios["producto0"] + "€";
    precioProducto.className = "w-auto pe-1"; //estilos

    var eliminarProducto = document.createElement("button");
    eliminarProducto.type = "button";
    eliminarProducto.className = "btn-close ps-5"; //estilos
    eliminarProducto.id = "eliminar0";
    eliminarProducto.onclick = eliminar_producto0;

    // Agregar elementos al div del producto
    productoDiv.appendChild(nombreProducto);
    productoDiv.appendChild(precioProducto);
    productoDiv.appendChild(cantidadProducto);
    productoDiv.appendChild(numeroCantidadProducto);
    productoDiv.appendChild(eliminarProducto);

    var linea = document.createElement("hr");
    linea.className = "m-0 mb-3"; //estilos

    // Obtener el modal donde se desea agregar el producto
    var modal = document.getElementById("cesta");

    // Agregar el div del producto al modal
    modal.appendChild(productoDiv);
    productoDiv.appendChild(linea);

    añadirPrecioTotal(precios["producto0"]);

    aumentarNumCarrito();
  }

  guardaCarritoEnLocalStorage();
  guardaTotalEnLocalStorage();
  guardarNumCarrito();
}

function añadir_producto1() {
  if (document.getElementById("producto1")) {
    var numeroCantidadProducto = document.getElementById("cantidadProducto1");
    numeroCantidadProducto.textContent =
      Number(numeroCantidadProducto.textContent) + 1;

    añadirPrecioTotal(precios["producto1"]);

    aumentarNumCarrito();
  } else {
    var productoDiv = document.createElement("div");
    productoDiv.className = "row d-flex ps-5 pe-5"; //estilos
    productoDiv.id = "producto1";

    // Crear elementos para el contenido del producto
    var nombreProducto = document.createElement("p");
    nombreProducto.textContent = nombres["producto1"];
    nombreProducto.className = "w-auto"; //estilos

    var cantidadProducto = document.createElement("p");
    cantidadProducto.textContent = "cantidad: ";
    cantidadProducto.className = " w-auto"; //estilos

    var numeroCantidadProducto = document.createElement("p");
    numeroCantidadProducto.textContent = 1;
    numeroCantidadProducto.className = " w-auto ps-1 pe-1"; //estilos
    numeroCantidadProducto.id = "cantidadProducto1";

    var precioProducto = document.createElement("p");
    precioProducto.textContent = precios["producto1"] + "€";
    precioProducto.className = "w-auto pe-1"; //estilos

    var eliminarProducto = document.createElement("button");
    eliminarProducto.type = "button";
    eliminarProducto.className = "btn-close ps-5"; //estilos
    eliminarProducto.id = "eliminar1";
    eliminarProducto.onclick = eliminar_producto1;

    // Agregar elementos al div del producto
    productoDiv.appendChild(nombreProducto);
    productoDiv.appendChild(precioProducto);
    productoDiv.appendChild(cantidadProducto);
    productoDiv.appendChild(numeroCantidadProducto);
    productoDiv.appendChild(eliminarProducto);

    var linea = document.createElement("hr");
    linea.className = "m-0 mb-3"; //estilos

    // Obtener el modal donde se desea agregar el producto
    var modal = document.getElementById("cesta");

    // Agregar el div del producto al modal
    modal.appendChild(productoDiv);
    productoDiv.appendChild(linea);

    añadirPrecioTotal(precios["producto1"]);

    aumentarNumCarrito();
  }

  guardaCarritoEnLocalStorage();
  guardaTotalEnLocalStorage();
  guardarNumCarrito();
}

function añadir_producto2() {
  if (document.getElementById("producto2")) {
    var numeroCantidadProducto = document.getElementById("cantidadProducto2");
    numeroCantidadProducto.textContent =
      Number(numeroCantidadProducto.textContent) + 1;

    añadirPrecioTotal(precios["producto2"]);

    aumentarNumCarrito();
  } else {
    var productoDiv = document.createElement("div");
    productoDiv.className = "row d-flex ps-5 pe-5"; //estilos
    productoDiv.id = "producto2";

    // Crear elementos para el contenido del producto
    var nombreProducto = document.createElement("p");
    nombreProducto.textContent = nombres["producto2"];
    nombreProducto.className = "w-auto"; //estilos

    var cantidadProducto = document.createElement("p");
    cantidadProducto.textContent = "cantidad: ";
    cantidadProducto.className = " w-auto"; //estilos

    var numeroCantidadProducto = document.createElement("p");
    numeroCantidadProducto.textContent = 1;
    numeroCantidadProducto.className = " w-auto ps-1 pe-1"; //estilos
    numeroCantidadProducto.id = "cantidadProducto2";

    var precioProducto = document.createElement("p");
    precioProducto.textContent = precios["producto2"] + "€";
    precioProducto.className = "w-auto pe-1"; //estilos

    var eliminarProducto = document.createElement("button");
    eliminarProducto.type = "button";
    eliminarProducto.className = "btn-close ps-5"; //estilos
    eliminarProducto.id = "eliminar2";
    eliminarProducto.onclick = eliminar_producto2;

    // Agregar elementos al div del producto
    productoDiv.appendChild(nombreProducto);
    productoDiv.appendChild(precioProducto);
    productoDiv.appendChild(cantidadProducto);
    productoDiv.appendChild(numeroCantidadProducto);
    productoDiv.appendChild(eliminarProducto);

    var linea = document.createElement("hr");
    linea.className = "m-0 mb-3"; //estilos

    // Obtener el modal donde se desea agregar el producto
    var modal = document.getElementById("cesta");

    // Agregar el div del producto al modal
    modal.appendChild(productoDiv);
    productoDiv.appendChild(linea);

    añadirPrecioTotal(precios["producto2"]);

    aumentarNumCarrito();
  }

  guardaCarritoEnLocalStorage();
  guardaTotalEnLocalStorage();
  guardarNumCarrito();
}

function añadir_producto3() {
  if (document.getElementById("producto3")) {
    var numeroCantidadProducto = document.getElementById("cantidadProducto3");
    numeroCantidadProducto.textContent =
      Number(numeroCantidadProducto.textContent) + 1;

    añadirPrecioTotal(precios["producto3"]);

    aumentarNumCarrito();
  } else {
    var productoDiv = document.createElement("div");
    productoDiv.className = "row d-flex ps-5 pe-5";
    productoDiv.id = "producto3";

    // Crear elementos para el contenido del producto
    var nombreProducto = document.createElement("p");
    nombreProducto.textContent = nombres["producto3"];
    nombreProducto.className = "w-auto"; //estilos

    var cantidadProducto = document.createElement("p");
    cantidadProducto.textContent = "cantidad: ";
    cantidadProducto.className = " w-auto"; //estilos

    var numeroCantidadProducto = document.createElement("p");
    numeroCantidadProducto.textContent = 1;
    numeroCantidadProducto.className = " w-auto ps-1 pe-1";
    numeroCantidadProducto.id = "cantidadProducto3"; //estilos

    var precioProducto = document.createElement("p");
    precioProducto.textContent = precios["producto3"] + "€";
    precioProducto.className = "w-auto pe-1"; //estilos

    var eliminarProducto = document.createElement("button");
    eliminarProducto.type = "button";
    eliminarProducto.className = "btn-close ps-5"; //estilos
    eliminarProducto.id = "eliminar3";
    eliminarProducto.onclick = eliminar_producto3;

    // Agregar elementos al div del producto
    productoDiv.appendChild(nombreProducto);
    productoDiv.appendChild(precioProducto);
    productoDiv.appendChild(cantidadProducto);
    productoDiv.appendChild(numeroCantidadProducto);
    productoDiv.appendChild(eliminarProducto);

    var linea = document.createElement("hr");
    linea.className = "m-0 mb-3"; //estilos

    // Obtener el modal donde se desea agregar el producto
    var modal = document.getElementById("cesta");

    // Agregar el div del producto al modal
    modal.appendChild(productoDiv);
    productoDiv.appendChild(linea);

    añadirPrecioTotal(precios["producto3"]);

    aumentarNumCarrito();
  }

  guardaCarritoEnLocalStorage();
  guardaTotalEnLocalStorage();
  guardarNumCarrito();
}

function añadir_producto4() {
  if (document.getElementById("producto4")) {
    var div = document.getElementById("producto4");
    var numeroCantidadProducto = div.querySelector("#cantidadProducto4");
    numeroCantidadProducto.textContent =
      Number(numeroCantidadProducto.textContent) + 1;

    añadirPrecioTotal(precios["producto4"]);

    aumentarNumCarrito();
  } else {
    var productoDiv = document.createElement("div");
    productoDiv.className = "row d-flex ps-5 pe-5";
    productoDiv.id = "producto4";

    // Crear elementos para el contenido del producto
    var nombreProducto = document.createElement("p");
    nombreProducto.textContent = nombres["producto4"];
    nombreProducto.className = "w-auto"; //estilos

    var cantidadProducto = document.createElement("p");
    cantidadProducto.textContent = "cantidad: ";
    cantidadProducto.className = " w-auto"; //estilos

    var numeroCantidadProducto = document.createElement("p");
    numeroCantidadProducto.textContent = 1;
    numeroCantidadProducto.className = " w-auto ps-1 pe-1"; //estilos
    numeroCantidadProducto.id = "cantidadProducto4";

    var precioProducto = document.createElement("p");
    precioProducto.textContent = precios["producto4"] + "€";
    precioProducto.className = "w-auto pe-1";

    var eliminarProducto = document.createElement("button");
    eliminarProducto.type = "button";
    eliminarProducto.className = "btn-close ps-5"; //estilos
    eliminarProducto.id = "eliminar4";
    eliminarProducto.onclick = eliminar_producto4;

    // Agregar elementos al div del producto
    productoDiv.appendChild(nombreProducto);
    productoDiv.appendChild(precioProducto);
    productoDiv.appendChild(cantidadProducto);
    productoDiv.appendChild(numeroCantidadProducto);
    productoDiv.appendChild(eliminarProducto);

    var linea = document.createElement("hr");
    linea.className = "m-0 mb-3"; //estilos

    // Obtener el modal donde se desea agregar el producto
    var modal = document.getElementById("cesta");

    // Agregar el div del producto al modal
    modal.appendChild(productoDiv);
    productoDiv.appendChild(linea);

    añadirPrecioTotal(precios["producto4"]);

    aumentarNumCarrito();
  }

  guardaCarritoEnLocalStorage();
  guardaTotalEnLocalStorage();
  guardarNumCarrito();
}

function eliminar_producto0() {
  var div = document.getElementById("producto0");

  var confirm = window.confirm("¿Seguro que quieres borrar el producto?");
  if (confirm) {
    if (div) {
      var numeroCantidadProducto = div.querySelector("#cantidadProducto0");
      for (
        let index = 0;
        index < Number(numeroCantidadProducto.textContent);
        index++
      ) {
        disminuirPrecioTotal(precios["producto0"]);
        bajarNumCarrito();
      }
      div.parentNode.removeChild(div);
      guardaCarritoEnLocalStorage();
      guardaTotalEnLocalStorage();
      guardarNumCarrito();
    }
  }
}

function eliminar_producto1() {
  var div = document.getElementById("producto1");
  var confirm = window.confirm("¿Seguro que quieres borrar el producto?");
  if (confirm) {
    if (div) {
      var numeroCantidadProducto = div.querySelector("#cantidadProducto1");
      for (
        let index = 0;
        index < Number(numeroCantidadProducto.textContent);
        index++
      ) {
        disminuirPrecioTotal(precios["producto1"]);
        bajarNumCarrito();
      }
      div.parentNode.removeChild(div);
      guardaCarritoEnLocalStorage();
      guardaTotalEnLocalStorage();
      guardarNumCarrito();
    }
  }
}

function eliminar_producto2() {
  var div = document.getElementById("producto2");
  var confirm = window.confirm("¿Seguro que quieres borrar el producto?");
  if (confirm) {
    if (div) {
      var numeroCantidadProducto = div.querySelector("#cantidadProducto2");
      for (
        let index = 0;
        index < Number(numeroCantidadProducto.textContent);
        index++
      ) {
        disminuirPrecioTotal(precios["producto2"]);
        bajarNumCarrito();
      }
      div.parentNode.removeChild(div);
      guardaCarritoEnLocalStorage();
      guardaTotalEnLocalStorage();
      guardarNumCarrito();
    }
  }
}

function eliminar_producto3() {
  var div = document.getElementById("producto3");

  var confirm = window.confirm("¿Seguro que quieres borrar el producto?");
  if (confirm) {
    if (div) {
      var numeroCantidadProducto = div.querySelector("#cantidadProducto3");
      for (
        let index = 0;
        index < Number(numeroCantidadProducto.textContent);
        index++
      ) {
        disminuirPrecioTotal(precios["producto3"]);
        bajarNumCarrito();
      }
      div.parentNode.removeChild(div);
      guardaCarritoEnLocalStorage();
      guardaTotalEnLocalStorage();
      guardarNumCarrito();
    }
  }
}

function eliminar_producto4() {
  var div = document.getElementById("producto4");

  var confirm = window.confirm("¿Seguro que quieres borrar el producto?");
  if (confirm) {
    if (div) {
      var numeroCantidadProducto = div.querySelector("#cantidadProducto4");
      for (
        let index = 0;
        index < Number(numeroCantidadProducto.textContent);
        index++
      ) {
        disminuirPrecioTotal(precios["producto4"]);
        bajarNumCarrito();
      }
      div.parentNode.removeChild(div);
      guardaCarritoEnLocalStorage();
      guardaTotalEnLocalStorage();
      guardarNumCarrito();
    }
  }
}

function añadirPrecioTotal(precioAñadido) {
  var precioTotal = document.getElementById("precioTotalEuros");
  precioTotal.textContent = Number(precioTotal.textContent) + precioAñadido;
}

function disminuirPrecioTotal(precioEliminado) {
  var precioTotal = document.getElementById("precioTotalEuros");
  precioTotal.textContent = Number(precioTotal.textContent) - precioEliminado;
}

function aumentarNumCarrito() {
  var numeroCarrito = document.getElementById("numeroCarrito");
  numeroCarrito.textContent++;
}

function bajarNumCarrito() {
  var numeroCarrito = document.getElementById("numeroCarrito");
  numeroCarrito.textContent--;
}

function confirmarCompra() {
  var confirm = window.confirm("¿Seguro que quieres borrar el producto?");
  if (confirm) {
    window.location.href =
      "http://localhost/hotelSanFranciscoWeb/src/index.php";
  }
}
