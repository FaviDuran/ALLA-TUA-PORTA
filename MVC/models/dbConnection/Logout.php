<?php
session_start();
    unset($_SESSION["id"]);
    unset($_SESSION["email"]);
    header("Location: http://localhost/ProyectoChido/MVC/views/iniciar.php");
?>