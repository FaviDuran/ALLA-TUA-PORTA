<?php
session_start();
require_once '../models/dbConnection/conexion.php';
require_once '../models/dbConnection/NegocioDAO.php';
?>

<!DOCTYPE html>
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

        <img src="assets/img/contacto.jpeg" alt="">


        <main class="contenedor seccion contenido-centrado">

            <table table border="1" style="width: 990px; height: 330px; background: rgba(255,165,0,0.7)";>
                <tr>
                    <td><h1>Negocio</h1></td>
                    <td><h1>Tipo</h1></td>
                    <td><h1>Direccion</h1></td>
                    <td><h1>Telefono</h1></td>
                </tr>
                <?php
                $obj = new NegocioDAO();
                $sql = "SELECT name,tipo,address,telefono from negocio ORDER BY tipo";
                $datos = $obj->mostrarDatos($sql);
                foreach ($datos as $key) {
                ?>
                <tr bgcolor = white>
                    <td><?php echo $key['name']?></td>
                    <td><?php echo $key['tipo']?></td>
                    <td><?php echo $key['address']?></td>
                    <td><?php echo $key['telefono']?></td>
                </tr>
                <?php
                }
                ?>
    
            </table>
            
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