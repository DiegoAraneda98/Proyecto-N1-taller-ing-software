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
    <div class="container-fluid">
    <form action="añadir_contacto.php" method="post">
      <div class="row">
        <div class="col-4"></div>
          <input type="text" name="inombre" placeholder="Nombre" size="35%">
        <br>
        
        <input type="number" name="irut" placeholder="RUT" maxlength="9">
        <br>
        <input type="number" name="itelefono" placeholder="Telefono" maxlength="10">
        <br>
        <input type="email" name="icorreo" placeholder="Correo">
        <br>
        <div class="col-4">
          <h6>Interfaz:</h6>
          <br>
       <select name="interfaz" >
        <option value="Muy Buena">Muy Buena</option>
        <option value="Buena">Buena</option>
        <option value="Regular">Regular</option>
        <option value="Mala">Mala</option>
        <option value="Muy Mala">Muy Mala</option>
       </select>
       <br>
       <h6>Rapidez:</h6>
       <br>
       <select name="rapidez" >
        <option value="Muy Rapida">Muy Rapida</option>
        <option value="Rapida">Rapida</option>
        <option value="Regular">Regular</option>
        <option value="Lenta">Lenta</option>
        <option value="Muy Lenta">Muy Lenta</option>
       </select>
        </div>
      </div>
      <div class="row">
        <div class="col4">
          <textarea name="iSugerencia" cols="50" rows="10" placeholder="Sugerencia (500 Caracteres Maximo)" maxlength="500"></textarea>
        </div>
        <div class="col4"><button type="submit" class="btn btn-danger">Ennviar</button></div>
      </div>
    </form>
  
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>