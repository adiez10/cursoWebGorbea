<html>
<body>
  <table border = 0 cellpadding = 3>
    <tr>
      <td bgcolor = "#CCCCCC" align = center>Distancia</td>
      <td bgcolor = "#CCCCCC" align = center>Coste</td>
    </tr>
    <?php
    $dis = 50;
    while ($dis <= 250 )
    {
      echo "<tr>\n <td align = right>$dis</td>\n";
      echo " <td align = right>". $dis / 10 ."</td>\n</tr>\n";
      $dis += 50;//$dis=dis+50;
    }

    for($distance = 50; $distance <= 250; $distance += 50)
    {
      echo "<tr>\n <td align = right>$distance</td>\n";
      echo " <td align = right>". $distance / 10 ."</td>\n</tr>\n";
    }

    ?>

  </table>
</body>
</html>
