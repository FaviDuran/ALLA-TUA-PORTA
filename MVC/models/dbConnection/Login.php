<?php
session_start();
    if(count($_POST)>0) {
    $con = mysqli_connect('localhost','root','','allatuaporta') or die('Unable To connect');
    $result = mysqli_query($con,"SELECT * FROM cliente WHERE email='" . $_POST["email"] . "' and password = '". $_POST["password"]."'");
    $row  = mysqli_fetch_array($result);
if(is_array($row)) {
    $_SESSION["id"] = $row['id'];
    $_SESSION["email"] = $row['email'];
    } else {
            $result = mysqli_query($con,"SELECT * FROM negocio WHERE email='" . $_POST["email"] . "' and password = '". $_POST["password"]."'");
            $row  = mysqli_fetch_array($result);
            if(is_array($row)) {
            $_SESSION["id"] = $row['id'];
            $_SESSION["email"] = $row['email'];
            } else {
                echo "<script>alert('correo o contraseña no válidos');</script>";
                }
    }if(isset($_SESSION["id"])) {
                        header("Location:index.php");
    }
}
?>