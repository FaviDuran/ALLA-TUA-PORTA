<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Alla Tua Porta</title>
    </head>

    <link rel="stylesheet" href="assets/css/Normalize.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

    <!-- Cabecera de la pagina -->
    <header class="site-header inicio">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="index.php">
                    <img src="assets/img/logo.png" alt="Logotipo de bienes raices">
                </a>

                <nav class="navegacion">
                        <a>
                           <?php                           
                           session_start();
                             if($_SESSION["email"]) {?>BIENVENIDO  
                                 <?php echo $_SESSION["email"]; ?>. <a href="http://localhost/ProyectoChido/MVC/models/dbConnection/Logout.php" title="Logout">Cerrar sesión.
                           <?php } else echo "<a>Por favor inicie sesión .</a>";                           
                           ?>
                                     </a>   
                        </a>

                    <a href="inicio.php">INICIO</a>
                    <a href="tiendas.php">TIENDAS</a>
                    <a href="registro.php">REGISTRO</a>
                    <a href="iniciar.php">LOGIN</a>
                </nav>
            </div>
        </div>
        <!-- Contenedor -->
    </header>


    <!-- DATOS -->
    <section class="contenedor">
        <h2 class="fw-300 centrar-texto">APOYANDO A LOS NEGOCIOS LOCALES</h2>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="assets/img/visitantes_l.png" alt="Icono Visitantes">
                <h3>COMERCIANTES</h3>
                <p>
                    No importa que tan grande sea tu negocio o tus productos, unete a nosotros y ve crecer
                    tu negocio.
                </p>
            </div>

            <div class="icono">
                <img src="assets/img/hotel_l.png" alt="Icono Mejor precio">
                <h3>CUALQUIER LUGAR</h3>
                <p>
                    No importa donde te encuentres, te entregamos tus productos en la puerta de tu casa.
                    <br>*No aplica colonias cholas.
                </p>
            </div>

            <div class="icono">
                <img src="assets/img/derroche_l.png" alt="Icono a tiempo">
                <h3>MAS INGRESOS</h3>
                <p>Con la oportunidad de que tu negocio llegue a mas gente, comenzaras a ver mas ingresos
                    para ti.
                    <br> Unete a nosotros.
                </p>
            </div>
        </div>
    </section>
    <BR><BR>

    <!-- COMENTARIOS -->
    <section class="imagen-contacto ">
        <div class="contenedor contenido-contacto ">
            <h2>Ve crecer tu negocio.</h2>
            <p>
                Genera mas ingresos dando a conocer tu negocio a mas gente.
                <br>
                Únete a nosotros, solo llena el formulario y comienza a vender.
            </p>
            <a href="registro.php" class="boton boton-amarillo ">Registrase</a>
        </div>
    </section>


    <div class="seccion-inferior contenedor ">
        <section class="blog ">
            <h3 class="centrar-texto fw-300 ">COMENTARIOS DE CLIENTES</h3>

            <article class="entrada-blog ">
                <div class="imagen ">
                    <img src="assets/img/tacote.jpg" alt="Entrada de blog ">
                </div>
                <div class="texto-entrada ">
                    <a href="entrada_blog/expiatorio.html">
                        <h4>TAQUERIA "EL TACOTE"</h4>
                    </a>
                    <p>Escrito:<span> 30/05/2020 </span> por: <span> Castro Diego </span> </p>
                    <p>
                        Los mejores tacos de la ciudad, higienicos y con excelente calidad.
                        Recomiendo mucho los tacos de ojo, porque te los dan bien picaditos y saben
                        riqusimos!.
                        <br>
                        <b>10/10</b>
                    </p>
                </div>
            </article>

            <article class="entrada-blog">
                <!-- empieza blog -->
                <div class="imagen">
                    <img src="assets/img/manuelotes.jpg" alt="Entrada de blog">
                </div>
                <div class="texto-entrada">
                    <a href="entrada_blog/TecateBajio.html">
                        <h4>ELOTES "MANUELOTES"</h4>
                    </a>
                    <p>Escrito:<span> 28/05/2020 </span> por: <span> Rostro Ulises </span> </p>
                    <p>
                        Muy buenos elotes, excelente servicio por parte de Manuel. saben mejor si vas acompañado,
                        yo voy solo pero siento que sabrían mejor si vas con alguien.
                        <br>
                        <b>8.5/10</b>
                    </p>
                </div>
            </article>
    </div>

    <footer class="site-footer seccion ">
        <div class="contenedor contenedor-footer ">
            <nav class="navegacion ">
                <a href="inicio.php">INICIO</a>
                <a href="tiendas.php">TIENDAS</a>
                <a href="registro.php">REGISTRO</a>
                <a href="iniciar.php">LOGIN</a>
            </nav>

            <p class="copyright ">Todos los derechos reservados 2020 &copy; </p>

        </div>
    </footer>


</html>