<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Programa en PHP</title>
  </head>
  <body>
    <h1>Probando PHP</h1>
	<form action="variablesInternacionalizacion.php" method="get">	  
		<button name="lang" value="es" type="submit">Español</button>
		<button name="lang" value="en" type="submit">Inglés</button>
    </form>
    <?PHP
        error_reporting(0);
        $idioma = $_GET["lang"];
        if(empty($idioma)){
          $idioma="es";
        }
       $mensaje_es="Hola";
       $mensaje_en="Hello";
       //$idioma = "es";
       $mensaje = "mensaje_" . $idioma;
       print $$mensaje;
    ?>

  </body>
</html>
