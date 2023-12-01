<div class="row "> <!-- linea divisora -->
  <div class="col-1"></div>
  <div class="col-10">
    <hr class="border border-danger border-1 opacity-50">
  </div>
  <div class="col-1"></div>
</div>


<div class="container-fluid "> <!-- Carrusel de imagenes -->
  <div class="row">
    <div class="col-1"></div>
    <div class="col-10">
      <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
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
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <div class="col-1"></div>
  </div>
</div>

<div class="row "> <!-- linea divisora -->
  <div class="col-1"></div>
  <div class="col-10">
    <hr class="border border-danger border-1 opacity-50">
  </div>
  <div class="col-1"></div>
</div>


<div class="row">
<div class="col-6 offset-1">
  <div id='calendar'></div>
</div>


<div class="col-4">
  <div class="mb-3">
    <label for="eventName" class="form-label">Nombre del evento:</label>
    <input type="text" class="form-control" id="eventName" placeholder="Example input placeholder">
  </div>

  <div class="mb-3">
    <label for="eventDate" class="form-label">Fecha del evento:</label>
    <input type="text" class="form-control" id="eventDate" placeholder="Another input placeholder">
  </div>

  <div class="mb-3">
    <label for="eventColor" class="form-label">Color del evento:</label>
    <input type="color" class="form-control" id="eventColor" placeholder="Another input placeholder">
  </div>

  <button class="btn custom-btn border-secondary rounded-0 text-black d-flex justify-content-center fw-semibold   mb-4" onclick="agregarEvento()">Agregar Evento</button>

</div>
</div> 







<script src="js/calendar.js"></script>