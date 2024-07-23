<?php

require_once 'libs/libs/Smarty.class.php';

class TablaPrendasView{

    private $smarty;

    function __construct(){

        $this->smarty= new Smarty();
        $this->smarty->assign('title', "PRADO");

    }

    function mostrarTabla1($tabla){

        $this->smarty->assign('tabla', $tabla);
        $this->smarty->display('templates/tabla_prendas.tpl');

    }

    function mostrarError($msg){

        $this->smarty->assign('msg', $msg);
        $this->smarty->display('templates/error.tpl');

    }

    function mostrarFormEdit($id){
        
        $this->smarty->display('templates/editar_prenda.tpl');

    }

    function mostrarPrenda($item){

        $this->smarty->assign('item', $item);
        $this->smarty->display('templates/ver_prenda.tpl');

    }


}



?>