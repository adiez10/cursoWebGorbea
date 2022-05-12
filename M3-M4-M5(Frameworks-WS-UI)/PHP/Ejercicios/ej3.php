<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 3</title>
  </head>
  <body>
    <?php
    //3. Muestra los números del 1 al 10 en linea.
    echo 'Del 1 al 10 con bucle while<br>';
    $var = 1;
    while($var<=10){
      echo $var.'<br>';
      $var++;
    }

    echo '<br>Del 1 al 10 con bucle for<br>';
    for($i=1;$i<=10;$i++){
      echo 'número: '.$i.'<br>';
    }

    echo '<br>Números pares del 0 al 20<br>';
    for($i=0;$i<=20;$i=$i+2){
      echo 'número: '.$i.'<br>';
    }

    echo '<br>Números impares del 0 al 20<br>';
    for($i=1;$i<=20;$i=$i+2){
      echo 'número: '.$i.'<br>';
    }
    ?>
  </body>
</html>
