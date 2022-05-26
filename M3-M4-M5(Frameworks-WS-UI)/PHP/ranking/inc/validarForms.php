<?php
include_once 'functions.php';

if(!isset($_POST["tipoForm"]) || empty ($_POST["tipoForm"])){
  echo 'Error inesperado';
  echo '<button><a href="../index.php">Volver</a></button>';
}else{
  $tipoForm = htmlspecialchars($_POST["tipoForm"]);

  if($tipoForm == 'valorar'){
    if( !empty($_POST["radioValorar"]) &&
        !empty($_POST["comentarioTextArea"]) &&
        !empty($_POST["idArticulo"]) &&
        !empty($_POST["idUsuario"]) ){

          $idArticulo =htmlspecialchars( $_POST["idArticulo"]);
          $idUsuario =htmlspecialchars( $_POST["idUsuario"]);
          $nota =htmlspecialchars( $_POST["radioValorar"]);
          $comentario =htmlspecialchars( $_POST["comentarioTextArea"]);

          $valoracionTable = new Valoracion();
          $valoracionTable->create($idArticulo,$idUsuario,$nota,$comentario);

          $valoracionTable->ID = $idArticulo;
          $allNotas = $valoracionTable->getNotas();
          $numNota = count($allNotas);

          $sumaNotas = 0;
          foreach ($allNotas as $n) {
            $sumaNotas = $sumaNotas + $n['nota'];
          }
          $notaMediaAux = $sumaNotas/$numNota;
          $notaMedia = number_format($notaMediaAux,1,'.',' ');

          $articuloTable = new Articulo();
          $articuloTable->ID =$idArticulo;
          $articuloTable->update($notaMedia);

          echo "<script>window.location='../index.php';</script>";

    }else{
      echo 'Error campos vacios<br>';
      echo '<button><a href="../index.php">VOLVER</a></button>';
    }
  }

  if($tipoForm == 'crear'){
    if( !empty($_POST["radioValorar"]) &&
        !empty($_POST["comentarioTextArea"]) &&
        !empty($_POST["descripTextArea"]) &&
        !empty($_POST["anio"]) &&
        !empty($_POST["estilo"]) &&
        !empty($_POST["nombre"]) &&
        !empty($_POST["idUsuario"]) ){

          $nota = htmlspecialchars($_POST["radioValorar"]);
          $comentario = htmlspecialchars($_POST["comentarioTextArea"]);
          $nombre = htmlspecialchars($_POST["nombre"]);
          $anio = htmlspecialchars($_POST["anio"]);
          $estilo = htmlspecialchars($_POST["estilo"]);
          $descripcion = htmlspecialchars($_POST["descripTextArea"]);
          $idUsuario = htmlspecialchars($_POST["idUsuario"]);

          $articuloTable = new Articulo();
          $articuloTable->create($idUsuario,$nombre,$estilo,$anio,$descripcion,$nota);

          $idArticuloAux =  $articuloTable->getLastArticulo();
          $idArticulo = $idArticuloAux[0]['id'];
          $valoracionTable = new Valoracion();
          $valoracionTable->create($idArticulo,$idUsuario,$nota,$comentario);

          echo "<script>window.location='../index.php'</script>";
    }else{
      echo 'Error campos vacios<br><br>';
      echo "<button><a href='../index.php'>Volver</a></button>";
    }
  }
}

?>
