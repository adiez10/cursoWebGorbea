<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Probando Arrays</title>
  </head>
  <body>
    <h1>Probando arrays 1</h1>
    <?php
      $books = array( 0=>'php manual',1=>'perl manual',2=>'C manual', 3=>'Manual HTML');
      echo '<p style="font-size:40px">'.$books[2].'</p>'; //output: C manual
      echo '<br>';
      echo $books[3];
      echo '<br>';
    ?>
    <h1>Probando arrays 2</h1>
    <?php
      $color = array ('rojo'=>101, 'verde'=>51, 'azul'=>255);
      echo $color['verde'];
      echo '<br>';
      $medidas = array (10, 25, 15);
      echo $medidas[2];
      echo '<br>';
    ?>
    <h1>Probando arrays 3</h1>
    <?php
      $books2 = array( 'php manual'=>870,'perl manual'=>125,'C manual'=>458);
      echo $books2['php manual'].'<br>';
      $books2["php manual"] = 75;
      echo $books2['php manual'].'<br>';
      $books2['Libro HTML']=980;
      echo $books2['Libro HTML'].'<br>';
    ?>
  </body>
</html>
