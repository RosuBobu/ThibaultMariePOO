<?php
    require 'include.php';

    if($_GET['controller'] === 'default' && $_GET['action'] === 'home'){
        $ravioleController = new DefaultController();
        $ravioleController->home();
    }
    else if($_GET['controller'] === 'raviole' && $_GET['action'] === 'addForm'){
        $ravioleController = new RavioleController();
        $ravioleController->addForm();
    }
    else if($_GET['controller'] === 'raviole' && $_GET['action'] === 'addRaviole'){
        $ravioleController = new RavioleController();
        $ravioleController->persistForm();
    }
    else if($_GET['controller'] === 'raviole' && $_GET['action'] === 'delete' && isset($_GET['id'])){
        $ravioleController = new RavioleController();
        $ravioleController->delete($_GET['id']);
    }
    else if($_GET['controller'] === 'raviole' && $_GET['action'] === 'updateForm' && isset($_GET['id'])){
        $ravioleController = new RavioleController();
        $ravioleController->updateForm($_GET['id']);
    }
    else if($_GET['controller'] === 'raviole' && $_GET['action'] === 'updateRaviole' && isset($_GET['id'])){
        echo('je passe bien dans le routeur update raviole');
        $ravioleController = new RavioleController();
        $ravioleController->updateRaviole($_GET['id']);
    }

    else if($_GET['controller'] === 'raviole' && $_GET['action'] === 'detail' && isset($_GET['id'])){
        $ravioleController = new RavioleController();
        $ravioleController->detail($_GET['id']);
    }

    else{
        throw new Exception('404 your raviole was not found :(', 404);
    }
    
?>