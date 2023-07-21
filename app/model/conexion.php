<?php 

class Conexion{
    public static function conectar()
    {
        try {
            $link = new PDO("mysql:host=162.241.61.55; dbname=prestig6_db_siac", "prestig6_user_siac", "K[u.{0FBH;Az");
            return $link;
        } catch (PDOException $e) {
            die('Error al conectar a la base de datos: ' . $e->getMessage());   
        }
    }
}

//Prueba de conexión
// $conexion = Conexion::conectar();
// if ($conexion) {
//     echo "Conexión exitosa";
// } else {
//     echo "Error en la conexión";
// }
?>
