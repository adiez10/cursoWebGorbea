<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Probando bucle en arrays</title>
  </head>
  <body>
    <h1>Probando bucle foreach en arrays</h1>
    <?php
      $color = array ('rojo'=>101, 'verde'=>51, 'azul'=>255);
      foreach ($color as $valor) {
        echo 'Valor: '.$valor. '<br>';
      }
      echo '<br>';
      foreach ($color as $clave=>$valor) {
        echo 'Clave:' . $clave;
        echo ' Valor:' . $valor;
        echo '<br>';
      }
    ?>

    <h1>Probando bucle for en arrays</h1>
    <?php
      $books3 = array( 'php manual','perl manual','C manual');
      echo 'Tamaño del array: '.count($books3);
      for($i=0; $i < count($books3);$i++){
        echo '<br>';
        print ($i+1)."-st book of my library: $books3[$i]";
      }
    ?>

  </body>
</html>
