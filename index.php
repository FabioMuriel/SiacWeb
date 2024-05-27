<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SiacWeb</title>

    <!-- Importacion de Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!-- Importacion de Boostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <?php
        if(isset($_SESSION["sesion_active"]) && ($_SESSION["sesion_active"]["tipo_usuario"] == "Administrativo")){
            include 'app/view/home/index.php';
            if(isset($_GET['ruta']) && $_GET['ruta'] == "salir"){
                include 'app/view/login/salir.php';
            }
        }
        else{
            require_once 'app/controller/LoginController.php';
            include 'app/view/login/index.php';
        }
    ?>
</body>
</html>
