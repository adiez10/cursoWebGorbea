<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Calculadora</title>
  </head>
  <body>
    <h1>CALCULADORA</h1>
    <form action="resultado.php" method="post">
      <select name="operador">
        <option value="suma">SUMA</option>
        <option value="resta">RESTA</option>
        <option value="multiplicacion">MULTIPLICACIÓN</option>
        <option value="division">DIVISIÓN</option>
      </select>
      <p>Ingresa tu primer número:*</p>
      <input type="number" name="valor1" required>
      <p>Ingresa tu segundo número:*</p>
      <input type="number" name="valor2" required>
      <br>  <br>
      <input type="reset" value="Borrar">
      <input type="submit" value="Calcular">
    </form>
  </body>
</html>
