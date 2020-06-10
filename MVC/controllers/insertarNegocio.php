<?php
	
	try{
	$usuario= 'root';
	$contraseña = '';
	$base_datos='allatuaporta';
	$servidor = 'localhost';
        
        //Datos tabla e inserción de la misma
        $name = $_POST["nombre"];
	$tipo = $_POST["tipo"];
        $address = $_POST["direccion"];
	$email = $_POST["correo"];
        $password = $_POST["contra"];
        $telefono = $_POST["telefono"];
	
	$mdb= new PDO("mysql:host=$servidor;dbname=$base_datos",$usuario,$contraseña);
	
//Consuulta INSERTAR	
	$sql="Insert into negocio(name,tipo,address,email,password,telefono)
		VALUES ('$name','$tipo','$address','$email','$password','$telefono')";
	
		//echo datos;
		$mdb->exec($sql);
		$mdb=null;
		
	//	return;
		header ('Location:../views/tiendas.php');
}catch (PDOException $e){
	print "Error!: ".$e->getMessage()."<br/>";
	die();
}
?>

