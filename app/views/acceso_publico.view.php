<?php

require_once 'libs/libs/Smarty.class.php';

class AccesoPublicoView{

    private $smarty;

    function __construct(){

        $this->smarty= new Smarty();
        $this->smarty->assign('title', "PRADO");

    }

    function mostrarTablaPrendas($tablaPrendas){

        $this->smarty->assign('tablaPrendas', $tablaPrendas);
        $this->smarty->display('templates/acceso_publico_prendas.tpl');
        
       

    }

    function mostrarTablaDetalles($tablaDetalles){

        $this->smarty->assign('tablaDetalles', $tablaDetalles);
        $this->smarty->display('templates/acceso_publico_detalles.tpl');

    }

}


?>