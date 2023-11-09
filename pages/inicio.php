  <div class="row "> <!-- linea divisora -->
    <div class="col-1"></div>
    <div class="col-10">
      <hr class="border border-danger border-1 opacity-50">
    </div>
    <div class="col-1"></div>
  </div>


  <div class="container-fluid bg-light"> <!-- Carrusel de imagenes -->
    <div class="row">
      <div class="col-1"></div>
      <div class="col-10">
        <div id="carouselExampleIndicators" class="carousel slide">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active d-item">
              <img src="img/carousel-1.png" class="d-block w-100 d-img" alt="slider 1">
            </div>
            <div class="carousel-item d-item">
              <img src="img/carousel-2.jpg" class="d-block w-100 d-img" alt="slider 2">
            </div>
            <div class="carousel-item d-item">
              <img src="img/carousel-3.jpg" class="d-block w-100 d-img" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <div class="col-1"></div>
    </div>
  </div>

  <div class="row bg-light"> <!-- linea divisora -->
    <div class="col-1"></div>
    <div class="col-10">
      <hr class="border border-danger border-1 opacity-50">
    </div>
    <div class="col-1"></div>
  </div>

  <div class="row text-center bg-light"> <!-- codigo qr y contador -->
    <div class=" col-4 offset-1 d-flex justify-content-center "> 
      <p class="h3 m-5">Aforo vehicular actual</p>
    </div>


    <div class="col-4 offset-1 d-flex justify-content-center"> <!-- contador -->
  <div class="card p-3" style="width: 100%;">
   
    <div id="odometer" class="odometer">000000</div>
  </div>
  <script src="js/odometer.min.js"></script>
  <script type="text/javascript">
    // Esta función actualiza el valor del odómetro de manera gradual
    function updateOdometer(newValue) {
      var currentNumber = parseInt(odometer.innerHTML, 10);
      var step = 100; // Puedes ajustar la velocidad de la animación aquí
      var delay = 500; // Puedes ajustar la frecuencia de actualización aquí

      var update = function () {
        if (currentNumber < newValue) {
          currentNumber += step;
          odometer.innerHTML = currentNumber.toString().padStart(6, "0");
          setTimeout(update, delay);
        } else {
          odometer.innerHTML = newValue.toString().padStart(6, "0");
        }
      };

      update();
    }

    // Llama a la función para actualizar el odómetro con el nuevo valor
    setTimeout(function () {
      updateOdometer(175999);
    });
  </script>
</div>
  </div>

  <div class="row bg-light"> <!-- fechas -->

  </div>