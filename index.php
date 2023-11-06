<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Encuesta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="disnio.css">
  </head>
  <body>
    <div class="container-fluid fondo">
    <form action="añadir_contacto.php" method="post">  
    <div class="row">
       
        <div class="col-md-4">
          <h1>Encuesta:</h1>
            Nombre:
            <input type="text" name="Nombre" id="">
            <br>
            RUT:
            <input type="text" name="Rut" id="">
            <br>
            correo:
            <input type="email" name="correo" id="">
            <br>
            Telefono:
            <input type="text" name="Telefono" id="">
            <br>
            <br>
            Sujerencia:
            <br>
            <textarea name="sug" id="suge" cols="55" rows="4"></textarea>
        </div>
          <div class="row">
          <div class="col-md-4">
          Interfaz:
          <select  id="inter" class="form-control">
            <option value="5">Muy Buena</option>
            <option value="4">Buena</option>
            <option value="3">Regular</option>
            <option value="2">Mala</option>
            <option value="1">Muy Mala Mala</option>

          </select>
          Velocidad de respuesta:
          <select  id="vel" class="form-control">
            <option value="5">Muy Rapida</option>
            <option value="4">Rapida</option>
            <option value="3">Regular</option>
            <option value="2">Lenta</option>
            <option value="1">Lenta</option>

          </select>
          <div class="col-md-12">
          <button type="button" class="btn btn-info" id="saveForm" onclick="saveForm">Guardar Encuesta</button>
        <button type="button" class="btn btn-danger" id="clearForm">Limpiar formulario</button>
          </div>
          </div>
        </div>
       </form>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>