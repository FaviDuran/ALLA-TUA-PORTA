<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>INICIO</title>
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
                        <a>
                           <?php                           
                             if($_SESSION["email"]) {?>BIENVENIDO  
                                 <?php echo $_SESSION["email"]; ?>. <a href="http://localhost/ProyectoChido/MVC/models/dbConnection/Logout.php" title="Logout">Cerrar sesión.
                           <?php } else echo "<a>Por favor inicie sesión .</a>";
                           ?>
                                     </a>   
                        </a>

                    </nav>

                </div>
            </div>
            <!-- Contenedor -->
        </header>

        <main class="contenedor">
            <br>
            <div class="contenido-nosotros">
                <div class="imagen">
                    <img src="assets/img/imagenfondo.jpg" alt="Imagen sobre nosotros">
                </div>
                <div class="texto-nosotros">
                    <blockquote> ¿Porque nosotros? </blockquote>

                    <p>Somos una aplicación enfocada a ayudar a los pequeños negocios a creecer,
                        a diferencia de otras aplicaciones en el mercado, nosotros sobramos una cuota minima
                        al mes para que tu negocio esté hospedado con nosotros.</p>

                    <p>Las capacidades de crecimiento de tu negocio son ilimitadas, llegando a lugares
                        que nunca pensaste que te conocerían y generando un ingreso adicional a tu 
                        negocio.
                    </p>

                    <p>¡Unete y comienza a vender mas! </p>

                </div>

            </div>



        </main>

        <section class="contenedor">
            <h2 class="fw-300 centrar-texto">BENEFICIOS</h2>

            <div class="iconos-nosotros">
                <div class="icono">
                    <img src="assets/img/localizacion.png" alt="Icono Visitantes">
                    <h3>localización</h3>
                    <p>Envíos directos a cualquier parte de la ciudad.</p>
                </div>

                <div class="icono">
                    <img src="assets/img/extension.png" alt="Icono Mejor precio">
                    <h3>ENVIOS DIRECTOS</h3>
                    <p> Pedidos seguros, desde el negocio hasta la puerta de tu casa, monitoreando en
                        todo momento tu orden. </p>
                </div>

                <div class="icono">
                    <img src="assets/img/clima.png" alt="Icono a tiempo">
                    <h3>HORARIOS</h3>
                    <p> Servicio todo el día a cualquier hora y todos los días. </p>
                </div>
            </div>
        </section>


        <footer class="site-footer seccion">
            <div class="contenedor contenedor-footer">
                <nav class="navegacion">
                    <a href="inicio.php">INICIO</a>
                    <a href="tiendas.php">TIENDAS</a>
                    <a href="registro.php">REGISTRO</a>
                    <a href="iniciar.php">LOGIN</a>
                </nav>

                <p class="copyright">Todos los derechos reservados 2019 &copy; </p>

            </div>
        </footer>



    </body>

</html>