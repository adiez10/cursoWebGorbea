<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Programa en PHP</title>
</head>
<body>
  <h1>Probando PHP</h1>
  <?php
    define ('CONSTANTE', 'Esto es una constante');
    $variable = 5.3;
    $variable2 = 8;
    $variableTexto1= "Hola";
    $variableTexto2 = "Adios";
    $variableConjuncion = " y ";
    print CONSTANTE;
    print "<br>El valor es: " . $variable . "<br>";
    print "El valor2 es: $variable2<br>"; // ojo: comillas dobles
    echo "Suma: ".$variable+$variable2. "<br>";
    echo "Resta: ".$variable-$variable2. "<br>";
    echo "Producto: ".$variable*$variable2. "<br>";
    echo "División: ".$variable/$variable2. "<br>";
    echo $variableTexto1 . " y " .$variableTexto2 . "<br>";
    echo $variableTexto1 . $variableConjuncion .$variableTexto2;
  ?>
</body>
</html>
