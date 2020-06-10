<?php
 require_once '../models/dbConnection/Login.php';
 ?>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Login</title>
    </head>

    <body>

        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/Normalize.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">


        <header class="site-header ">
            <div class="contenedor contenido-header">
                <div class="barra">
                    <a href="index.php">
                        <img src="assets/img/logo.png" alt="Logotipo de bienes raices">
                    </a>
                    <nav class="navegacion">
                        <a href="inicio.php">INICIO</a>
                        <a href="tiendas.php">TIENDAS</a>
                        <a href="registro.php">REGISTRO</a>
                        <a href="iniciar.php">LOGIN</a>
                    </nav>
                </div>
            </div>
        </header>

        <img src="assets/img/contacto.jpeg" alt="">
        <main class="contenedor seccion contenido-centrado">
            <h2 class="fw-300 centrar-texto">
                INICIAR SESION
            </h2>

            <form class="contacto" action="" method="POST">
                <fieldset>

                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name = "email" placeholder="Escribe tu mail" required>

                    <label for="nombre">Contraseña:</label>
                    <input type="password" id="password" name="password" placeholder="Ingresa una contraseña">

                </fieldset>
                <input type="submit" value ="INICIAR" name="iniciar">
            </form>
        </main>


    </h1>


    <footer class="site-footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="inicio.php">INICIO</a>
                <a href="tiendas.php">TIENDAS</a>
                <a href="registro.php">REGISTRO</a>
                <a href="iniciar.php">LOGIN</a>
            </nav>
            <p class="copyright">Todos los derechos reservados 2020 &copy; </p>

        </div>
    </footer>

</body>

</html>