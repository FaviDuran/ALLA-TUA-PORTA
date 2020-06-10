<?php
class Cliente{
/*Atributos*/
    
private $id;
private $name;
private $address;
private $email;
private $password;
private $telefono;

function getId() {
    return $this->id;
}

function getName() {
    return $this->name;
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

function setId($id) {
    $this->id = $id;
}

function setName($name) {
    $this->name = $name;
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

}