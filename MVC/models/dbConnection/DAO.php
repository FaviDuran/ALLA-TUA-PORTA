<?php

require_once 'conexion.php';

interface DataAccessObject
{
    function all();
    function delete($id);
    function update($entity);
    function create($entity);
    function mostrarDatos($sql);
}