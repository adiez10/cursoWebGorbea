  <?php
  include_once 'functions.php';
  //Esta clase contiene las funciones necesarias para gestionar la tabla articulo de la base de datos

  class Articulo{

    public $ID = 0;
      /**
       * Crea una nueva fila en la tabla articulo.
       * @return type
       */
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
      /**
       * Modifica la tabla con los datos introducidos
       * @return type
       */
    //actualizar la notageneral de articulos
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
      /**
       * Devuelve un array con la información de una fila a partir de un ID
       * @return type
       */
    function getData(){
  //Creamos la consulta
      $sql = "SELECT * FROM articulo WHERE ID =$this->ID;";
  //obtenemos el array
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

      /**
       * Devuelve Toda la información de la tabla articulo ordenada
       * @return type
       */  function getAllInfoOrderNota(){
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
