<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 2 con funciones</title>
  </head>
  <body>
    <?php
    //2. Crear dos variables y sumarlas, mostrar el resultado.
    function suma($x, $y)
    {
      $s = $x + $y;
      return $s;
    }
    function resta($x, $y)
    {
      $s = $x - $y;
      return $s;
    }
    function multiplica($x, $y)
    {
      $s = $x * $y;
      return $s;
    }
    function divide($x, $y)
    {
      $s = $x / $y;
      return $s;
    }

    $num1 = 30;
    $num2 = 10;
    echo 'El resultado de la suma de ' .$num1. ' mas '.$num2.' es igual a: '. suma($num1,$num2);
    echo '<br>';
    echo 'El resultado de la resta de ' .$num1. ' menos '.$num2.' es igual a: '. resta($num1,$num2);
    echo '<br>';
    echo 'El resultado de la multiplicación de ' .$num1. ' por '.$num2.' es igual a: '. multiplica($num1,$num2);
    echo '<br>';
    echo 'El resultado de la división de ' .$num1. ' entre '.$num2.' es igual a: '. divide($num1,$num2);
    echo '<br>';
    ?>
  </body>
</html>
