<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <?php
    require_once 'inc/functions.php';
    require_once 'mod/header.php';
    ?>
    <link href="css/estilos.css" rel="stylesheet" type= "text/css">
  </head>
  <body>
    <?php
    $login =false;
    if(!isset($_SESSION["loggedin"]) || ($_SESSION["loggedin"]) !==true){
      $login = false;
      echo "<script> window.location='index.php'; </script>";
    }else{
      $login = true;
    }

    $idUsuario = $_SESSION['id'];
    ?>
    <section class="sectionForm">
      <div class="info" style="text-align:center;">
        <h2>Insertar nuevo XYZ</h2>
        <form action="inc/validarForms.php" method="post">
          <input type="hidden" name="tipoForm" value="crear">
          <input type="hidden" name="idUsuario" value="<?php echo $idUsuario; ?>">
          <br>
          <label>Nombre:</label>
          <input type="text" name="nombre" class="form-control campoTexto" required>
          <label>Estilo:</label>
          <input type="text" name="estilo" class="form-control campoTexto" required>
          <label>Año creación:</label>
          <input type="number" name="anio" class="form-control campoTexto" required>
          <div class="form-group">
            <label for="descripTextArea">Descripción:</label>
            <textarea class="form-control areatexto" id="descripTextArea"
              name="descripTextArea" rows="4" required>
            </textarea>
          </div>
          <label>Nota:</label><br>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="radioValorar" id="radioValorar0" value="0" required>
						<label class="form-check-label" for="radioValorar0">0</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="radioValorar" id="radioValorar1" value="1">
						<label class="form-check-label" for="radioValorar1">1</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="radioValorar" id="radioValorar2" value="2">
						<label class="form-check-label" for="radioValorar2">2</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="radioValorar" id="radioValorar3" value="3">
						<label class="form-check-label" for="radioValorar3">3</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="radioValorar" id="radioValorar4" value="4">
						<label class="form-check-label" for="radioValorar4">4</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="radioValorar" id="radioValorar5" value="5">
						<label class="form-check-label" for="radioValorar5">5</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="radioValorar" id="radioValorar6" value="6">
						<label class="form-check-label" for="radioValorar6">6</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="radioValorar" id="radioValorar7" value="7">
						<label class="form-check-label" for="radioValorar7">7</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="radioValorar" id="radioValorar8" value="8">
						<label class="form-check-label" for="radioValorar8">8</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="radioValorar" id="radioValorar9" value="9">
						<label class="form-check-label" for="radioValorar9">9</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="radioValorar" id="radioValorar10" value="10">
						<label class="form-check-label" for="radioValorar10">10</label>
					</div>

          <div class="form-group">
            <label for="comentarioTextArea">Escribe tu comentario:</label>
            <textarea class="form-control areatexto" id="comentarioTextArea"
              name="comentarioTextArea" rows="3" required>
            </textarea>
          </div>
          <button type="submit" class="btn btn-primary">Crear</button>
          <a href="index.php" class="btn btn-primary abutton">Volver</a>
        </form>

      </div>
    </section>
  </body>
  <?php
    require_once 'mod/footer.php';
  ?>
</html>
