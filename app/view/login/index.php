<?php
$login = new LoginControlador();
$login->IniciarSession();
?>

<div class="container" id="container">
    <div class="form-container sign-up-container">
        <form action="#" method="POST">
            <h1>Bienvenido</h1>
            <span>Ingresa a tu cuenta</span>
            <input type="text" placeholder="Usuario" name="Usuario" id="Usuario" class="custom-input" />
            <input type="password" placeholder="Contraseña" name="Password" id="Password" class="custom-input" />
            <button type="submit">Iniciar</button>
        </form>
    </div>
</div>

<style scoped>
    body {
        font-family: Arial, sans-serif;
        background-color: #f7f7f7;
        margin: 0;
        padding: 0;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .form-container {
        background-color: #ffffff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        border-radius: 5px;
    }

    h1 {
        margin: 0;
        padding: 0;
        font-size: 24px;
        margin-bottom: 10px;
    }

    span {
        font-size: 14px;
    }

    input {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    button {
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    @media screen and (max-width: 768px) {
        .container {
            flex-direction: column;
        }
    }
</style>