<?php
if($_POST["valor1"]!="" && $_POST["valor2"]!=""){
  $operador1 = $_POST["valor1"];
  $operador2 = $_POST["valor2"];
  if($_POST["operador"]=="suma"){
    $resultado = $operador1+$operador2;
    echo 'La suma de '.$operador1.'+'.$operador2.'='.$resultado;
    print("<br><br><a href='calculadora.php'>VOLVER</a>");
  }elseif($_POST["operador"]=="resta"){
    $resultado = $operador1-$operador2;
    echo 'La resta de '.$operador1.'-'.$operador2.'='.$resultado;
    print("<br><br><a href='calculadora.php'>VOLVER</a>");
  }elseif($_POST["operador"]=="multiplicacion"){
    $resultado = $operador1*$operador2;
    echo 'La multiplicacion de '.$operador1.'x'.$operador2.'='.$resultado;
    print("<br><br><a href='calculadora.php'>VOLVER</a>");
  }elseif ($_POST["operador"]=="division") {
    $resultado = $operador1/$operador2;
    //echo $resultado;
    echo 'La division de '.$operador1.'/'.$operador2.'='.$resultado;
    print("<br><br><a href='calculadora.php'>VOLVER</a>");
  }else{
    print("Operador no detectado");
    print("<br><br><a href='calculadora.php'>VOLVER</a>");
  }
}else{
  print("Ingrese algún valor en los dos operandos");
  print("<br><br><a href='calculadora.php'>VOLVER</a>");
}

?>
