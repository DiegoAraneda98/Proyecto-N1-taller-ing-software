<!-- Modal -->
<div class="modal fade" id="editarContraseña" tabindex="-1" aria-labelledby="editarContraseñaLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editarContraseñaLabel">Editar Contraseña</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="#" method="post">

            <div class="mb-3">
                <label for="contraseña" class="form-label">Nueva Contraseña:</label>
                <div class="input-group mt-2">
                                <input id="input"type="password" class="form-control rounded-0" value="" aria-label="Recipient's username"
                                    aria-describedby="button-addon2" readonly>
                                <button class="btn btn-secondary" type="button" id="eye"><i class="bi bi-eye"></i></button>
                            </div>
            </div>

            <div class="mb-4">
                <label for="nuevaContraseña" class="form-label">Repita la nueva contraseña:</label>
                <div class="input-group mt-2">
                                <input id="input"type="password" class="form-control rounded-0" value="" aria-label="Recipient's username"
                                    aria-describedby="button-addon2" readonly>
                                <button class="btn btn-secondary" type="button" id="eye"><i class="bi bi-eye"></i></button>
                            </div>
            </div>

            <input type="hidden" id ="idUsuario" class="form-control">

            <div class="d-flex justify-content-end">
                <a href="" id="save-password"class="btn btn-danger rojo btn-1" >Guardar</a>
                <button type="button" class="btn btn-secondary btn-2" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

