
<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <h3>Probando funciones propias</h3>
  <?php
  function suma ($x, $y)
  {
    $s = $x + $y;
    return $s;
  }

  function multiplica ($x, $y)
  {
    $s = $x * $y;
    return $s;
  }

  $a=140;
  $b=210;
  $c = suma ($a, $b);
  $d = multiplica($a,$b);
  print $c;
  echo '<br>';
  print $d;
  ?>
  <h3>Probando funciones de PHP</h3>
  <?php
    $entero = 43;
    echo gettype($entero).'<br/>'; // muestra integer
    settype($entero,'double');  // Lo cambia a double
    echo gettype($entero).'<br />'; // muestra double
    settype($entero,'string');  // Lo cambia a string
    echo gettype($entero).'<br />'; // muestra string
  ?>
</body>
</html>
