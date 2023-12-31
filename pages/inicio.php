<?php
require 'modelo/conexion.php';
$sql = "SELECT * FROM usuarios Where run = '$_SESSION[run]'";
$resultado = mysqli_query($conexion, $sql);
$row = mysqli_fetch_assoc($resultado);
?>

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


<div class="row mt-5">
  <div class="col-5 offset-1 ">
    <div id='calendar' class=" border border-secondary rounded-1 p-1"></div>
  </div>
  <div class="col-5">
    <div class="card" style="width: 100%;">
      <?php
      if ($row['salud'] == 'negativo') {
        echo '<img src="img/acceso_permitido.webp" class="card-img-top opacity-75" alt="acceso permitido">';
      } else {
        echo '<img src="img/acceso_denegado.png" class="card-img-top" alt="acceso denegado">';
      }

      ?>

      <div class="card-body">
        <h5 class="card-title">Estado de cuenta y salud</h5>
        <p class="card-text">En este recuadro se mostrara el estado de su cuenta y su salud, en relación a su acceso a la universidad.</p>
        <p class="card-text">Debido a que su salud esta en un estado 
          <?php echo $row['salud']; ?> usted tiene
          <?php
          if ($row['salud'] == 'negativo') {
            echo 'permitido';
          } else {
            echo 'prohibido';
          }

          ?> el acceso a la universidad
        </p>
      </div>
    </div>
  </div>
</div>



<script src="js/calendar.js"></script>