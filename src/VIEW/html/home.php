<div class="container-fluid" id="container">

  <!-- Video -->
  <div class="row" id="row_video" style="margin-bottom: 200px; padding: 0;">
    <div class="col-12 bg-white" style="height: 1100px; padding: 0;" id="video">
      <video autoplay muted loop id="home_video" type="video/mp4" class="w-100"
        style="height: 1100px; margin: 0; padding: 0;">
        <source src="VIEW/img/res/home_video.mp4" type="video/mp4">
      </video>
      <div class="row" style="height: 800px; color: white;">
        <div class="col-lg-4 col-md-6 col-12 text-white text-left align-self-end"
          style="margin-left: 100px; opacity: 0.9999;" id="introduction_video_bg">
          <introTitle style="font-size: 71px; font-family:Georgia, 'Times New Roman', Times, serif;">HOTEL SAN
            FRANCISCO
          </introTitle><br>
          <subtitle style="font-size: 40px; font-style: italic;">Redescubre tu estancia en HSF</subtitle>
          <br><br>
          <p class="d-none d-md-block" style="font-size: 20px;">Lorem ipsum dolor sit amet consectetur
            adipisicing elit.
            Dolorum fugiat, aspernatur error modi magni similique blanditiis porro corrupti fuga totam
            laudantium maxime
            quasi magnam at adipisci unde sed. Provident, ipsam.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-9 col-lg-6 align-self-center text-white"
          style="padding-top: 10px; margin-bottom: 150px; margin-left: 100px;" id="form_video_bg">
          <div class="row mb-lg-3">
            <div class="col-5 col-lg-2 mt-lg-4">
              <input type="date" id="fechaEntrada" onclick="this.showPicker()" placeholder="Fecha entrada"
                class="col-4 w-100 form-control" style="margin-left: 5px;">
            </div>
            <div class="col-5 col-lg-2 mt-lg-4">
              <input type="date" id="fechaSalida" onclick="this.showPicker()" placeholder="Fecha salida"
                class="col-4 w-100 form-control">
            </div>
            <div class="col-3 col-lg-1 mt-3 mt-lg-0">
              <label style="margin-left: 5px;">Adultos: </label>
              <input type="number" id="adultos" placeholder=" nº" class="w-100 form-control" style="margin-left: 5px;">
            </div>
            <div class="col-3 col-lg-1 mt-3 mt-lg-0">
              <label style="margin-right: 5px;">Niños: </label>
              <input type="number" id="niños" placeholder=" nº" class="w-100 form-control" style="margin-right: 25px;">
            </div>
            <div class="col-3 col-lg-1 mt-3 mt-lg-0">
              <label style="margin-right: 5px;">Camas: </label>
              <input type="number" id="camas" placeholder=" nº" class="w-100 form-control" style="margin-right: 25px;">
            </div>
            <div class="col-12 col-lg-1 mt-3 mt-lg-3 mt-lg-0">
              <input type="button" name="submit" value="Buscar" onclick="buscarReserva()" class="btn btn-warning mb-3"
                style="margin-left: 5px; width: 150px; height: 45px;">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 bg-warning w-100" style="height: 3px;"></div>
  </div>

  <!-- Introduccion -->
  <div class="row g-0 justify-content-center mt-5 mb-5">

    <!-- Carousel edificio HSF-->
    <div class="col-lg-3 col-md-6 col-12">
      <div id="introduction_carousel" class="carousel slide">
        <!-- Carousel Indicators -->
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#introduction_carousel" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#introduction_carousel" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#introduction_carousel" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#introduction_carousel" data-bs-slide-to="3"
            aria-label="Slide 4"></button>
        </div>
        <!-- Carousel Inner -->
        <div class="carousel-inner" style="padding: 0;">
          <div class="carousel-item active">
            <img src="VIEW/img/res/Square/edificio-de-hotel-en-madrid (1).jpg" class="d-block w-100"
              alt="edificio Hotel San Francisco">
          </div>
          <div class="carousel-item">
            <img src="VIEW/img/res/Square/edificio-de-hotel-en-madrid (2).jpg" class="d-block w-100"
              alt="edificio Hotel San Francisco">
          </div>
          <div class="carousel-item">
            <img src="VIEW/img/res/Square/edificio-de-hotel-en-madrid (3).jpg" class="d-block w-100"
              alt="edificio Hotel San Francisco">
          </div>
          <div class="carousel-item">
            <img src="VIEW/img/res/Square/edificio-de-hotel-en-madrid.jpg" class="d-block w-100"
              alt="edificio Hotel San Francisco">
          </div>
        </div>
        <!-- Carousel Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#introduction_carousel"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon fontIcon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#introduction_carousel"
          data-bs-slide="next">
          <span class="carousel-control-next-icon fontIcon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

    <!-- Texto edificio HSF -->
    <div class="col-lg-4 col-md-6 col-12 introduction_text_bg mb-5">
      <!-- Title -->
      <div class="row">
        <div class="col-12 h1 ml-5 mt-4" style="margin-left: 35px;">
          <h1
            style="font-weight:500; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 70px; ">
            Hotel San Francisco</h1>
        </div>
      </div>
      <!-- Text -->
      <div class="row mb-lg-4">
        <div class="col-11 d-flex justify-content-center" style="margin-left: 35px;">
          <p style="font-size: 20px;">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam quidem et, ad magni non
            harum architecto
            dolores praesentium facere voluptatem quod, pariatur sequi reiciendis voluptates, veritatis
            porro modi
            fugiat illum.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci facere sint perferendis, eaque
            cumque
            repudiandae veritatis rerum! Similique culpa in vitae blanditiis, magnam perferendis soluta,
            assumenda
            eveniet quis exercitationem id!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim error explicabo rerum ullam veniam
            sint
            architecto, magni porro officia magnam perspiciatis repudiandae nesciunt fuga ex facere. Earum
            voluptates
            harum nam.
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia qui beatae sit fuga sunt eaque
            voluptatibus et fugit nihil eius? Repellat, ad deleniti quis rem blanditiis velit at tempora
            odit.
          </p>
        </div>
      </div>
      <!-- Button -->
      <div class="row">
        <div class="col-12 mb-5">
          <a href="home.html">
            <!-- Sustituir por link a about us -->
            <button on type="button"
              style="background-color: #242021; margin-top: 40px; margin-left: 32px; border-radius: 25px; padding: 10px; font-weight: bold;"
              class="text-white text-center">Contáctanos</button>
          </a>
        </div>
      </div>
    </div>

    <!-- Oferta rapida -->
    <div class="col-lg-6 col-md-12 rounded d-flex align-items-center introduction_text_bg mt-5">
      <!-- Logo -->
      <div class="row mb-lg-2">
        <div class="d-none d-lg-block col-lg-2">
          <img src="VIEW/img/res/logo_banner.png" alt="imagen oferta" class="w-100">
        </div>
        <!-- Text -->
        <div class="col-12 col-lg-6">
          <div class="row">
            <div class="col-12 m-5 mb-0">
              <oferta>
                <h1>Reserva ya nuestra suite en HSF</h1>
              </oferta>
              Suite Hotel San Francisco + desayuno incluido + paquete actividades.<br />
              <a href="#" style="color: rgb(203, 176, 1);">Ver opciones</a><i class="bannerDetailesArrow"></i>
            </div>
          </div>
        </div>
        <!-- Button -->
        <div class="col-12 col-lg-2 d-flex align-self-center m-5">
          <input value="Ver en detalle" data-bs-toggle="modal" data-bs-target="#bannerModal" name="bannerBtn"
            class="btn" style="background-color:#b02909; color: white; font-weight: bold;" type="button" />
        </div>
      </div>
    </div>
  </div>

  <!-- Habitaciones -->
  <div class="row" style="padding: 40px; background-color: #f5f5f5; overflow-x: auto;">
    <div class="col-12 mb-5">
      <h1 style="font-size: 90px; font-family:Georgia, 'Times New Roman', Times, serif">
        Habitaciones
      </h1>
    </div>
    <div class="col-12 tipoHabitaciones" style="white-space: nowrap; display: flex;">

      <!-- Tipo Habitacion 1 -->
      <div class="col-lg-6 col-md-6 col-12 tipoHabitacion">
        <div class="row">
          <img src="VIEW/img/res/Landscape/habitacion-moderna-de-hotel-upscaled (1).jpg" alt="tipo habitacion 1">
        </div>
        <div class="row" style="margin-top: 50px;">
          <h1>Tipo habitacion 1 San Francisco:<br>
            <p style="margin-top: 15px; margin-left: 15px; font-size: large; white-space: normal;">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem voluptates quibusdam
              soluta enim
              dignissimos, fugiat odio quidem. A ut, consectetur rerum deserunt excepturi cum porro
              obcaecati temporibus
              dolorum facilis laboriosam?
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ducimus accusantium
              rerum, excepturi
              voluptatem quos nostrum quisquam veritatis pariatur voluptas fuga eveniet atque, repudiandae
              deleniti
              asperiores provident modi eaque totam.
            </p>
          </h1>
        </div>
        <div class="row d-flex justify-content-end">
          <button value="Reservar" type="button"
            style="width: 150px; background-color: #242021; margin-top: 25px; margin-right: 32px; border-radius: 25px; padding: 10px; font-weight: bold;"
            class="text-white text-center">Reservar</button>
        </div>
      </div>

      <!-- Tipo Habitacion 2 -->
      <div class="col-lg-6 col-md-6 col-12 tipoHabitacion">
        <div class="row">
          <img src="VIEW/img/res/Landscape/habitacion-moderna-de-hotel-upscaled (1).jpg" alt="tipo habitacion 1">
        </div>
        <div class="row" style="margin-top: 50px;">
          <h1>Tipo habitacion 2 San Francisco:<br>
            <p style="margin-top: 15px; margin-left: 15px; font-size: large; white-space: normal;">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem voluptates quibusdam
              soluta enim
              dignissimos, fugiat odio quidem. A ut, consectetur rerum deserunt excepturi cum porro
              obcaecati temporibus
              dolorum facilis laboriosam?
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ducimus accusantium
              rerum, excepturi
              voluptatem quos nostrum quisquam veritatis pariatur voluptas fuga eveniet atque, repudiandae
              deleniti
              asperiores provident modi eaque totam.
            </p>
          </h1>
        </div>
        <div class="row d-flex justify-content-end">
          <button value="Reservar" type="button"
            style="width: 150px; background-color: #242021; margin-top: 25px; margin-right: 32px; border-radius: 25px; padding: 10px; font-weight: bold;"
            class="text-white text-center">Reservar</button>
        </div>
      </div>

      <!-- Tipo Habitacion 3 -->
      <div class="col-lg-6 col-md-6 col-12 tipoHabitacion">
        <div class="row">
          <img src="VIEW/img/res/Landscape/habitacion-moderna-de-hotel-upscaled (1).jpg" alt="tipo habitacion 1">
        </div>
        <div class="row" style="margin-top: 50px;">
          <h1>Tipo habitacion 3 San Francisco:<br>
            <p style="margin-top: 15px; margin-left: 15px; font-size: large; white-space: normal;">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem voluptates quibusdam
              soluta enim
              dignissimos, fugiat odio quidem. A ut, consectetur rerum deserunt excepturi cum porro
              obcaecati temporibus
              dolorum facilis laboriosam?
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ducimus accusantium
              rerum, excepturi
              voluptatem quos nostrum quisquam veritatis pariatur voluptas fuga eveniet atque, repudiandae
              deleniti
              asperiores provident modi eaque totam.
            </p>
          </h1>
        </div>
        <div class="row d-flex justify-content-end">
          <button value="Reservar" type="button"
            style="width: 150px; background-color: #242021; margin-top: 25px; margin-right: 32px; border-radius: 25px; padding: 10px; font-weight: bold;"
            class="text-white text-center">Reservar</button>
        </div>
      </div>

      <!-- Tipo Habitacion 4 -->
      <div class="col-lg-6 col-md-6 col-12 tipoHabitacion">
        <div class="row">
          <img src="VIEW/img/res/Landscape/habitacion-moderna-de-hotel-upscaled (1).jpg" alt="tipo habitacion 1">
        </div>
        <div class="row" style="margin-top: 50px;">
          <h1>Tipo habitacion 4 San Francisco:<br>
            <p style="margin-top: 15px; margin-left: 15px; font-size: large; white-space: normal;">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem voluptates quibusdam
              soluta enim
              dignissimos, fugiat odio quidem. A ut, consectetur rerum deserunt excepturi cum porro
              obcaecati temporibus
              dolorum facilis laboriosam?
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ducimus accusantium
              rerum, excepturi
              voluptatem quos nostrum quisquam veritatis pariatur voluptas fuga eveniet atque, repudiandae
              deleniti
              asperiores provident modi eaque totam.
            </p>
          </h1>
        </div>
        <div class="row d-flex justify-content-end">
          <button value="Reservar" type="button"
            style="width: 150px; background-color: #242021; margin-top: 25px; margin-right: 32px; border-radius: 25px; padding: 10px; font-weight: bold;"
            class="text-white text-center">Reservar</button>
        </div>
      </div>

      <!-- Tipo Habitacion 5 -->
      <div class="col-lg-6 col-md-6 col-12 tipoHabitacion">
        <div class="row">
          <img src="VIEW/img/res/Landscape/habitacion-moderna-de-hotel-upscaled (1).jpg" alt="tipo habitacion 1">
        </div>
        <div class="row" style="margin-top: 50px;">
          <h1>Tipo habitacion 5 San Francisco:<br>
            <p style="margin-top: 15px; margin-left: 15px; font-size: large; white-space: normal;">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem voluptates quibusdam
              soluta enim
              dignissimos, fugiat odio quidem. A ut, consectetur rerum deserunt excepturi cum porro
              obcaecati temporibus
              dolorum facilis laboriosam?
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ducimus accusantium
              rerum, excepturi
              voluptatem quos nostrum quisquam veritatis pariatur voluptas fuga eveniet atque, repudiandae
              deleniti
              asperiores provident modi eaque totam.
              <br><br>
            </p>
          </h1>
        </div>
        <div class="row d-flex justify-content-end">
          <button value="Reservar" type="button"
            style="width: 150px; background-color: #242021; margin-top: 25px; margin-right: 32px; border-radius: 25px; padding: 10px; font-weight: bold;"
            class="text-white text-center">Reservar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Promociones -->
  <div class="row d-flex justify-content-center mt-5" id="row_promociones">
    <div class="row d-flex justify-content-center">

      <!-- Promocion 1 -->
      <div class="col-lg-3 col-md-4 col-12 mb-4" id="col_promo1">
        <div class="col-12 shadow rounded bg-black mb-4">
          <img onclick="alert('Acceder a promocion 1')" src="VIEW/img/res/Square/promocion_san_valentin (1).jpeg"
            class="d-block rounded w-100 imgPromociones" alt="promocion paquete romantico">
        </div>
        <div class="col-12 rounded" style="height: 150px;">Lorem ipsum dolor sit amet consectetur, adipisicing
          elit.
          Numquam recusandae nulla natus illo error sapiente reiciendis quam, labore architecto repellendus
          excepturi,
          cumque magni nemo iure aperiam, possimus dignissimos ipsa impedit.</div>
        <div class="col-12 rounded bg-warning w-100" style="height: 3px;"></div>
      </div>

      <!-- Promocion 2 -->
      <div class="col-lg-3 col-md-4 col-12 mb-4" id="col_promo2">
        <div class="col-12 shadow rounded bg-black mb-4">
          <img onclick="alert('Acceder a promocion 2')" src="VIEW/img/res/Square/promocion_paquete_familiar.jpeg"
            class="d-block rounded w-100 imgPromociones" alt="promocion paquete familiar">
        </div>
        <div class="col-12 rounded" style="height: 150px;">Lorem ipsum dolor sit amet consectetur, adipisicing
          elit.
          Numquam recusandae nulla natus illo error sapiente reiciendis quam, labore architecto repellendus
          excepturi,
          cumque magni nemo iure aperiam, possimus dignissimos ipsa impedit.</div>
        <div class="col-12 rounded bg-warning w-100" style="height: 3px;"></div>
      </div>

      <!-- Promocion 3 -->
      <div class="col-lg-3 col-md-4 col-12" id="col_promo3">
        <div class="col-12 shadow rounded bg-black mb-4">
          <img onclick="alert('Acceder a promocion 3')" src="VIEW/img/res/Square/promocion_paquete_individual.jpeg"
            class="d-block rounded w-100 imgPromociones" alt="promocion paquete familiar">
        </div>
        <div class="col-12 rounded" style="height: 150px;">Lorem ipsum dolor sit amet consectetur, adipisicing
          elit.
          Numquam recusandae nulla natus illo error sapiente reiciendis quam, labore architecto repellendus
          excepturi,
          cumque magni nemo iure aperiam, possimus dignissimos ipsa impedit.</div>
        <div class="col-12 rounded bg-warning w-100" style="height: 3px;"></div>
      </div>

    </div>
  </div>

  <!-- Actividades Madrid -->
  <div class="row justify-content-center mt-5 mb-5" style="background-color: #191617;" id="row_explorar">
    <!-- texto explorar -->
    <div class="col-lg-4 col-md-6 col-12 text-white">
      <div class="row">
        <h1 style="margin-top: 40px; font-size: 65px;" id="explorarTextTittle" class="text-light">Actividades en
          Madrid
        </h1><br>
        <h5 style="margin-left: 15px;" id="explorarTextSubtittle" class="text-light">Visita sitios emblemáticos
          de
          Madrid.</h5>
      </div>
      <div class="row" style="font-size: 25px; margin-top: 45px;">
        <div class="col-11" id="explorarTextContent" class="text-light">
          <p class="text-light"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut voluptate
            molestiae quis
            soluta,
            corporis,
            placeat sit inventore dolore, praesentium facilis iure perferendis. Magnam corporis vel,
            repudiandae
            illo
            ipsum ullam expedita!</p>

        </div>
      </div>
      <div class="row mt-5">
        <div class="col-11">
          <a onclick="expCarouselInfoBtn()"
            style="cursor: pointer; font-size: 22px; color: rgb(203, 176, 1); text-decoration: underline;">Ver
            más </a>
        </div>
      </div>
    </div>

    <div class="col-lg-7 col-md-6 mt-5 mb-5">
      <!-- Carousel explorar -->
      <div id="explorar_carousel" class="carousel slide carousel-fade">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#explorar_carousel" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#explorar_carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#explorar_carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#explorar_carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" id="expItem1">
            <img src="VIEW/img/res/Landscape/Slider expl/gran_via_madrid.jpg" class="d-block w-100"
              alt="edificio Hotel San Francisco">
          </div>
          <div class="carousel-item" id="expItem2">
            <img src="VIEW/img/res/Landscape/Slider expl/museo_del_prado.jpg" height="900px" class="d-block w-100"
              alt="edificio Hotel San Francisco">
          </div>
          <div class="carousel-item" id="expItem3">
            <img src="VIEW/img/res/Landscape/Slider expl/plaza_mayor.jpg" height="900px" class="d-block w-100"
              alt="edificio Hotel San Francisco">
          </div>
          <div class="carousel-item" id="expItem4">
            <img src="VIEW/img/res/Landscape/Slider expl/palacio_de_correos.jpg" height="900px" class="d-block w-100"
              alt="edificio Hotel San Francisco">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" onclick="expCarouselPrev()"
          data-bs-target="#explorar_carousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon fontIcon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" onclick="expCarouselNext()" aria-label="Next"
          data-bs-target="#explorar_carousel" data-bs-slide="next">
          <span class="carousel-control-next-icon fontIcon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>

  <!-- Explorar Madrid-->
  <div class="row justify-content-end p-4 mb-5 mt-5" style="margin-right: 75px;">
    <div class="col-12 col-lg-2 text-black text-start mt-4"
      style="font-size: 80px; font-family:Georgia, 'Times New Roman', Times, serif;">
      <textTitle>Explora</textTitle>
    </div>
    <div class="col-12 col-lg-6 text-black text-start mt-5 mb-5"
      style="font-size: 20px; font-family:Georgia, 'Times New Roman', Times, serif" id="text_explorar_madrid">
      <textTitle style="font-size: larger;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta
        asperiores
        labore enim id consequatur! Optio, porro voluptate enim iure amet possimus earum accusantium ea,
        deleniti odio
        in reiciendis dolore. Adipisci.</textTitle>
      <br>
      <a href="#" style="color: rgb(203, 176, 1);">Ver actividades </a><i class="bannerDetailesArrow"></i>
    </div>
  </div>
  <div class="row bg-white d-flex justify-content-end p-lg-5 mb-5">
    <div class="col-12 col-lg-8 shadow-lg" style="padding: 0;">
      <video autoplay muted loop style="width: 100%;">
        <source src="VIEW/img/res/video_madrid.mp4" type="video/mp4">
      </video>
    </div>
  </div>

  <!-- Instalaciones -->
  <div class="row justify-content-center mt-5">
    <div class="col-lg-8 col-11 rounded" style="border: solid 2px rgb(210, 175, 0);">
      <div class="row">
        <!-- Carousel Gimnasio -->
        <div class="col-lg-3 col-10 m-5 m-lg-0 shadow rounded bg-white mb-4" style="padding: 0;"
          alt="carrusel fotos gimnasio">
          <div id="actividades_carousel" class="carousel slide">
            <div id="actividades_carousel" class="carousel slide">
              <div class="carousel-inner rounded">
                <div class="carousel-item active">
                  <img src="VIEW/img/res/Square/gimnasio-interior-de-hotel-en-madrid (1).jpg" class=" d-block w-100"
                    alt="...">
                </div>
                <div class="carousel-item">
                  <img src="VIEW/img/res/Square/gimnasio-interior-de-hotel-en-madrid (2).jpg" class="d-block w-100"
                    alt="...">
                </div>
                <div class="carousel-item">
                  <img src="VIEW/img/res/Square/gimnasio-interior-de-hotel-en-madrid (3).jpg" class="d-block w-100"
                    alt="...">
                </div>
                <!-- AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA  -->
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#actividades_carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#actividades_carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>

        <!-- Carousel Piscina -->
        <div class="col-lg-3 col-10 m-5 m-lg-0 shadow rounded bg-white mb-4" style="padding: 0;"
          alt="carrusel fotos piscina">
          <div id="actividades_piscina_carousel" class="carousel slide">
            <div id="actividades_piscina_carousel" class="carousel slide">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="VIEW/img/res/Square/piscina-de-hotel-en-madrid (1).jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="VIEW/img/res/Square/piscina-de-hotel-en-madrid (2).jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="VIEW/img/res/Square/piscina-de-hotel-en-madrid (3).jpg" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#actividades_piscina_carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#actividades_piscina_carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>

        <!-- Texto Actividades -->
        <div class="col-lg-4 col-12 mb-3 mt-4">
          <strong style="font-size: 23px;">Gimnasio</strong><br>
          <label>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit obcaecati quisquam sed eos
            consectetur
            dignissimos odio nam iusto molestiae quae! Sunt voluptates ipsa sequi odio minus delectus
            dolorum suscipit
            cumque.</label>
          <br><a href="/Home/home copy.html" style="text-decoration: none; color: rgb(255, 221, 0);"
            id="texto_actividades_links">->Ver fotos</a>

          <br><br><br><strong style="font-size: 23px;">Piscina</strong><br>
          <label>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit obcaecati quisquam sed eos
            consectetur
            dignissimos odio nam iusto molestiae quae! Sunt voluptates ipsa sequi odio minus delectus
            dolorum suscipit
            cumque.</label>
          <br><a href="/Home/home copy.html" style="text-decoration: none; color: rgb(255, 221, 0);"
            id="texto_actividades_links">->Ver fotos</a>

          <br><br><br><strong style="font-size: 23px;">Comedor</strong><br>
          <label>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit obcaecati quisquam sed eos
            consectetur
            dignissimos odio nam iusto molestiae quae! Sunt voluptates ipsa sequi odio minus delectus
            dolorum suscipit
            cumque.</label>
          <br><a href="/Home/home copy.html" style="text-decoration: none; color: rgb(255, 221, 0);"
            id="texto_actividades_links">->Ver fotos</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Reseñas -->
  <div class="row g-0 justify-content-center mt-5 mb-5" id="row_reseñas">

    <!-- Reseñas Carousel -->
    <div class="col-12 col-lg-4 col-md-6 imgCarouselReseñas" style="border: #191617 solid 1px; padding: 0;">
      <div class="carousel-indicators">
        <button style="height: 14px; width: 14px;" type="button" id="reseñas_indicators"
          data-bs-target="#reseñas_carousel" data-bs-slide-to="0" class="active" aria-current="true"
          aria-label="Slide 1"></button>
        <button style="height: 14px; width: 14px;" type="button" id="reseñas_indicators"
          data-bs-target="#reseñas_carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button style="height: 14px; width: 14px;" type="button" id="reseñas_indicators"
          data-bs-target="#reseñas_carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner mb-4" style="padding: 0;">
        <!-- Reseña 1 -->
        <div class="carousel-item active">
          <div class="row">
            <div class="col-8 fs-3" style="margin-top: 25px; margin-left: 25px;" id="datosReseña1">
              <label id="usuarioReseña1">Usuario20556</label>
              <date id="fechaReseña1" style="font-size: large;">22/02/2024</date>
              <rate id="califReseña1">Calif.</rate>
            </div>
          </div>
          <div class="row justify-content-center" style="margin-top: 30px;">
            <div class="col-11 rounded bg-white" style="height: 275px; border: #191617 solid 1px;"
              id="contenidoReseña1"><img src="VIEW/img/res/Decor/estrella.png" class="img-fluid w-25" alt=""></div>
          </div>
          <div class="row">
            <div class="col-12 d-flex justify-content-end"><input type="button" class="rounded" value="Cargar más"
                onclick="cargarMasReseñas()"
                style="width: 120px; height: 40px; margin-right: 25px; margin-top: 15px; border: black solid 1px; background-color: rgb(255, 221, 0); color: black;" />
            </div>
          </div>
        </div>
        <!-- Reseña 2 -->
        <div class="carousel-item">
          <div class="row">
            <div class="col-8 fs-3" style="margin-top: 25px; margin-left: 25px;" id="datosReseña2">
              <label>Usuario20557</label>
              <date style="font-size: large;">22/02/2024</date>
              <rate>Calif.</rate>
            </div>
          </div>
          <div class="row justify-content-center" style="margin-top: 30px;">
            <div class="col-11 rounded bg-white" style="height: 275px; border: #191617 solid 1px;"
              id="contenidoReseña2"><img src="VIEW/img/res/Decor/estrella.png" class="img-fluid w-25" alt=""></div>
          </div>
          <div class="col-12 d-flex justify-content-end"><input type="button" class="rounded" value="Cargar más"
              onclick="cargarMasReseñas()"
              style="width: 120px; height: 40px; margin-right: 25px; margin-top: 15px; border: black solid 1px; background-color: rgb(255, 221, 0); color: black;" />
          </div>
        </div>
        <!-- Reseña 3 -->
        <div class="carousel-item">
          <div class="row">
            <div class="col-8 fs-3" style="margin-top: 25px; margin-left: 25px;" id="datosReseña3">
              <label>Usuario20558</label>
              <date style="font-size: large;">22/02/2024</date>
              <rate>Calif.</rate>
            </div>
          </div>
          <div class="row justify-content-center" style="margin-top: 30px;">
            <div class="col-11 rounded bg-white" style="height: 275px; border: #191617 solid 1px;"
              id="contenidoReseña3">
              <img src="VIEW/img/res/Decor/estrella.png" class="img-fluid w-25" alt="">
            </div>
          </div>
          <div class="col-12 d-flex justify-content-end"><input type="button" class="rounded" value="Cargar más"
              onclick="cargarMasReseñas()"
              style="font-weight: bold; width: 120px; height: 40px; margin-right: 25px; margin-top: 15px; border: 0; background-color: rgb(255, 221, 0); color: rgb(77, 77, 77);" />
          </div>
        </div>
      </div>
    </div>

    <!-- Formulario reseñas -->
    <div class="col-12 col-lg-4 col-md-6 mt-5 mt-lg-0 imgFormReseñas">
      <div class="row" style="margin-left: 13px;">
        <div class="col-10 fs-3 mt-5 text-white">
          <h3 style="text-decoration: underline; font-weight: 700;">Déjanos tu opinión:</h3>
          <subtitle style="font-size: large; font-weight: 700;">Descríbenos tu experiencia en HSF para poder
            seguir
            mejorando nuestro servicio.</subtitle>
        </div>
      </div>
      <div class="row m-3 justify-content-center">
        <div class="col-10">
          <form action="action" method="post">
            <input type="text" name="userFormReseñas" id="userFormReseñas" placeholder="Usuario o correo"
              class="border-white rounded w-100" style="background: transparent; font-size: 22px;">
            <input type="text" name="passFormReseñas" id="passFormReseñas" placeholder="Contraseña"
              class="border-white rounded mt-3 mb-2 w-100" style="background: transparent; font-size: 22px;"><br>
            <input type="checkbox" style="width: 15px; height: 15px;" name="checkFormReseñas" id="checkFormReseñas">
            <label style="color: white;">Marque la casilla si quiere recibir notificaciones de ofertas y
              promociones.</label><br>
            <input type="submit" value="Enviar" name="submitReseñas" class="rounded mt-2"
              style="margin-left: 175px; border: rgb(203, 176, 1) solid; color: white; background-color: rgb(203, 176, 1); width: 150px; height: 45px; font-size: larger;">
          </form>
        </div>
      </div>
    </div>

  </div>

  <!-- Modales -->
  <!-- Modal Banner -->
  <div class="modal fade" id="bannerModal" tabindex="-1" aria-labelledby="bannerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="bannerModalTitle">Reserva la Suite San Francisco:</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-12">
              <img class="w-100" src="VIEW/img/res/Landscape/habitacion-moderna-de-hotel.jpg" alt="Suite San Francisco">
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-12">
              <h1>Suite San Francisco</h1>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <price style="font-size: 20px;">Precio (por noche): $500</price>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-12">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, eligendi aliquid nihil,
                provident
                consequatur accusamus impedit deserunt nemo perspiciatis minima excepturi corrupti alias
                voluptatibus?
                Ipsa rerum fuga provident minus officia!</p>
            </div>
          </div>
        </div>
        <div class="modal-footer d-flex justify-content-end">
          <button type="button" style="background-color: #b02909;"
            class="btn text-white text-center"><strong>Reservar</strong></button>
        </div>
      </div>
    </div>
  </div>
  <!-- Fin de modales -->


</div><!-- Fin del contenedor -->