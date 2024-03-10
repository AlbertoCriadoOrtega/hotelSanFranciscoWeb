document.addEventListener("keyup", e => {
  if(e.target.matches("#buscador")){
      let buscadorValue = e.target.value.toLowerCase();
      document.querySelectorAll(".articulo").forEach(producto => {
          let textoProducto = producto.querySelector('.card-title').textContent.toLowerCase();
          textoProducto.includes(buscadorValue)
              ? producto.style.display = ""
              : producto.style.display = "none";
      });
  }
});




