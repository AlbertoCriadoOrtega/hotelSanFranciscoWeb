function expCarouselNext() {
  var textTittle = document.getElementById("explorarTextTittle");
  var textSubtittle = document.getElementById("explorarTextSubtittle");
  var textContent = document.getElementById("explorarTextContent");
  if (document.getElementById("expItem1").matches(".active")) {
    textSubtittle.innerHTML = "Museo del Prado";
  }
  if (document.getElementById("expItem2").matches(".active")) {
    textSubtittle.innerHTML = "Plaza Mayor de Madrid";
  }
  if (document.getElementById("expItem3").matches(".active")) {
    textSubtittle.innerHTML = "Palacio de Correos";
  }
  if (document.getElementById("expItem4").matches(".active")) {
    textSubtittle.innerHTML = "Gran vía";
  }
}
function expCarouselPrev() {
  var textTittle = document.getElementById("explorarTextTittle");
  var textSubtittle = document.getElementById("explorarTextSubtittle");
  var textContent = document.getElementById("explorarTextContent");
  if (document.getElementById("expItem1").matches(".active")) {
    textSubtittle.innerHTML = "Museo del Prado";
  }
  if (document.getElementById("expItem2").matches(".active")) {
    textSubtittle.innerHTML = "Plaza Mayor de Madrid";
  }
  if (document.getElementById("expItem3").matches(".active")) {
    textSubtittle.innerHTML = "Palacio de Correos";
  }
  if (document.getElementById("expItem4").matches(".active")) {
    textSubtittle.innerHTML = "Gran vía";
  }
}
function expCarouselInfoBtn() {
  if (document.getElementById("expItem1").matches(".active")) {
    window.location.href = "web de museo del prado";
  }
  if (document.getElementById("expItem2").matches(".active")) {
    window.location.href = "web de plaza mayor";
  }
  if (document.getElementById("expItem3").matches(".active")) {
    window.location.href = "web de palacio de correos";
  }
  if (document.getElementById("expItem4").matches(".active")) {
    window.location.href = "web de gran via";
  }
}
function cargarMasReseñas() {
  //funcion para cargar mas reseñas
  // const arrayNuevasReseñas = [];
  // //llama a objeto JSON de reseñas
  // fetch("url_del_objeto_JSON_de_resenas")
  //   .then((response) => response.json())
  //   .then((data) => {
  //     //recorre el array de reseñas
  //     data.forEach((reseña) => {
  //       //añade reseña a arrayNuevasReseñas
  //       arrayNuevasReseñas.push(reseña);
  //     });
  //   })
  //   .catch((error) => console.error("Error fetching JSON:", error));
  // //actualiza reseñas
  // for (let i = 1; i <= 3; i++) {
  //   var res = document.getElementById("datosReseña" + i).childNodes;
  //   var contenido = document.getElementById("contenidoReseña" + i);
  //   for (let j = 0; j < res.length; j++) {
  //     if (j == res.length - 1) {
  //       contenido.innerHTML = arrayNuevasReseñas[i - 1][j];
  //     } else if (j == 2) {
  //       res[j].innerHTML = "";
  //       for (let k = 0; k < parseInt(arrayNuevasReseñas[i - 1][j]); k++) {
  //         res[j].innerHTML =
  //           res[j].innerHTML +
  //           "<img src='VIEW/img/res/Decor/estrella.png' width='50px' height='50px' />";
  //       }
  //     } else {
  //       res[j].innerHTML = arrayNuevasReseñas[i - 1][j];
  //     }
  //   }
  // }
}
function buscarReserva() {
  var fechaEntrada = document.getElementById("fechaEntrada").value;
  var fechaSalida = document.getElementById("fechaSalida").value;
  var adultos = document.getElementById("adultos").value;
  var niños = document.getElementById("niños").value;
  var camas = document.getElementById("camas").value;
  if (
    fechaEntrada.isEmpty() ||
    fechaSalida.isEmpty() ||
    adultos.isEmpty() ||
    niños.isEmpty() ||
    camas.isEmpty()
  ) {
    alert("Todos los campos son obligatorios");
  } else {
    // busca disponibilidad de habitaciones
    alert("" + fechaEntrada);
  }
}
