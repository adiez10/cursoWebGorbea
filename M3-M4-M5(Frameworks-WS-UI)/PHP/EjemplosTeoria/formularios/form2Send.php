<html>
<head>
  <title>Bob’s Auto Parts – Order questions</title>
</head>
<body>
  <form action="form2Receive.php" method="post">
    <table border="0">
      <tr bgcolor="#cccccc">
        <td width="150">Item</td>
        <td width="15">Quantity</td>
      </tr>
      <tr>
        <td>Llantas</td>
        <td align="center">
          <input type="number" name="tireqty" size="3" maxlength="3">
        </td>
        </tr>
        <tr>
          <td>Aceite</td>
          <td align="center">
            <input type="number" name="oilqty" size="3" maxlength="3">
          </td>
        </tr>
        <tr>
          <td>Bujías</td>
          <td align="center">
            <input type="number" name="sparkqty" size="3" maxlength="3">
          </td>
          </tr>
          <tr>
            <td>How did you find Bob's?</td>
            <td><select name="find">
              <option value = "a">I'm a regular customer</option>
              <option value = "b">TV advertising</option>
              <option value = "c">Phone directory</option>
              <option value = "d">Word of mouth</option>
            </select>
          </td>
        </tr>
        <tr>
          <td colspan="2" align="center">
            <input type="submit" value="Submit Order">
          </td>
        </tr>
      </table>
    </form>
  </body>
  </html>
