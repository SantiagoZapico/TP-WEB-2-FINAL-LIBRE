<?php

require_once 'libs/libs/Smarty.class.php';

class AuthView{

    private $smarty;

    function __construct(){

        $this->smarty= new Smarty();
        $this->smarty->assign('title', "PRADO");

    }

    function mostrarFormLogin($error=null) {
        
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/form_login.tpl');

    }


}

?>