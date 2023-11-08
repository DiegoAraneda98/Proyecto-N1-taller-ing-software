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
    <form>
  <div class="row mb-3">
    <label for="inputnombre" class="col-sm-2 col-form-label">Nombre: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputnombre">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputRut" class="col-sm-2 col-form-label">RUT:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputrut">
    </div>
    <div class="row mb-3">
    <label for="inputCorreo" class="col-sm-2 col-form-label">E-Mail:</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputema">
    </div>
     <div class="row mb-3">
    <label for="inputTele" class="col-sm-2 col-form-label">Telefono:</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="inputtel">
    </div>
     <div class="row mb-3">
    <label for="inputSug" class="col-sm-2 col-form-label">Sugerencias:</label>
    <div class="col-sm-10">
      <textarea name="tasug" id="inputsuge" cols="50" rows="10" maxlength="500"></textarea>
    </div>
  </div>
  
  <div class="row mb-3">
    <div class="col-sm-10 offset-sm-2">
      <div class="form-check">
        Interfaz:
        <Select id="interfaz">
        <option value="Muy Buena">Muy buena</option>
        <option value="Buena">Buena</option>
         <option value="Neutral">Neutral</option>
        <option value="Mala">Mal</option>
        <option value="Muy Mala">Muy Mala</option>
        </Select>
         Velocidad Reaccion:
         <Select id="rapidez">
        <option value="Muy Rapida">Muy Rapida</option>
        <option value="Rapida">Rapida</option>
         <option value="Neutral">Neutral</option>
        <option value="Lenta">Lenta</option>
        <option value="Muy Lenta">Muy Lenta</option>
        </Select>
        </label>
      </div>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
  <button disabled="disabled">Borrar</button>
  
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>