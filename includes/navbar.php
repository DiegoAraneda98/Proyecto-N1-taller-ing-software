<?php
$page = isset($_GET['p']) ? $_GET['p'] : '';
require($_SERVER['DOCUMENT_ROOT'] . '/xampp/Proyecto-N1-taller-ing-software/pages/auth/actions/controlador_login.php');


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
  echo ' <div class="container-fluid">
  <div class="row">
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
} elseif ($navbarType === 'type4') {
  echo ' <nav class="navbar bg-body-tertiary fixed-left">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Offcanvas navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
</nav>';
}elseif ($navbarType === 'default') {
  echo ' <div class="row bg-light">  </div> <!-- nav bar vacio-->';
}

