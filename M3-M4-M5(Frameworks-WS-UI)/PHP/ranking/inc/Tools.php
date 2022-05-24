<?php
include_once 'functions.php';
/**
 * Clase que contiene funciones útiles sobre la funcionalidad del programa
 *
 *
 */
class Tools{
  //Devuelve una instancia de la conexión a la base de datos
  function connectDB(){
    $conexion = mysqli_connect(SERVER, USER, PASS, DB );
    if($conexion){
    }else{
      echo 'Ha sucedido un error en la conexion con la BD<br>';
    }
    mysqli_query($conexion, "SET NAMES 'utf8'");
    mysqli_set_charset($conexion, "utf8");
    return $conexion;
  }
  //Desconecta la base de datos a partir de la instancia que le pasamos
  function disconnectDB($conexion){
    $close = mysqli_close($conexion);
    if($close){
    }else{
      echo 'Ha sucedido un error en la desconexion de la BD <br>';
    }
    return $close;
  }
  //Obtenemos un array multidimensional a partir de una sentencia SQL de entrada
  function getArraySQL($sql){
    $conexion = $this->connectDB();

      if(!$result= mysqli_query($conexion, $sql)){
        die(mysqli_error($conexion));
      }

      $rawdata = array();
      //guardamos en un array multidimensional todos los datos de la consulta
      $i=0;
      while($row = mysqli_fetch_array($result)){
        $rawdata[$i] = $row;
        $i++;
      }
    $this->disconnectDB($conexion);
    return $rawdata;
  }
}
?>
