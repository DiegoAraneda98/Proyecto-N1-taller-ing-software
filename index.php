<?php
// Pequeña lógica para capturar la página que queremos abrir
$pagina = isset($_GET['p']) ? strtolower($_GET['p']) : 'login_page';

// El fragmento de html que contiene la cabecera de nuestra web
if ($pagina !== 'login_page' && $pagina !== 'register_page') {
    require_once 'includes/header.php';
}else {
    require_once 'includes/header_1.php'; 
}


require_once 'pages/' . $pagina . '.php';

if ($pagina !== 'login_page' && $pagina !== 'register_page'  && $pagina !== 'perfil') {
   
    require_once 'includes/footer.php';

}else {
    
    require_once 'includes/footer_1.php';

}

?>