<?php 

require_once 'app/model/LoginModel.php';

class LoginControlador{
    public function IniciarSession(){
		if(isset($_POST["Usuario"])){
			if($_POST["Usuario"]!= null && $_POST["Password"]!=null){

				$usuario = $_POST["Usuario"];
				$respuesta = LoginModelo::ConsultarUsuario($usuario);

				if($respuesta == false){
					echo '<div class="alert alert-danger alert-dismissible fade show" role="alert"><i class="bi bi-exclamation-octagon me-1"></i>La consulta dio error<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
				}
				else{
					$rol = $respuesta["tipo_usuario"];
					if($rol === "Administrativo" || $rol == "Profesor"){
						if(($respuesta["usuario"] == $_POST["Usuario"]) && ($respuesta["PASSWORD"] == $_POST["Password"])){
							$id_usuario = $respuesta["id_usuario"];
							$id_rol = $respuesta['id_rol'];

							$datos = [
								'id_usuario' => $id_usuario,
								'tipo_usuario' => $respuesta['tipo_usuario'],
								'id_rol' => $id_rol
							];
							$_SESSION['sesion_active'] = $datos;
						    echo '<script>window.location = "index";</script>';
						}
						else{
							echo '<div class="alert alert-danger alert-dismissible fade show" role="alert"><i class="bi bi-exclamation-octagon me-1"></i>Usuario o Contraseña Incorrecta<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
						}
					}
				}
			}
		}
	}
}
?>