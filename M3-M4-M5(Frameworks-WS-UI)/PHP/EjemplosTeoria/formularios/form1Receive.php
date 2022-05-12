<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Probando formularios recibir</title>
  </head>
  <body>
    <h1>Prueba con formularios RECIBIENDO</h1>
    <?php
      $edad = $_POST["edad"];
      echo "La edad es:". $edad."<br>";
      $color = $_POST["color"];
      echo "El color es:". $color."<br>";
      $fechaN = $_POST["fechan"];
      echo "La fecha es:". $fechaN."<br>";
      $email = $_POST["correo"];
      echo "El email es:". $email."<br>";
    ?>
  </body>
</html>
