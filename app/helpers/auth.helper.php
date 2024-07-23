<?php

class AuthHelper{

    function __construct()
    {
        if (session_status() != PHP_SESSION_ACTIVE) {
            session_start();
        }
        
    }

    function login($usuario){

        $_SESSION['ID_USUARIO']= $usuario->id;
        $_SESSION['EMAIL_USUARIO']= $usuario->email;

    }

    function checkLogged(){

        if(!isset($_SESSION['ID_USUARIO'])){

            header("Location: " . BASE_URL . 'login');
            die();
        }

    }

    function logOut(){

        session_destroy();
        header("Location: " . BASE_URL . 'home');
        die();
    }

}

?>