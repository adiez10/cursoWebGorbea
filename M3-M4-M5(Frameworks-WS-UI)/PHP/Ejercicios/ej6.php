<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 6</title>
  </head>
  <body>
    <select>
    <?php
    //6. Crea un select en HTML y metele los números del 1 al 100 como opciones.
    for($i=1;$i<=100;$i++){
      echo '<option value='.$i.'>'.$i.'</option>';
    }
    ?>
  </select>
  </body>
</html>
