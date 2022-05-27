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
      }else{
        $login = true;
      }
    ?>

    <section id="sectionid">
      <div class="addArticulo">
        <h2>Los mejores grupos musicales</h2>
        <?php
        if($login === true){
          echo '<a href="crearForm.php">
                  <button class="btn btn-primary">
                    Añadir grupo
                  </button>
                </a>';
        }else{
          echo '<a href="login/login.php">
                  <button class="btn btn-primary boton-deshabilitado">
                    Añadir grupo
                  </button>
                </a>';
        }
        ?>
      </div>

      <?php
      $articuloTable = new Articulo();
      $elementosList = $articuloTable->getAllInfoOrderNota();
      $rank = 1;
      foreach ($elementosList as $elemento) {

      ?>

      <div class="grid-container">
        <div class="celdaRank"><h3><?php echo $rank; ?>º</h3></div>
        <div class="celdaNota"><h2 class="h2Nota"><?php echo $elemento['notageneral'] ?></h2></div>
        <div class="celdaNombreGrupo"><h4><?php echo $elemento['nombre'] ?></h4></div>
        <div class="celdaNombreEstilo"><p><?php echo $elemento['param1'] ?></p></div>
        <div class="celdaAnho"><p><?php echo $elemento['param2'] ?></p></div>
        <div class="celdaBoton">
          <?php
          if($login === true){
            $idarticulo = $elemento['id'];
            echo '<button class="btn btn-secondary">
                    <a href="valorarForm.php?idarticulo='.$idarticulo.'">Valorar</a>
                  </button>';
          }else{
            echo '<button class="btn btn-secondary boton-deshabilitado">
                    <a href="login/login.php">Valorar</a>
                  </button>';
          }
          ?>
        </div>
        <div class="celdaDescripTitle">
          <h5 class="description">Descripción</h5>
        </div>
        <div class="celdaDescrip">
          <p class="description">
            <?php echo $elemento['descrip'] ?>
          </p>
        </div>
      </div>
      <?php
      $rank++;
    }
       ?>
    </section>

  </body>
  <?php
    require_once 'mod/footer.php';
  ?>
</html>

<script>
$(window).on("load", resaltar);
function resaltar(jQuery){
  $("#sectionid").show(1000);
}
</script>
