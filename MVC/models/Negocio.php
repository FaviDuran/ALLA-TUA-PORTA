<?php

class negocio{
/*Atributos*/
private $id;
private $name;
private $tipo;
private $address;
private $email;
private $password;
private $telefono;
private $description;

public function __construct(
        $name,
        $tipo,
        $address,
        $email,
        $password,
        $telefono,
        $description
) {
    $this -> name = $name;
    $this -> tipo = $tipo;
    $this -> address = $address;
    $this -> email = $email;       
    $this -> password = $password;
    $this-> telefono = $telefono;
    $this-> description = $description; 
}
//GETTERS
function getId() {
    return $this->id;
}

function getName() {
    return $this->name;
}

function getTipo() {
    return $this->tipo;
}

function getAddress() {
    return $this->address;
}

function getEmail() {
    return $this->email;
}

function getPassword() {
    return $this->password;
}

function getTelefono() {
    return $this->telefono;
}

function getDescription() {
    return $this->description;
}

//SETTERS
function setId($id) {
    $this->id = $id;
}

function setName($name) {
    $this->name = $name;
}

function setTipo($tipo) {
    $this->tipo = $tipo;
}

function setAddress($address) {
    $this->address = $address;
}

function setEmail($email) {
    $this->email = $email;
}

function setPassword($password) {
    $this->password = $password;
}

function setTelefono($telefono) {
    $this->telefono = $telefono;
}

function setDescription($description) {
    $this->description = $description;
}

}