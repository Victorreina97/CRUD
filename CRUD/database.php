<?php 

    class Database {
// SE ENCARGA DE LA CONEXION
        public static function conectar(){
            $driver = 'mysql';
            $host = '127.0.0.1';
            $port = '3306';
            $user = 'root';
            $password = '';
            $db = 'practicaordenadores';
            $dsn = "$driver:dbname=$db;host=$host;port=$port";
        
        try {
            $gbd = new PDO($dsn, $user, $password);
        } catch (PDOException $e) {   
            echo 'Falló la conexión: ' . $e->getMessage();
        }
    return $gbd;
        }
        
        public static function getAll() {

            //1.CONECTA
            //2.REALIZO LA QUERY
        $sql = "SELECT * from ordenadores";
        $resultado = self::conectar()->query($sql);

        return $resultado;
    }

    //FUNCION QUE ELIMINA UN COCHE POR ID
    public static function delete($datos){
        $sql = "DELETE FROM ordenadores WHERE id = $idOrdenadores";
        self::conectar()->exec($sql);
    }

    //Funcion que inserta un coche nuevo en la BD
    //Los elementos del coche vienen en el parametro $datos
    //$datos = [marca, modelo, precio]
    public static function save($datos){
        $sql = "INSERT INTO ordenadores(idOrdenadores, modelo,  marca, precio, descripcion) VALUES ('$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]', '$datos[4]' )";
        self::conectar()->exec($sql);
    }
    //FUNCION QUE RECIBE UN ID POR PARAMETRO Y RETORNA SU COCHE ASOCIADO
    public static function findbyId($idordenadores){
        $sql = "SELECT * FROM ordenadores WHERE id = $idOrdenadores";
        $datos = self::conectar()->query($sql);
        return $datos->fetch(PDO::FETCH_ASSOC);

    }
    
    //Funcion que actualiza los datos de un coche determinado
    public static function update($ordenadores){
        $sql = "UPDATE ordenadores SET idOrdenadores = $datos[1], modelo = $datos[2], marca = $datos[3], precio = $datos[4], descripcion = $datos[5] WHERE id = $datos[0]";
        self::conectar()->exec($sql);

      }

    }

 
?>