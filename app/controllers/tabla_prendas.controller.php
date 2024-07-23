<?php

include_once 'app/models/tabla_prendas.model.php';
include_once 'app/views/tabla_prendas.view.php';
include_once 'app/views/tabla_detalles.view.php';
include_once 'app/helpers/auth.helper.php';


class TablaPrendasController
{

    private $model;
    private $view;
    private $view2;
    private $helper;


    function __construct()
    {

        $this->model = new TablaPrendasModel();
        $this->view = new TablaPrendasView();
        $this->view2 = new TablaDetallesView();
        $this->helper = new AuthHelper();
    }

    function mostrarTablaPrendas()
    {
        $this->helper->checkLogged();
        $tabla = $this->model->ver();
        $this->view->mostrarTabla1($tabla);
        $ver_id = $this->model->tomarIdPrenda();
        $this->view2->mostrarSelect($ver_id);
    }

    function agregarPrenda()
    {
        $this->helper->checkLogged();

        // Guardo en una variable todos los valores que agarro del formulario de agregar_prenda.tpl

        $prenda = $_POST['prenda'];
        $categoria = $_POST['categoria'];

        if($_POST['costo'] >=0 && $_POST['rebaja'] >= 0){
            $costo = $_POST['costo'];
            $rebaja = $_POST['rebaja'];
        }    

        // Pregunto si los inputs están vacíos para proseguir  
        if (!empty($prenda) && !empty($categoria) && !empty($costo) && !empty($rebaja)) {
            if(!empty($_FILES['imagen']['type'])){
                if ($_FILES['imagen']['type'] == "image/jpg" || $_FILES['imagen']['type'] == "image/jpeg" || $_FILES['imagen']['type'] == "image/png") {
                    $id_prenda = $this->model->insertar($prenda, $categoria, $costo, $rebaja, $_FILES['imagen']);
                } else {
                    $id_prenda = $this->model->insertar($prenda, $categoria, $costo, $rebaja);
                }
    
                // Guardo el id generado en una variable y si existe, redirijo a "admin"
                if ($id_prenda) {
                    header("Location: " . BASE_URL . 'admin');
                } else {
                    $this->view->mostrarError('No se ha podido insertar la prenda');
                    die();
                }
            }else{
                return $this->view->mostrarError('No se subió una imagen');
            }

        } else {
            $this->view->mostrarError('No se añadió el producto. Complete todos los campos por favor.');
        }
    }

    function borrarPrenda($id)
    {
        $this->helper->checkLogged();
        // Paso el id agarrado por el parámetro y lo mando al model para eliminar. Luego redirijo a "admin". 

        $this->model->eliminar($id);

        header("Location: " . BASE_URL . 'admin');
    }

    function editarPrenda($id)
    {

        $this->helper->checkLogged();

        if (isset($_POST['submit'])) {

            if (!empty($_POST['prendaEdit'])) {
                $prendaEdit = $_POST['prendaEdit'];
            }

            if (!empty($_POST['categoriaEdit'])) {
                $categoriaEdit = $_POST['categoriaEdit'];
            }

            if (!empty($_POST['costoEdit'])) {
                $costoEdit = $_POST['costoEdit'];
            }

            if (!empty($_POST['rebajaEdit'])) {
                $rebajaEdit = $_POST['rebajaEdit'];
            }

            $this->model->actualizar($id, $prendaEdit, $categoriaEdit, $costoEdit, $rebajaEdit);
            header("Location: " . BASE_URL . 'admin');
        } else {

            $this->view->mostrarFormEdit($id);
        }
    }

    function mostrarPrenda($id_item)
    {

        $prenda = $this->model->verPrenda($id_item);
        $this->view->mostrarPrenda($prenda);
    }
}
