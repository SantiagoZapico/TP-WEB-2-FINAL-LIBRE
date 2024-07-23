<?php

require_once 'app/controllers/acceso_publico.controller.php';
require_once 'app/controllers/categorias.controller.php';
require_once 'app/controllers/tabla_prendas.controller.php';
require_once 'app/controllers/tabla_detalles.controller.php';
require_once 'app/controllers/auth.controller.php';


// Defino la base URLs para la construccion de links con URLs semánticas
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

// Lee la acción de la página Web

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}
// Acción por defecto si la ruta es errónea
else {
    $action = 'home';
}

// Parsea la acción
$params = explode('/', $action);

switch ($params[0]) {

    case 'home':

        $controller = new AccesoPublicoController();
        $controller2 = new AccesoPublicoController();
        $controller->mostrarTablaPrendas();
        $controller2->mostrarTablaDetalles();

        break;

    case 'login':

        $controller = new AuthController();
        $controller->mostrarLogin();

        break;

    case 'verify':
        $controller = new AuthController();
        $controller->loginUsuario();

        break;

    case 'logout':
        $controller = new AuthController();
        $controller->logOut();

        break;

    case 'admin':

        $controller = new TablaPrendasController();
        $controller2 = new TablaDetallesController();
        $controller->mostrarTablaPrendas();
        $controller2->mostrarTablaDetalles();

        break;

    case 'ver_item':

        $controller = new TablaDetallesController();
        $id_item = $params[1];
        $controller->mostrarItem($id_item);

        break;

    case 'ver_prenda':

        $controller = new TablaPrendasController();
        $id_item = $params[1];
        $controller->mostrarPrenda($id_item);

        break;

    case 'agregar':

        $controller = new TablaPrendasController();
        $controller->agregarPrenda();

        break;

    case 'borrar':

        $controller = new TablaPrendasController();
        $id = $params[1];
        $controller->borrarPrenda($id);

        break;

    case 'editar':

        $controller = new TablaPrendasController();
        $id = $params[1];
        $controller->editarPrenda($id);

        break;

    case 'agregarDetalles':

        $controller = new TablaDetallesController();
        $controller->agregarDetalles();

        break;

    case 'editarDetalles':

        $controller = new TablaDetallesController();
        $id = $params[1];
        $controller->editarDetalles($id);

        break;

    case 'borrarDetalles':

        $controller = new TablaDetallesController();
        $id = $params[1];
        $controller->borrarDetalles($id);

        break;


    case 'filtrarRemeras':
        $controller = new CategoriasController();
        $controller->filtrarRemeras();

        break;

    case 'filtrarPantalones':
        $controller = new CategoriasController();
        $controller->filtrarPantalones();

        break;

    case 'filtrarBuzos':
        $controller = new CategoriasController();
        $controller->filtrarBuzos();

        break;

    default:

        header("HTTP/1.0 404 Not Found");
        echo ('404 Page not found');

        break;
}
