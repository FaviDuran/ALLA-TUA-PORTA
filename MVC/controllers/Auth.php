<?php

class Auth
{
    public function afterLogin()
    {
        @session_start();
        if(isset($_SESSION['email']))
        {
            header("Location: ../views/tiendas");
            exit;
        }
    }

    public function needLogin()
    {
    	@session_start();
        if(!isset($_SESSION['email'])) 
        {
            header("Location: ../views/iniciar");
            exit;
        }
    }
}