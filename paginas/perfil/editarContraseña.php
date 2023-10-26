<!-- Modal -->
<div class="modal fade" id="editarContraseña" tabindex="-1" aria-labelledby="editarContraseñaLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editarContraseñaLabel">Editar Contraseña</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="guarda.php" method="post" enctype="multipart/form-data">

            <div class="mb-3">
                <label for="contraseña" class="form-label">Nueva Contraseña:</label>
                <input type="text" name="contraseña" id="contraseña" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="nuevaContraseña" class="form-label">Repita la nueva contraseña:</label>
                <input type="text" name="nuevaContraseña" id="nuevaContraseña" class="form-control" required>
            </div>

            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-danger rojo btn-1">Guardar</button>
                <button type="button" class="btn btn-secondary btn-2" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>