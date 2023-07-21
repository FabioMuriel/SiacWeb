<?php 

require_once 'conexion.php';

class LoginModelo{
    public static function ConsultarUsuario($usuario){
        $x = Conexion::conectar()->prepare("SELECT COUNT(*) FROM tbl_usuarios WHERE tbl_usuarios_login = :usuario");
        $x->bindParam(":usuario", $usuario, PDO::PARAM_STR);
        $x->execute();

        $cantidad = $x->fetchColumn();

        if($cantidad > 0){
            $z = Conexion::conectar()->prepare("SELECT U.tbl_usuarios_id AS id_usuario, U.tbl_usuarios_login AS usuario,
            U.tbl_usuario_clave AS PASSWORD, R.tbl_rol_nombre AS tipo_usuario, R.tbl_rol_id AS id_rol FROM tbl_usuarios AS U
            INNER JOIN tbl_roles AS R ON R.tbl_rol_id = U.tbl_usuario_rol WHERE U.tbl_usuarios_login = :usuario");
            $z->bindParam(":usuario", $usuario, PDO::PARAM_STR);
            $z->execute();
            return $z->fetch();

            
        }
    }
}

?>
