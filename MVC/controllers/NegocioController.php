<?php

require_once 'Auth.php';
require_once 'models/dbConnection/NegocioDAO.php';

class NegocioControllerDAO
{
    private $auth;
    private $bussinesDAO;
    private $bussines;
    
    public function __construct() {
        $this->auth = new Auth();
        $this->bussinesDAO = new NegocioDAO();        
    }

    public function showAll() {
        $this->bussines = $this->bussinesDAO->all();
        $search = false;
        require_once '';
    }

  
}