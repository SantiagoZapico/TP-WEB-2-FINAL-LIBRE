<?php

require_once 'libs/libs/Smarty.class.php';

class CategoriasView{

    private $smarty;

    function __construct(){

        $this->smarty= new Smarty();
        $this->smarty->assign('title', "PRADO");

    }

    function mostrarRemeras($tablaRemeras){

        $this->smarty->assign('tablaRemeras', $tablaRemeras);
        $this->smarty->display('templates/categoria_remeras.tpl');

    }

    function mostrarPantalones($tablaPantalones){

        $this->smarty->assign('tablaPantalones', $tablaPantalones);
        $this->smarty->display('templates/categoria_pantalones.tpl');

    }

    function mostrarBuzos($tablaBuzos){

        $this->smarty->assign('tablaBuzos', $tablaBuzos);
        $this->smarty->display('templates/categoria_buzos.tpl');

    }

    function mostrarError($msg){

        $this->smarty->assign('msg', $msg);
        $this->smarty->display('templates/error.tpl');

    }


}

?>