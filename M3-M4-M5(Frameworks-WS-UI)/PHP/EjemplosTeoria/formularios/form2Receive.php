<html>
<head>
  <title>Bob's Auto Parts – Order Results</title>
</head>
<body>
  <h1>Bob's Auto Parts – Order Results</h1>
  <h2>Order Results</h2>
  <?php
  $tireqty = $_POST['tireqty'];
  $oilqty = $_POST['oilqty'];
  $sparkqty = $_POST['sparkqty'];
  $find = $_POST['find'];

  switch($find)
  {
    case 'a':
      echo '<p>Regular customer.</p>';
    break;
    case 'b':
      echo '<p>Customer referred by TV advert.</p>';
    break;
    case 'c':
      echo '<p>Customer referred by phone directory.</p>';
    break;
    case 'd':
      echo '<p>Customer referred by word of mouth.</p>';
    break;
    default :
      echo '<p>Do not know how this customer found us.</p>';
    break;
  }

  $totalqty = 0;
  $totalqty = $tireqty+$oilqty+$sparkqty;
  if($totalqty==0){
    echo '<font color=red>';
    echo 'No seleccionaste ningún articulo en la página anterior<br>';
    echo '</font>';
    echo '<br><a href="form2Send.php">VOLVER</a>';
  }else{
    echo "<p>Order processed.</p>";
    echo '<p>Your order is as follows: </p>';
    echo $tireqty. ' llantas <br />';
    echo $oilqty. ' botellas de aceite <br />';
    echo $sparkqty. ' bujias <br />';
    echo 'Items totales pedidos: '.$totalqty.'<br>';

    $totalamount = 0.0;

    define('TIREPRICE',100);
    define('OILPRICE',10);
    define('SPARKPRICE',4);

    $totalamount = ($tireqty*TIREPRICE)+($oilqty*OILPRICE)+($sparkqty*SPARKPRICE);

    echo 'subtotal: '.number_format($totalamount,2). ' € <br>';

    $taxrate = 0.07;
    $totalamount = $totalamount * ( 1 + $taxrate);
    echo 'Precio total con tasas '.number_format($totalamount,2). ' € <br>';
  }

  ?>

</body>
</html>
