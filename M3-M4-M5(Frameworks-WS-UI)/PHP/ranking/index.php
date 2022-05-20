<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <?php
      require_once 'mod/header.php';
    ?>
    <link href="css/estilos.css" rel="stylesheet" type= "text/css">
  </head>
  <body>

    <section id="sectionid">
      <div class="addArticulo">
        <h2>Los mejores XYZ</h2>
        <button class="btn btn-primary">
          <a href="#">Añadir XYZ</a>
        </button>
      </div>

      <div class="grid-container">
        <div class="celdaRank"><h3>1º</h3></div>
        <div class="celdaNota"><h2 class="h2Nota">9.5</h2></div>
        <div class="celdaNombreGrupo"><h4>LA MODA</h4></div>
        <div class="celdaNombreEstilo"><p>Folk-Rock</p></div>
        <div class="celdaAnho"><p>2010</p></div>
        <div class="celdaBoton">
          <button class="btn btn-secondary">
            <a href="#">Valorar</a>
          </button>
        </div>
        <div class="celdaDescripTitle">
          <h5 class="description">Descripción</h5>
        </div>
        <div class="celdaDescrip">
          <p class="description">
            Lorem ipsum tralali Lorem ipsum tralali Lorem ipsum tralali
          </p>
        </div>
      </div>
    </section>

  </body>
  <?php
    require_once 'mod/footer.php';
  ?>
</html>
