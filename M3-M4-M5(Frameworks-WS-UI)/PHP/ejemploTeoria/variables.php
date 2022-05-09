<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Mi primer programa en PHP</title>
  </head>
  <body>
    <h1>Probando PHP ejemplo 1</h1>
    <?php

       $mensaje_es="Hola";
       $mensaje_en="Hello";
       $idioma = "es";
       $mensaje = "mensaje_" . $idioma;
       print $$mensaje;
    ?>

  </body>
</html>
