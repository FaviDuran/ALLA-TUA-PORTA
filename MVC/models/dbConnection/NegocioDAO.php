<?php

require_once 'DAO.php';
require_once '../models/Negocio.php';
require_once 'conexion.php';;

class NegocioDAO implements DataAccessObject{
    
    public function create($bussines) {
        $connection = DataBase::getConnection();
        
        $sql  = "INSERT INTO negocios(name,tipo,address,email,password,telefono,description)";
        $sql .= "VALUES (:name,:tipo,:address,:email,:password,:telefono,:description)";

        $statement = $connection->prepare($sql);
        $statement->execute([
            "name"  => $bussines->getName(),
            "tipo" => $bussines->getTipo(),
            "address" => $bussines->getAddress(),
            "email" => $bussines->getEmail(),
            "password" => $bussines->getPassword(),
            "telefono" => $bussines->getTelefono(),
            "description" => $bussines->getDescription()
        ]);
    }
    
    public function all() {
        
        $connection = DataBase::getConnection();
        $statement = $connection->prepare("SELECT * FROM negocios");
        $statement->execute();

        $result_set = $statement->fetchAll(PDO::FETCH_ASSOC);
        
        $bussines1 = [];
        foreach ($result_set as $bussines){
            $new_bussines = new Negocio(
                    $bussines['name'],
                    $bussines['tipo'],
                    $bussines["address"],
                    $bussines["email"],
                    $bussines["password"],
                    $bussines["telefono"],
                    $bussines["description"]
                    );
            $new_bussines ->setId($bussines['id']);
            array_push($bussines1, $new_bussines);
        }
        return $bussines1;
    }
    
    public function find($id) {
        
        $connection = DataBase::getConnection();
        $statement = $connection->prepare("SELECT * FROM negocios WHERE id=:id");
        $statement->execute(["id" => $id]);

        $result_set = $statement->fetchAll(PDO::FETCH_ASSOC);
        
        $bussines1 = [];
        foreach ($result_set as $bussines){
            $new_bussines = new Negocio(
                    $bussines['name'],
                    $bussines['tipo'],
                    $bussines["address"],
                    $bussines["email"],
                    $bussines["password"],
                    $bussines["telefono"],
                    $bussines["description"]
                    );
            $new_bussines ->setId($bussines['id']);
            array_push($bussines1, $new_bussines);
        }
        return $bussines1;
    }
    
    public function update($bussines) {
         $connection = DataBase::getConnection();

        $sql  = "UPDATE negocios ";
        $sql .= "SET name=:name, tipo=:tipo, address=:address, email=:email, password=:password, telefono=:telefono, description=:description ";
        $sql .= "WHERE id=:id";
        
        $statement = $connection->prepare($sql);
        $statement->execute([
            "name"  => $bussines->getName(),
            "tipo" => $bussines->getTipo(),
            "address" => $bussines->getAddress(),
            "email" => $bussines->getEmail(),
            "password" => $bussines->getPassword(),
            "telefono" => $bussines->getTelefono(),
            "description" => $bussines->getDescription()
        ]);
    }
    public function mostrarDatos($sql) {
        $c = new conexion();
        $conexion=$c->conexion();
        
        $result= mysqli_query($conexion, $sql);
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }
    
      public function delete($bussines) {
        $connection = DataBase::getConnection();
        $statement = $connection->prepare("DELETE FROM negocios WHERE id=:id");
        $statement->execute([
            "id" => $bussines->getID()
        ]);
    }
}
