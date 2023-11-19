<?php

// Pequeña lógica para capturar la pagina que queremos abrir
$pagina = isset($_GET['p']) ? strtolower($_GET['p']) : 'home';
$navbarType = 'default';
$footerType = 'default';

$currentUrl = $_SERVER['REQUEST_URI'];

// Verifica si la URL contiene 'admin'
if (strpos($currentUrl, 'admin') !== false) {
    $navbarType = 'type3';
}

switch ($pagina) {
    case 'inicio':
        $navbarType = 'type1';
        break;

    case 'home':
        $navbarType = 'type2';
        break;

    case 'vehiculos/mis_vehiculos':
        $navbarType = 'type3';
        break;

    case 'perfil/perfil':
        $navbarType = 'type3';
        break;


    case 'guardia/vista_guardia':
        $navbarType = 'type5';
        break;
}

switch ($pagina) {
    case 'home':
        $footerType = 'type1';
        break;
    case 'login':
        $footerType = 'type2';
        break;
    case 'register':
        $footerType = 'type2';
        break;
    case 'inicio':
        $footerType = 'type1';
        break;

    case 'perfil/perfil':
        $footerType = 'type2';
        break;
}

// El fragmento de html que contiene la cabecera de nuestra web

require_once 'includes/header.php';


/* Estamos considerando que el parámetro enviando tiene el mismo nombre del archivo a cargar, si este no fuera así
    se produciría un error de archivo no encontrado */
require_once 'pages/' . $pagina . '.php';

// Otra opción es validar usando un switch, de esta manera para el valor esperado le indicamos que página cargar


// El fragmento de html que contiene el pie de página de nuestra web
require_once 'includes/footer.php';
