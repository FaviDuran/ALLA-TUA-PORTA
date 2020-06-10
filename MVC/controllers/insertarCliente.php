<?php
	
	try{
	$usuario= 'root';
	$contraseña = '';
	$base_datos='allatuaporta';
	$servidor = 'localhost';
        
        //Datos tabla e inserción de la misma
        $name = $_POST["nombre"];
        $address = $_POST["direccion"];
        $email = $_POST["correo"];
        $password = $_POST["password"];
        $telefono = $_POST["telefono"];
	
	$mdb= new PDO("mysql:host=$servidor;dbname=$base_datos",$usuario,$contraseña);
	
//Consuulta INSERTAR	
	$sql="Insert into cliente(name,address,email,password,telefono)
		VALUES ('$name','$address','$email','$password','$telefono')";
	
		//echo datos;
		$mdb->exec($sql);
		$mdb=null;
		
	//	return;
		header ('Location:../views/iniciar.php');
        }catch (PDOException $e){
            print "Error!: ".$e->getMessage()."<br/>";
            die();
}
?>