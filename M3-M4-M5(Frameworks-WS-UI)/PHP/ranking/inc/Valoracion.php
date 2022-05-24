<?php
include_once 'functions.php';

class Valoracion{
  public $ID = 0;

  function create($id_articulo,$id_usuario,$nota,$comentarios){
    $connect = new Tools();
    $conexion = $connect->connectDB();
    $sql = "insert into valoracion (id_articulo,id_usuario,nota,comentarios)
    values('".$id_articulo."','".$id_usuario."','".$nota."','".$comentarios."');";
    $consulta = mysqli_query($conexion,$sql);
    if($consulta){
    }else{
      echo "No se ha podido insertar en la base de datos<br><br>".mysqli_error($conexion);
    }
    $connect->disconnectDB($conexion);
    return $consulta;
  }

  function getData(){
    $sql = "SELECT * FROM valoracion WHERE ID = $this->ID;";
    $tool = new Tools();
    $array = $tool->getArraySQL($sql);
    return $array;
  }

  function getAllInfo(){
    $sql = "SELECT * FROM valoracion;";
    $tool = new Tools();
    $array = $tool->getArraySQL($sql);
    return $array;
  }

  function getComentarios(){
    $sql = "SELECT comentarios FROM valoracion WHERE id_articulo = $this->ID;";
    $tool = new Tools();
    $array = $tool->getArraySQL($sql);
    return $array;
  }

  function getNotas(){
    $sql = "SELECT nota FROM valoracion WHERE id_articulo = $this->ID;";
    $tool = new Tools();
    $array = $tool->getArraySQL($sql);
    return $array;
  }

}

?>
