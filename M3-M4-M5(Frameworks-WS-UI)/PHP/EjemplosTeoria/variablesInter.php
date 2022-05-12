<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Programa idiomas PHP</title>
  </head>
  <body>
    <h1>PHP internacionalización</h1>
    <!-- action poner el nombre del fichero que recibira y procesara la información -->
    <form action="variablesInter.php" method="get">
      <button type="submit" name="lang" value="en">Inglés</button>
      <button type="submit" name="lang" value="es">Español</button>
    </form>
    <?php
      error_reporting(0);
      $idioma = $_GET['lang'];
      if(empty($idioma)){
        $idioma = "en";
      }
      $mensaje_es="Hola";
      $mensaje_en="Hello";
      $mensaje = "mensaje_".$idioma;
      echo $$mensaje;
    ?>
  </body>
</html>
