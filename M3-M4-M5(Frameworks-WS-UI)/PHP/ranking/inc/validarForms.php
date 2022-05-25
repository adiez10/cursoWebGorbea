<?php
include_once 'functions.php';

if(!isset($_POST["tipoForm"]) || empty ($_POST["tipoForm"])){
  echo 'Error inesperado';
  echo '<button><a href="../index.php">Volver</a></button>';
}else{
  $tipoForm = htmlspecialchars($_POST["tipoForm"]);
  if($tipoForm == 'valorar'){
    //trataremos con los datos de valorar
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
