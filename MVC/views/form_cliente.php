<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>REGISTRO</title>
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
            <!-- Contenedor -->
        </header>

        <h1 class="fw-300 centrar-texto">
            REGISTRO
        </h1>
        <img src="assets/img/contacto.jpeg" alt="">


        <main class="contenedor seccion contenido-centrado">



            <h2 class="fw-300 centrar-texto">
                Llena el formulario de registro.
            </h2>

            <form action="../controllers/insertarCliente.php" class="contacto" method="POST">
                <fieldset>

                    <legend>Registra tus datos</legend>
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Escribe tu nombre completo">

                    <label for="nombre">direccion:</label>
                    <input type="text" id="direccion" name="direccion" placeholder="Escribe tu direccion">

                    <label for="correo">Correo:</label>
                    <input type="email" id="correo" name="correo" placeholder="Escribe tu correo" required>

                    <label for="contraseña">Contraseña:</label>
                    <input type="password" id="password" name="password" placeholder="Ingresa una contraseña">

                    <label for="nombre">Telefono:</label>
                    <input type="number" id="telefono" name="telefono" placeholder="Escribe tu numero telefonico">
                </fieldset>
                <button type="submit">Enviar</button>
            </form>
        </main>



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