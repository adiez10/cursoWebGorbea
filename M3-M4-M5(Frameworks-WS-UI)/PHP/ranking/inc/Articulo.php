<?php
include_once 'functions.php';
//Esta clase contiene las funciones necesarias para gestionar la tabla articulo de la base de datos

class Articulo{

  public $ID = 0;

  function create($id_usuario, $nombre, $param1, $param2, $descrip, $notageneral){
    $connect = new Tools();
    $conexion = $connect->connectDB();
    $sql = "insert into articulo (id_usuario,nombre,param1,param2,descrip,notageneral)
    values ('".$id_usuario."','".$nombre."','".$param1."','".$param2."','".$descrip."','".$notageneral."');";
    $consulta = mysqli_query($conexion,$sql);
    if($consulta1){
    }else{
      echo "No se ha podido iunsertar en la BD <br><br>".mysqli_error($conexion);
    }
    $connect->disconnectDB($conexion);
    return $consulta;
  }


}
?>
