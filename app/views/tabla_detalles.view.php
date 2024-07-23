<?php

require_once 'libs/libs/Smarty.class.php';

class TablaDetallesView{

    private $smarty;

    function __construct(){

        $this->smarty= new Smarty();

    }

    function mostrarTabla2($tabla2){

        $this->smarty->assign('tabla2', $tabla2);
        $this->smarty->display('templates/tabla_detalles.tpl');

        

    }

    function mostrarItem($item){

        $this->smarty->assign('item', $item);
        $this->smarty->display('templates/ver_item.tpl');

    }

    function mostrarError($msg){

        $this->smarty->assign('msg', $msg);
        $this->smarty->display('templates/error.tpl');

    }
    
    function mostrarSelect($ver_id){

        $this->smarty->assign('ver_id', $ver_id);
        $this->smarty->display('templates/agregar_detalles.tpl');

    }

    function mostrarFormEditDet($id){
        
        $this->smarty->display('templates/editar_detalles.tpl');

    }

}



?>