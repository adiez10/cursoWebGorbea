<?php
include_once 'functions.php';
/**
 * Esta clase contiene las funciones necesarias para gestionar la tabla valoracion de la base de datos
 * 
 */
class Valoracion{
  public $ID = 0;
    /**
     * Crea una nueva fila en la tabla valoracion.
     */
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
    /**
     * Devuelve un array con la información de una fila a partir de un ID
     * @return type
     */
  function getData(){
    $sql = "SELECT * FROM valoracion WHERE ID = $this->ID;";
    $tool = new Tools();
    $array = $tool->getArraySQL($sql);
    return $array;
  }

    /**
     * Devuelve Toda la información de la tabla table1
     * @return type
     */
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
