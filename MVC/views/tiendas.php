<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TIENDAS</title>
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
                           session_start();
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

        <!-- Anuncios sobre marca GTO-->
        <main class="seccion contenedor">
            <h2 class="fw-300 centrar-texto"> CLASIFICACIONES </h2>

            <div class="contenedor-anuncios">
                <div class="anuncio">
                    <CENter>
                        <img src="assets/img/mexican_food.jpg" alt="Anuncio casa en el lago">
                    </CENter>
                    <div class="contenido-anuncio">
                        <h3>COMIDA MEXICANA</h3>
                        <p>
                            Donec in eleifend ante, et semper tellus. Donec eu ex vitae dui malesuada ultricies id a odio. Maecenas faucibus placerat consequat. Ut scelerisque lacus ac est tristique, venenatis eleifend ligula accumsan.
                            <br><br> 
                        </p>
                        <a href="ListaTiendas.php" Class="boton boton-amarillo d-block">Ver negocios</a>
                    </div>
                </div>

                <div class="anuncio">
                    <CEnter>
                        <img src="assets/img/italian_food.jpg" alt="Anuncio casa con terminados de lujo">
                    </CEnter>
                    <div class="contenido-anuncio">
                        <h3>COMIDA ITALIANA</h3>
                        <p>
                            Donec in eleifend ante, et semper tellus. Donec eu ex vitae dui malesuada ultricies id a odio. Maecenas faucibus placerat consequat. Ut scelerisque lacus ac est tristique, venenatis eleifend ligula accumsan.
                            <br> 
                        </p>


                        <a href="ListaTiendas.php" Class="boton boton-amarillo d-block">Ver negocios</a>
                    </div>
                </div>
                <div class="anuncio">
                    <center>
                        <img src="assets/img/american_food.jpg" alt="Anuncio casa con alberca">
                    </center>
                    <div class="contenido-anuncio">
                        <h3>COMIDA RAPIDA</h3>
                        <p>
                            Donec in eleifend ante, et semper tellus. Donec eu ex vitae dui malesuada ultricies id a odio. Maecenas faucibus placerat consequat. Ut scelerisque lacus ac est tristique, venenatis eleifend ligula accumsan.
                            <BR>
                        </p>

                        <a href="ListaTiendas.php" Class="boton boton-amarillo d-block">Ver negocios</a>
                    </div>
                </div>
                <!-- Termino anuncio -->

                <div class="anuncio">
                    <!-- Inicia anuncio -->
                    <center>
                        <img src="assets/img/japanse_food.jpg" alt="Anuncio casa con alberca">
                    </center>
                    <div class="contenido-anuncio">
                        <h3>COMIDA JAPONESA</h3>
                        <p>
                            Donec in eleifend ante, et semper tellus. Donec eu ex vitae dui malesuada ultricies id a odio. Maecenas faucibus placerat consequat. Ut scelerisque lacus ac est tristique, venenatis eleifend ligula accumsan.
                            <br>
                        </p>

                        <a href="ListaTiendas.php" Class="boton boton-amarillo d-block">Ver negocios</a>
                    </div>
                </div>
                <!-- Termino anuncio -->

                <div class="anuncio">
                    <!-- Inicia anuncio -->
                    <center>
                        <img src="assets/img/chinese_food.jpg" alt="Anuncio casa con alberca">
                    </center>
                    <div class="contenido-anuncio">
                        <h3>COMIDA CHINA</h3>
                        <p>
                            Donec in eleifend ante, et semper tellus. Donec eu ex vitae dui malesuada ultricies id a odio. Maecenas faucibus placerat consequat. Ut scelerisque lacus ac est tristique, venenatis eleifend ligula accumsan.
                            <br>
                        </p>

                        <a href="ListaTiendas.php" Class="boton boton-amarillo d-block">Ver negocios</a>
                    </div>
                </div>
                <!-- Termino anuncio -->


                <div class="anuncio">
                    <!-- Inicia anuncio -->
                    <center>
                        <img src="assets/img/vegan.jpg" alt="Anuncio casa con alberca">
                    </center>
                    <div class="contenido-anuncio">
                        <h3>COMIDA VEGANA</h3>
                        <p>
                            Donec in eleifend ante, et semper tellus. Donec eu ex vitae dui malesuada ultricies id a odio. Maecenas faucibus placerat consequat. Ut scelerisque lacus ac est tristique, venenatis eleifend ligula accumsan.
                            <br>
                        </p>

                        <a href="ListaTiendas.php" Class="boton boton-amarillo d-block">Ver Negocios</a>
                    </div>
                </div>
                <!-- Termino anuncio -->

            </div>

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