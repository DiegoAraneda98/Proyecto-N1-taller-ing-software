<!-- Modal -->
<div class="modal fade" id="editarDatos" tabindex="-1" aria-labelledby="editarDatosLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editarDatosLabel">Editar Datos</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="#" method="post" enctype="multipart/form-data">

          <div class="mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required>
          </div>

          <div class="mb-3">
              <label for="apellido" class="form-label">Apellido:</label>
              <input type="text" name="apellido" id="apellido" class="form-control" required>
          </div>

          <div class="mb-3">
              <label for="correo" class="form-label">E-Mail:</label>
              <input type="text" name="correo" id="correo" class="form-control" required>
          </div>
          
          <div class="mb-3">
              <label for="telefono" class="form-label">Teléfono:</label>
              <input type="text" name="telefono" id="telefono" class="form-control" required>
          </div>
          <input type="hidden" id ="idUsuario" class="form-control">

          <div class="d-flex justify-content-end">
            <a href="" id="save"class="btn btn-danger rojo btn-1" >Guardar</a>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>