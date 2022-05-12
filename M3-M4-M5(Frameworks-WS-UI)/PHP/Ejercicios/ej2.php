<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 2</title>
  </head>
  <body>
    <?php
    //2. Crear dos variables y sumarlas, mostrar el resultado.
    $num1 = 30;
    $num2 = 10;
    $resultado = $num1+$num2;
    echo 'El resultado de la suma de ' .$num1. ' mas '.$num2.' es igual a: '. $resultado;
    echo '<br>';
    $resultado = $num1-$num2;
    echo 'El resultado de la resta de ' .$num1. ' menos '.$num2.' es igual a: '. $resultado;
    echo '<br>';
    $resultado = $num1*$num2;
    echo 'El resultado de la multiplicación de ' .$num1. ' por '.$num2.' es igual a: '. $resultado;
    echo '<br>';
    $resultado = $num1/$num2;
    echo 'El resultado de la division de ' .$num1. ' entre '.$num2.' es igual a: '. $resultado;
    ?>
  </body>
</html>
