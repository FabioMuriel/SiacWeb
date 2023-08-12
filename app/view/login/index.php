<?php
$login = new LoginControlador();
$login->IniciarSession();
?>

<div class="container" id="container">
    <!-- Contenedor de Profesores y Directivos -->
	<div class="form-container sign-up-container">
        <!--Formulario de Profesires y directivos -->
		<form action="#" method = "POST">
			<h1>Bienvenido</h1>
			
			<span>Ingresa a tu cuenta</span>
            <br>
			<input type="text" placeholder="Usuario" name="Usuario" id="Usuario" class="Custominput" />
            <input type="password" placeholder="Contraseña" name="Password" id="Password" class="Custominput" />
			<a href="#">Olvidaste tu contraseña?</a>
            <br>
			<button type = "submit">Inciar</button>
		</form>
	</div>

    <!--Contenedor de estudiantes -->
	<div class="form-container sign-in-container">
        <!--Formulario de login estudiantes -->
		<form action="#" method = "POST">
			<h1>Bienvenido</h1>
			
			<span>Ingresa a tu cuenta</span>
            <br>
            <input type="Usuario" placeholder="Usuario" name="Usuario" id="Usuario" class = "Custominput" />
			<input type="Contraseña" placeholder="Contraseña" name="Password" id="Password" class = "Custominput" />
			<a href="#">Olvidaste tu contraseña?</a>
			<button type = "submit">Iniciar</button>
		</form>
	</div>
    <!--Contenedor de informacion -->
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
                <h1>Hola!</h1>
				<p>Ingresa y podras acceder al perfil de estudiantes</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hola!</h1>
				<p>Ingresa y podras acceder al perfil de directivos y profesores</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>

<script>
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
        container.classList.add("right-panel-active");
    });

    signInButton.addEventListener('click', () => {
        container.classList.remove("right-panel-active");
    });

	setTimeout(function moverDiv(){
	container.classList.add("right-panel-actives");
	},2000);

</script>

<style>
    
@import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

* {
	box-sizing: border-box;
}

body {
	background: #e6e6e6;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	font-family: 'Montserrat', sans-serif;
	height: 100vh;
	margin: -20px 0 50px;
}

h1 {
	font-weight: bold;
	margin: 0;
}

h2 {
	text-align: center;
}

p {
	font-size: 14px;
	font-weight: 100;
	line-height: 20px;
	letter-spacing: 0.5px;
	margin: 20px 0 30px;
}

span {
	font-size: 12px;
}

a {
	color: #333;
	font-size: 14px;
	text-decoration: none;
	margin: 15px 0;
}

button {
	border-radius: 20px;
	border: 1px solid transparent;
	background: #212121;
	color: #FFFFFF;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}

button:active {
	transform: scale(0.95);
}

button:focus {
	outline: none;
}

button.ghost {
	background-color: transparent;
	border-color: #FFFFFF;
}

form {
	background-color: #FFFFFF;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 50px;
	height: 100%;
	text-align: center;
}

.container {
	background-color: #fff;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
	position: relative;
	overflow: hidden;
	width: 768px;
	max-width: 100%;
	min-height: 480px;
}

.form-container {
	position: absolute;
	top: 0;
	height: 100%;
	transition: all 0.6s ease-in-out;
}

.sign-in-container {
	left: 0;
	width: 50%;
	z-index: 2;
}

.container.right-panel-active .sign-in-container {
	transform: translateX(100%);
}

.sign-up-container {
	left: 0;
	width: 50%;
	opacity: 0;
	z-index: 1;
}

.container.right-panel-active .sign-up-container {
	transform: translateX(100%);
	opacity: 1;
	z-index: 5;
	animation: show 0.6s;
}

@keyframes show {
	0%, 49.99% {
		opacity: 0;
		z-index: 1;
	}
	
	50%, 100% {
		opacity: 1;
		z-index: 5;
	}
}

.overlay-container {
	position: absolute;
	top: 0;
	left: 50%;
	width: 50%;
	height: 100%;
	overflow: hidden;
	transition: transform 0.6s ease-in-out;
	z-index: 100;
}

.container.right-panel-active .overlay-container{
	transform: translateX(-100%);
}

.overlay {
	background: #212121;
	background-repeat: no-repeat;
	background-size: cover;
	background-position: 0 0;
	color: #FFFFFF;
	position: relative;
	left: -100%;
	height: 100%;
	width: 200%;
  	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.container.right-panel-active .overlay {
  	transform: translateX(50%);
}

.overlay-panel {
	position: absolute;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 40px;
	text-align: center;
	top: 0;
	height: 100%;
	width: 50%;
	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.overlay-left {
	transform: translateX(-20%);
}

.container.right-panel-active .overlay-left {
	transform: translateX(0);
}

.overlay-right {
	right: 0;
	transform: translateX(0);
}

.container.right-panel-active .overlay-right {
	transform: translateX(20%);
}

.social-container {
	margin: 20px 0;
}

.social-container a {
	border: 1px solid #DDDDDD;
	border-radius: 50%;
	display: inline-flex;
	justify-content: center;
	align-items: center;
	margin: 0 5px;
	height: 40px;
	width: 40px;
}

footer {
    background-color: #222;
    color: #fff;
    font-size: 14px;
    bottom: 0;
    position: fixed;
    left: 0;
    right: 0;
    text-align: center;
    z-index: 999;
}

footer p {
    margin: 10px 0;
}

footer i {
    color: red;
}

footer a {
    color: #3c97bf;
    text-decoration: none;
}

.Custominput{
    border-radius: 15px;
    border: 1px solid #f8f8f8;
    background-color: #f8f8f8;
	padding: 12px 15px;
	margin: 8px 0;
	width: 100%;
    box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
}

input:focus {
    border: 1px solid #f8f8f8;
}

@media screen and (max-width: 509px) {
	body{
		background-color: #e6e6e6;
	}
	.resolucion{
		display: none;
	}
	.sign-up-container{
		display: none;
	}
	/*
	.overlay-container{
		display: none;
	}
	*/
	.sign-in-container{
		transform: translateX(0%);
		width: 100%;
		
	}
	.container {
	background-color: #fff;
	border-radius: 10px;
	position: relative;
	overflow: hidden;
	width: 100%;
	}
	.overlay-panel {
	position: absolute;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 40px;
	text-align: center;
	top: 0;
	height: 100%;
	width: 50%;
	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
	}
	.overlay-left {
		display: none;
		
	}
	.overlay-container{
		width: 100%;
		transform: translate(-50%, 0%);
	}
	.container.right-panel-actives .overlay-container {
	transform: translateX(100%);
}
	.ghost{
		display: none;
	}
}

</style>