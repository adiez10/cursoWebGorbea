<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 5</title>
  </head>
  <body>

    <?php
    //5. busca cualquier imagen y pon un img con la ruta de la imagen con PHP
    $ruta = "img/imagen.jpg";
    //echo $ruta;
    ?>
    <img src="<?php echo $ruta; ?>">
  </body>
</html>
