<?php

include_once 'app/models/tabla_detalles.model.php';
include_once 'app/models/tabla_prendas.model.php';
include_once 'app/views/acceso_publico.view.php';



class AccesoPublicoController
{

    private $model;
    private $model2;
    private $view;

    function __construct()
    {

        $this->model = new TablaPrendasModel();
        $this->model2 = new TablaDetallesModel();
        $this->view = new AccesoPublicoView();
    }

    function mostrarTablaPrendas()
    {
        $tablaPrendas = $this->model->ver();
        $this->view->mostrarTablaPrendas($tablaPrendas);
        
    }

    function mostrarTablaDetalles(){

        $tablaDetalles = $this->model2->ver2();
        $this->view->mostrarTablaDetalles($tablaDetalles);
        
    }
}

?>