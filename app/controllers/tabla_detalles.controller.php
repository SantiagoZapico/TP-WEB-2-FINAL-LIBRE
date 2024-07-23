<?php

include_once 'app/models/tabla_detalles.model.php';
include_once 'app/views/tabla_detalles.view.php';
include_once 'app/models/tabla_prendas.model.php';
include_once 'app/helpers/auth.helper.php';

class TablaDetallesController{

    private $model;
    private $view;
    private $model2;
    private $helper;


    function __construct(){
        
        $this->model= new TablaDetallesModel();
        $this->view= new TablaDetallesView();
        $this->model2= new TablaPrendasModel();
        $this->helper= new AuthHelper();

    }

    function mostrarTablaDetalles(){

        $this->helper->checkLogged();
        $tabla2= $this->model->ver2();
        $this->view->mostrarTabla2($tabla2);
        
    }

    function mostrarItem($id_item){

        $item= $this->model->verItem($id_item);
        $this->view->mostrarItem($item);


    }

    function agregarDetalles()
    {

        if (!empty($_POST['talle'])) {
            $talle = $_POST['talle'];
        }

        if (!empty($_POST['stock']) || ($_POST['stock'])>= 0) {
            $stock = $_POST['stock'];
        }

        if (!empty($_POST['id_prenda'])) {
            $id_prenda = $_POST['id_prenda'];
        }


        if (!empty($_POST['categoria'])) {
            $categoria = $_POST['categoria'];
        }

        $this->helper->checkLogged();

        $this->model2->tomarIdPrenda();

        $id_detalles = $this->model->insertarDetalles($talle, $stock, $categoria, $id_prenda);

        if ($id_detalles) {
            header("Location: " . BASE_URL . 'admin');
        } else {
            $this->view->mostrarError('No se ha podido insertar la prenda');

            die();
        }
    }

    function editarDetalles($id){

        if (isset($_POST['submit'])) {

            if (!empty($_POST['talleEdit'])) {
                $talleEdit = $_POST['talleEdit'];
            }

            if (!empty($_POST['stockEdit'])) {
                $stockEdit = $_POST['stockEdit'];
            }

            if (!empty($_POST['categoriaEdit'])) {
                $categoriaEdit = $_POST['categoriaEdit'];
            }

            $this->helper->checkLogged();

            $this->model->actualizarDetalles($id, $talleEdit, $stockEdit, $categoriaEdit);
            header("Location: " . BASE_URL . 'admin'); 

        }

        else{

            $this->view->mostrarFormEditDet($id);
        }

    }

    function borrarDetalles($id){

        $this->helper->checkLogged();

        $this->model->eliminarDetalles($id);

        header("Location: " . BASE_URL . 'admin');
    }


}


?>