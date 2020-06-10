<?php
require_once 'DAO.php';
require_once 'models/Cliente.php';

class ClienteDAO implements DataAccessObject{
    
     public function create($client) {
        $connection = DataBase::getConnection();
        
        $sql  = "INSERT INTO cliente(name,,address,email,password,telefono)";
        $sql .= "VALUES (:name,:address,:email,:password,:telefono)";

        $statement = $connection->prepare($sql);
        $statement->execute([
            "name"  => $client->getName(),
            "address" => $client->getAddress(),
            "email" => $client->getEmail(),
            "password" => $client->getPassword(),
            "telefono" => $client->getTelefono(),
           
        ]);
    }
    
     public function all() {
        
        $connection = DataBase::getConnection();
        $statement = $connection->prepare("SELECT * FROM clientes");
        $statement->execute();

        $result_set = $statement->fetchAll(PDO::FETCH_ASSOC);
        
        $client1 = [];
        foreach ($result_set as $bussines){
            $new_client = new Negocio(
                    $client['name'],
                    $client['tipo'],
                    $client["address"],
                    $client["email"],
                    $client["password"],
                    $client["telefono"],
                    $client["description"]
                    );
            $new_client ->setId($client['id']);
            array_push($client1, $new_client);
        }
        return $client1;
    }
    
    public function find($id) {
        
        $connection = DataBase::getConnection();
        $statement = $connection->prepare("SELECT * FROM clientes WHERE id=:id");
        $statement->execute(["id" => $id]);

        $result_set = $statement->fetchAll(PDO::FETCH_ASSOC);
        
        $cliente1 = [];
        foreach ($result_set as $client){
            $new_bussines = new Negocio(
                    $client['name'],
                    $client["address"],
                    $client["email"],
                    $client["password"],
                    $client["telefono"]
                    );
            $new_client ->setId($client['id']);
            array_push($client1, $new_client);
        }
        return $client1;
    }
    
    public function update($client) {
         $connection = DataBase::getConnection();

        $sql  = "UPDATE clientes ";
        $sql .= "SET name=:name, address=:address, email=:email, password=:password, telefono=:telefono";
        $sql .= "WHERE id=:id";
        
        $statement = $connection->prepare($sql);
        $statement->execute([
            "name"  => $client->getName(),
            "address" => $client->getAddress(),
            "email" => $client->getEmail(),
            "password" => $client->getPassword(),
            "telefono" => $client->getTelefono()
        ]);
    }
    
      public function delete($client) {
        $connection = DataBase::getConnection();
        $statement = $connection->prepare("DELETE FROM clientes WHERE id=:id");
        $statement->execute([
            "id" => $client->getID()
        ]);
    }

    public function mostrarDatos($sql) {
        
    }

}
?>