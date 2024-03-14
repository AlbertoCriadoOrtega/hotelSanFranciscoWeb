function getProductsJSON() {
  return new Promise((resolve, reject) => {
    var productNames = [];
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
      if (this.status >= 200 && this.status < 300) {
        var jsonObject = JSON.parse(this.response);
        for (var key in jsonObject) {
          if (jsonObject.hasOwnProperty(key)) {
            productNames.push(jsonObject[key][0].nombre.toLowerCase());
          }
        }
        resolve(productNames);
      } else {
        reject({
          status: this.status,
          statusText: xhttp.statusText
        });
      }
    };
    xhttp.onerror = function () {
      reject({
        status: this.status,
        statusText: xhttp.statusText
      });
    };
    xhttp.open("GET", "http://localhost/hotelSanFranciscoWeb/src/CONTROLLER/controladorProductos.php/select/", true);
    xhttp.send();
  });
}

document.addEventListener("keyup", e => {
  if(e.target.matches("#buscador")){
    let buscadorValue = e.target.value.toLowerCase();
    getProductsJSON().then(productNames => {
      document.querySelectorAll(".articulo").forEach(producto => {
        let textoProducto = producto.querySelector('.card-title').textContent.toLowerCase();
        textoProducto.includes(buscadorValue)
          ? producto.style.display = ""
          : producto.style.display = "none";
      });
    }).catch(error => {
      console.error('Error:', error);
    });
  }
});
