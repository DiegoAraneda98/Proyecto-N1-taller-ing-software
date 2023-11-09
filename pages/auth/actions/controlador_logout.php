<?php


if (isset($_SESSION['run'])) {
    // Destruye la sesión si existe
    session_destroy();
    header("Location: index.php?p=auth/login");
} else {
    // Redirige al usuario a la página de inicio de sesión si no está autenticado
    header("Location: index.php?p=auth/login");
}
?>