<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Probando arrays multidimensionales</title>
</head>
<body>
  <h1>Array multidimensionales bucle FOR</h1>
  <?php
  $booksMulti = array(
    array('title'=>'php manual','editor'=>'Xeeer','author'=>'Aitor'),
    array('title'=>'perl manual','editor'=>'Yelmo','author'=>'Barbara'),
    array('title'=>'C manual','editor'=>'Zeta','author'=>'Cesar'),
    array('title'=>'HTML manual','editor'=>'Blabla','author'=>'Javier'),
    array('title'=>'El quijote','editor'=>'Planeta','author'=>'Cervantes')
  );

  for($j=0; $j<count($booksMulti);$j++){
    echo $j.'-st book, titulo: ' .$booksMulti[$j]['title'];
    echo ' | Autor: '.$booksMulti[$j]['author'];
    echo ' | Editor: '.$booksMulti[$j]['editor'];
    echo '<br>';
  }
  //imprime el titulo del array que está en la posición 2
  echo $booksMulti[2]['title'];
  ?>
  <h1>Array multidimensionales bucle FOREACH</h1>
  <?php
  foreach ($booksMulti as $row) {
    echo '<br>';
    echo 'Titulo: '.$row['title'];
    echo ' Autor: '.$row['author'];
    echo ' Editor: '.$row['editor'];
  }
  ?>
</body>
</html>
