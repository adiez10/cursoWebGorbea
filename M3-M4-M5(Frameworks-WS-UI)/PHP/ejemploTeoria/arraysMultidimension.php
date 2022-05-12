<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Probando arrays multidimensionales</title>
  </head>
  <body>
    <h1>Array multidimensionales</h1>
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

    echo $booksMulti[2]['title'];

    ?>
  </body>
</html>
