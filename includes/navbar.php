<?php
$page = isset($_GET['p']) ? $_GET['p'] : '';


if ($navbarType === 'type1') {
  echo ' <div class="container-fluid"> <!-- nav bar inicio(Centrado)-->
  <div class="row bg-light">
      <div class="col-10 offset-1">
          <nav class="navbar navbar-expand-lg bg-body-tertiary">
              <div class="container-fluid">
                  <img src="img/main-logo.svg" class="img-fluid logo" alt="logo">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                      data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02"
                      aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                      <ul class="navbar-nav nav-underline ms-auto mb-2 mb-lg-0">
                      
                      <li class="nav-item"> 
                      <a class="nav-link ' . ($page === 'inicio' ? 'active' : '') . '" href="index.php?p=inicio">Inicio</a> 
                    </li> ';

  if ($_SESSION['tipo_usuario'] !== 'admin') {
    echo '<li class="nav-item"> 
              <a class="nav-link ' . ($page === 'vehiculos/mis_vehiculos' ? 'active' : '') . '" href="index.php?p=vehiculos/mis_vehiculos">Mis vehículos</a> 
            </li> 
            <li class="nav-item"> 
              <a class="nav-link ' . ($page === 'perfil/perfil' ? 'active' : '') . '" href="index.php?p=perfil/perfil">Perfil</a> 
            </li>';
  } else {
    echo '<li class="nav-item"> 
  <a class="nav-link ' . ($page === 'admin/admin_vehiculos' ? 'active' : '') . '" href="index.php?p=admin/admin_vehiculos">Vehículos</a> 
</li> 
<li class="nav-item"> 
<a class="nav-link ' . ($page === 'admin/admin' ? 'active' : '') . '" href="index.php?p=admin/admin">Usuarios</a> 
</li>';
  }

  echo '<li class="nav-item ml"> 
                      <a class="nav-link ' . ($page === 'auth/actions/controlador_logout' ? 'active' : '') . '" href="index.php?p=auth/actions/controlador_logout">Cerrar sesión</a> 
                    </li> 
                  </ul> 
                      </ul>
                  </div>
              </div>
          </nav>
      </div>
  </div>';
} elseif ($navbarType === 'type2') {
  echo ' <div class="container-fluid"> <!-- nav bar home-->
  <div class="row bg-light">
      <div class="col-10 offset-1">
          <nav class="navbar navbar-expand-lg bg-body-tertiary">
              <div class="container-fluid">
                  <img src="img/main-logo.svg" class="img-fluid logo" alt="logo">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                      data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02"
                      aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                      <ul class="navbar-nav nav-underline ms-auto mb-2 mb-lg-0">
                      <li class="nav-item"> 
                      <a class="nav-link hidden ' . ($page === 'inicio' ? 'active' : '') . '" href="index.php?p=inicio">¿Quiénes somos?</a> 
                    </li> 
                    <li class="nav-item"> 
                      <a class="nav-link ' . ($page === 'vehiculos/mis_vehiculos' ? 'active' : '') . '" href="index.php?p=vehiculos/mis_vehiculos">Mis vehículos</a> 
                    </li> 
                    <li class="nav-item"> 
                      <a class="nav-link ' . ($page === 'perfil/perfil' ? 'active' : '') . '" href="index.php?p=perfil/perfil">Contacto</a> 
                    </li> 
                  </ul> 
                      </ul>
                  </div>
              </div>
          </nav>
      </div>
  </div>';
} elseif ($navbarType === 'type3') {
  echo ' <div class="container-fluid fondo-perfil"> <!-- extenseo, con foto-->
  <div class="row bg-light">
      <div class="col-12">
          <nav class="navbar navbar-expand-lg bg-body-tertiary">
              <div class="container-fluid">
                  <img src="img/main-logo.svg" class="img-fluid logo" alt="logo">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                      data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02"
                      aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                      <ul class="navbar-nav nav-underline ms-auto mb-2 mb-lg-0">
                      
                      <li class="nav-item"> 
                      <a class="nav-link ' . ($page === 'inicio' ? 'active' : '') . '" href="index.php?p=inicio">Inicio</a> 
                    </li> ';

  if ($_SESSION['tipo_usuario'] !== 'admin') {
    echo '<li class="nav-item"> 
              <a class="nav-link ' . ($page === 'vehiculos/mis_vehiculos' ? 'active' : '') . '" href="index.php?p=vehiculos/mis_vehiculos">Mis vehículos</a> 
            </li> 
            <li class="nav-item"> 
              <a class="nav-link ' . ($page === 'perfil/perfil' ? 'active' : '') . '" href="index.php?p=perfil/perfil">Perfil</a> 
            </li>';
  } else {
    echo '<li class="nav-item dropdown"> 
    <a class="nav-link dropdown-toggle" href="#" id="mantenedoresDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Mantenedores
  </a>
  <div class="dropdown-menu" aria-labelledby="mantenedoresDropdown">
    <a class="dropdown-item ' . ($page === 'admin/admin_vehiculos' ? 'active' : '') . '" href="index.php?p=admin/admin_vehiculos">Vehículos</a>
    <a class="dropdown-item ' . ($page === 'admin/admin' ? 'active' : '') . '" href="index.php?p=admin/admin">Usuarios</a>
    <a class="dropdown-item ' . ($page === 'admin/admin_tipo_usuario' ? 'active' : '') . '" href="index.php?p=admin/admin_tipo_usuario">Tipo usuario</a>
    <a class="dropdown-item ' . ($page === 'admin/admin_tipo_vehiculo' ? 'active' : '') . '" href="index.php?p=admin/admin_tipo_vehiculo">Tipo vehículo</a>
    <a class="dropdown-item ' . ($page === 'admin/admin_establecimientos' ? 'active' : '') . '" href="index.php?p=admin/admin_establecimientos">Establecimientos</a>
  </div>
</li>';
  }

  echo '<li class="nav-item ml"> 
                      <a class="nav-link ' . ($page === 'auth/actions/controlador_logout' ? 'active' : '') . '" href="index.php?p=auth/actions/controlador_logout">Cerrar sesión</a> 
                    </li> 
                  </ul> 
                      </ul>
                  </div>
              </div>
          </nav>
      </div>
  </div>';
} elseif ($navbarType === 'type4') {
  echo ' <div class="container-fluid">   <!-- arreglado-->
  <div class="row ">
    <div class="col-12">
      <nav class="navbar navbar-expand-lg bg-body-white">
        <div class="container-fluid">
          <img src="img/main-logo.svg" class="img-fluid logo " alt="logo">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav nav-underline ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link ' . ($page === 'inicio' ? 'active' : '') . '" href="index.php?p=inicio">Inicio</a>
              </li>';

  if ($_SESSION['tipo_usuario'] !== 'admin') {
    echo '<li class="nav-item">
              <a class="nav-link ' . ($page === 'vehiculos/mis_vehiculos' ? 'active' : '') . '" href="index.php?p=vehiculos/mis_vehiculos">Mis vehículos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link ' . ($page === 'perfil/perfil' ? 'active' : '') . '" href="index.php?p=perfil/perfil">Perfil</a>
            </li>';
  } else {
    echo '<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="mantenedoresDropdown" role="button" data-bs-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          Mantenedores
        </a>
        <div class="dropdown-menu" aria-labelledby="mantenedoresDropdown">
          <a class="dropdown-item ' . ($page === 'admin/admin_vehiculos' ? 'active' : '') . '" href="index.php?p=admin/admin_vehiculos">Vehículos</a>
          <a class="dropdown-item ' . ($page === 'admin/admin' ? 'active' : '') . '" href="index.php?p=admin/admin">Usuarios</a>
          <a class="dropdown-item ' . ($page === 'admin/admin_tipo_usuario' ? 'active' : '') . '" href="index.php?p=admin/admin_tipo_usuario">Tipo usuario</a>
          <a class="dropdown-item ' . ($page === 'admin/admin_tipo_vehiculo' ? 'active' : '') . '" href="index.php?p=admin/admin_tipo_vehiculo">Tipo vehículo</a>
          <a class="dropdown-item ' . ($page === 'admin/admin_establecimientos' ? 'active' : '') . '" href="index.php?p=admin/admin_establecimientos">Establecimientos</a>
        </div>
      </li>';
  }

  echo '<li class="nav-item ml">
                <a class="nav-link ' . ($page === 'auth/actions/controlador_logout' ? 'active' : '') . '" href="index.php?p=auth/actions/controlador_logout">Cerrar sesión</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </div>
</div>';
} elseif ($navbarType === 'type5') {

  echo ' <div class="container-fluid"> <!-- nav bar home-->
  <div class="row bg-light">
      <div class="col-10 offset-1">
          <nav class="navbar navbar-expand-lg bg-body-tertiary">
              <div class="container-fluid">
                  <img src="img/main-logo.svg" class="img-fluid logo" alt="logo">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                      data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02"
                      aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                      <ul class="navbar-nav nav-underline ms-auto mb-2 mb-lg-0">
                      <li class="nav-item"> 
                      <a class="nav-link hidden ' . ($page === 'inicio' ? 'active' : '') . '" href="index.php?p=inicio">¿Quiénes somos?</a> 
                    </li> 
                    <li class="nav-item"> 
                      <a class="nav-link ' . ($page === 'vehiculos/mis_vehiculos' ? 'active' : '') . '" href="index.php?p=vehiculos/mis_vehiculos">Mis vehículos</a> 
                    </li> 
                    <li class="nav-item"> 
                      <a class="nav-link ' . ($page === 'perfil/perfil' ? 'active' : '') . '" href="index.php?p=perfil/perfil">Contacto</a> 
                    </li> 
                  </ul> 
                      </ul>
                  </div>
              </div>
          </nav>
      </div>
  </div>';

}elseif ($navbarType === 'default') {
  echo ' <div class="row bg-light">  </div> <!-- nav bar vacio-->';
}




