<?php

require_once 'DAO.php';
require_once 'models/Cliente.php';

class ClienteControllerDAO implements DataAccessObject
{
    public function create($Cliente)
    {
        $connection = DataBase::getConnection();

        $sql  = "INSERT INTO clientes (Nombre_cliente,Direccion_cliente,Correo_cliente,Contraseña,Telefono)";
        $sql .= "VALUES (:Nombre,:Direccion,:Correo,:Contraseña,:Telefono)";

        $statement = $connection->prepare($sql);
        $statement->execute([ 
            "Nombre_Cliente" => $Cliente->getNombre(),
            "Direccion" => $Cliente->getDireccion(),
            "Correo" => $Cliente->getCorreo(),
            "Telefono" => $Cliente->getTelefono()

        ]);
    }

    public function all()
    {
        $connection = DataBase::getConnection();
        $statement = $connection->prepare("SELECT * FROM Clientes");
        $statement->execute();

        $result_set = $statement->fetchAll(PDO::FETCH_ASSOC);

        $Clientes = [];
        foreach ($result_set as $Clientes) {
            $new_Cliente = new Cliente(
                $Clientes['Nombre_cliente'],
                $Clientes['Direccion_cliente'],
                $Clientes['Correo_cliente'],
                $Clientes['Telefono_cliente']
            );
            $new_Cliente->setID($Clientes['id']);
            array_push($Clientes, $new_Cliente);
        }

        return $Clientes;
    }

    public function update($Cliente) {
        $connection = DataBase::getConnection();

        $sql  = "UPDATE Clientes ";
        $sql .= "SET Nombre_cliente=:Nombre_cliente, Direccion_cliente=:Direccion_cliente, Correo_cliente=:Correo_cliente, Contraseña_cliente=:Contraseña_cliente, Telefono_cliente=:Telefono_cliente";
        $sql .= "WHERE Cliente_id=:id";

        $statement = $connection->prepare($sql);
        $statement->execute([
            "Cliente_id" => $Cliente->getID(),
            "Nombre_cliente" => $Cliente->getNombre(),
            "Direccion_cliente" => $Cliente->getDireccion(),
            "Correo_cliente" => $Cliente->getCorreo(),
            "Contraseña_cliente" => $Cliente->getContraseña(),
            "Telefono_cliente" => $Cliente->getTelefono()
        ]);
    }

    public function delete($Cliente) {
        $connection = DataBase::getConnection();
        $statement = $connection->prepare("DELETE FROM Clientes WHERE Cliente_id=:id");
        $statement->execute([
            "Cliente_id" => $Cliente->getID()
        ]);
    }
}