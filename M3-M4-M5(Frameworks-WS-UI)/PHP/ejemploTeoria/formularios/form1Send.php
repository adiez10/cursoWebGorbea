<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Probando formularios</title>
  </head>
  <body>
    <h1>Prueba con formularios ENVIANDO</h1>
    <form action="form1Receive.php" method="POST">
      Edad: <input type="number" name="edad">
      <br>
      Color Favorito: <input type="color" name="color">
      <br>
      Fecha nacimiento: <input type="date" name="fechan">
      <br>
      Email: <input type="email" name="correo">
      <br>
      <input type="submit" value="Enviar">
   </form>
  </body>
</html>
