<?php
session_start();

if (isset($_SESSION['run'])) {
    // Destruye la sesión si existe
    session_destroy();
    header("Location: ../login_page.php");
} else {
    // Redirige al usuario a la página de inicio de sesión si no está autenticado
    header("Location: ../login_page.php");
}
?>