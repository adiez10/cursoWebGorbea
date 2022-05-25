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

  $idarticulo = htmlspecialchars($_GET['idarticulo']);
  $articuloTable = new Articulo();
  $articuloTable->ID = $idarticulo;
  $infoArticulo = $articuloTable->getData();

  $valoracionTable = new Valoracion();
  $valoracionTable->ID = $idarticulo;
  $comentarios = $valoracionTable->getComentarios();

  $idUsuario = $_SESSION['id'];
  ?>
  <section class="sectionForm">
    <div class="info" style="text-align:center;">
      <h2><?php echo $infoArticulo[0]['nombre']; ?></h2>

      <form action="inc/validarForms.php" method="post">
        <input type="hidden" name="tipoForm" value="valorar">
        <input type="hidden" name="idArticulo" value="<?php echo $idarticulo;?>">
        <input type="hidden" name="idUsuario" value="<?php echo $idUsuario;?>">

        <div class="form-check form-check-inline">
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


    <h5 style="margin:10px;">Comentarios de otros usuarios</h5>

    <div class="description">
      <p>Comentario1: Aqui van los comentarios de los usuarios este es un comentario 1</p>
    </div>
    <hr>
    <div class="description">
      <p>Comentario2: Aqui van los comentarios de los usuarios este es un comentario 2</p>
    </div>
  </div>
</section>
</body>
</html>
