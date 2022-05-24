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

  //actualizar los articulos
  function update($notageneral){
    $connect = new Tools();
    $conexion = $connect->connectDB();
    $sql = "UPDATE articulo SET notageneral = '".$notageneral."' WHERE ID= $this->ID; ";
    $consulta = mysqli_query($conexion,$sql);
    if(!$consulta){
      echo "No se ha podido modificar la base de datos <br><br>".mysqli_error($conexion);
    }
    $connect->disconnectDB($conexion);
    return $consulta;
  }

  function getData(){
    $sql = "SELECT * FROM articulo WHERE ID =$this->ID;";
    $tool = new Tools();
    $array = $tool->getArraySQL($sql);
    return $array;
  }

  //Funcion que obtenga la nota para mostrarla
  function getCampo1(){
    $sql = "SELECT notageneral FROM articulo WHERE ID =$this->ID;";
    $tool = new Tools();
    $array = $tool->getArraySQL($sql);
    return $array[0][0];
  }

  function getAllInfoOrderNota(){
    $sql = "SELECT * FROM articulo ORDER BY notageneral DESC;";
    $tool = new Tools();
    $array = $tool->getArraySQL($sql);
    return $array;
  }

  function getLastArticulo(){
    $sql = "SELECT id FROM articulo WHERE fechacreacion = (SELECT MAX(fechacreacion) FROM articulo);";
    $tool = new Tools();
    $array = $tool->getArraySQL($sql);
    return $array;
  }

}
?>
