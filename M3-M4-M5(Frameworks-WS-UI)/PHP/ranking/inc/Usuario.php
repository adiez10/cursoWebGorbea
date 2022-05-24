<?php
include_once 'functions.php';
/**
 * Esta clase contiene las funciones necesarias para gestionar la tabla Usuario de la base de datos
 *
 */
class Usuario{
  public $ID = 0;
  /**
   * Crea una nueva fila en la tabla usuario.
   */

   function create($email, $nickname, $password){
      $connect = new Tools();
      $conexion = $connect->connectDB();
      $sql = "insert into usario (email, nickname, password)
      values ('".$email."','".$nickname."','".$password."');";
      $consulta = mysqli_query($conexion,$sql);
      if($consulta){
      }else{
        echo 'No se ha podido insertar en la BD<br><br>'.mysqli_error($conexion);
      }
      $connect->disconnectDB($conexion);
      return $consulta;
   }

   /*Devuelve un array con la info de usuarios*/
   function getData(){
    $sql = "SELECT * FROM usuario WHERE ID = $this->ID;";
    $tool = new Tools();
    $array = $tool->getArraySQL($sql);
    return $array;
   }

   //Devuelve Toda la información de la tabla usuario
function getAllInfo(){
  $sql = "SELECT * FROM usuario;";
  $tool = new Tools();
  $array = $tool->getArraySQL($sql);
  return $array;
}

}
?>
