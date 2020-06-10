<?php
class Conexion{
    static public function conectar(){
        $link = new PDO("mysql:host=localhost;dbname=allatuaporta","root","");
        $link -> exec("set names utf8");
        return $link;
    }
}

class ModeloDatos{
    static public function mdlIngresarDatos($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(documento, nombre) VALUES (:documento, :nombre)");

        foreach ($datos as $value) {
            $stmt->bindParam(":documento", $value["documento"], PDO::PARAM_STR);
            $stmt->bindParam(":nombre", $value["nombre"], PDO::PARAM_STR);
        }

        if ($stmt->execute()) {
            return "ok";
        } else {
            return "error";
        }

        $stmt = null;
    }
}