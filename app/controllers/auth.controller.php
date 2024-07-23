<?php

include_once 'app/views/auth.view.php';
include_once 'app/models/usuarios.model.php';
include_once 'app/helpers/auth.helper.php';


class AuthController{

    private $view;
    private $model;
    private $helper;
    

    function __construct(){
        
        $this->view = new AuthView();
        $this->model = new UsuariosModel();
        $this->helper = new AuthHelper();
        
    } 
        

    function mostrarLogin(){
         
        $this->view->mostrarFormLogin();

    }

    function loginUsuario(){

        $email = $_POST['email'];
        $password = $_POST['password'];

        if (empty($email) || empty($password)) {
            
            $this->view->mostrarFormLogin("Faltan datos obligatorios");
            die();

        }

        $usuario = $this->model->obtenerEmail($email);

        if($usuario && password_verify($password, $usuario->password)){
            
            $this->helper->login($usuario);
            header("Location: " . BASE_URL . 'admin');

        }else{
            
            $this->view->mostrarFormLogin("Datos incorrectos");

        }

    }

    function logOut(){

        $this->helper->logOut();

    }
}

?>