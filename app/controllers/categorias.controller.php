<?php

include_once 'app/models/categorias.model.php';
include_once 'app/views/categorias.view.php';

class CategoriasController
{

    private $model;
    private $view;

    function __construct()
    {

        $this->model = new CategoriasModel();
        $this->view = new CategoriasView();

    }


    function filtrarRemeras()
    {

        $tablaRemeras= $this->model->verRemeras();
        $this->view->mostrarRemeras($tablaRemeras);
    }

    function filtrarPantalones()
    {

        $tablaPantalones= $this->model->verPantalones();
        $this->view->mostrarPantalones($tablaPantalones);
    }

    function filtrarBuzos()
    {

        $tablaBuzos= $this->model->verBuzos();
        $this->view->mostrarBuzos($tablaBuzos);
    }
}

?>