<?php
require __DIR__ . '/../../modelo/conexion.php';
require __DIR__ . '/../auth/actions/controlador_login.php';

$id_usuario = $_SESSION['id_usuario'];
$consulta = "SELECT * FROM usuarios WHERE id_usuario = '$id_usuario'";
$resultado = mysqli_query($conexion, $consulta);

if ($row = mysqli_fetch_array($resultado)) {
    $id = $row["id_usuario"];
    $rut = $row["run"];
    $nombre = $row["nombre"];
    $apellido = $row["apellido"];
    $correo = $row["correo"];
    $telefono = $row["telefono"];
    $contraseña = $row["contraseña"];
}
?>

<div class="container-fluid ">
    <div class="row  text-center bg_edit full-height-row ">

        <div class="col-2 d-flex align-items-start justify-content-center p-3 rojo " style="height: auto;">
            <div class="nav flex-column nav-pills me-3 " id="v-pills-tab" role="tablist" aria-orientation="vertical">

                <button class="nav-link btn btn-custom active mt-3 " id="v-pills-home-tab" data-bs-toggle="pill"
                    data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                    aria-selected="true">Informacion personal</button>

                <button class="nav-link btn btn-custom mt-3" id="v-pills-profile-tab" data-bs-toggle="pill"
                    data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile"
                    aria-selected="false">Contraseña</button>

                <button class="nav-link btn btn-custom mt-3" id="v-pills-messages-tab" data-bs-toggle="pill"
                    data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages"
                    aria-selected="false">Contacto</button>

                <button class="nav-link btn btn-custom mt-3" id="v-pills-settings-tab" data-bs-toggle="pill"
                    data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings"
                    aria-selected="false">No se</button>
            </div>
        </div>

        <div class="col-10">
            <div class="h2 mi_perfil text-start">Mi perfil</div>

            <div class="row bg_edit"> <!-- linea divisora -->
                <div class="col-12">
                    <hr class="border border-danger border-1 opacity-50">
                </div>
            </div>
            
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                    aria-labelledby="v-pills-home-tab" tabindex="0">
                    <?php include('informacion_personal.php'); ?>
                </div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"
                    tabindex="0">
                    <?php include('contraseña.php'); ?>
                </div>

                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"
                    tabindex="0">
                    <?php include('contacto.php'); ?>
                </div>
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab"
                    tabindex="0">
                    extra
                </div>
            </div>
        </div>
    </div>
</div>