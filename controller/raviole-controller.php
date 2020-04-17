<?php
class RavioleController{

    public function addForm(){
        require 'view/insert_form.php';
    }

    public function persistForm(){
        $raviole = new Raviole(null,$_POST['main_ingredient'], $_POST['title'], $_POST['recipe'], null);
        $ravioleManager = new RavioleManager();
        $ravioleManager->insert($raviole);
        header('Location: /ThibaultMariePOO/index.php?controller=default&action=home');
    }

    public function delete($id){
        $ravioleManager = new RavioleManager();
        $ravioleManager->delete($id);
        header('Location: /ThibaultMariePOO/index.php?controller=default&action=home');
    }

    public function updateForm($id){
        // echo('the id gets there : updateForm() in  raviole-controller.php'); ça ça marche 
        $ravioleManager = new RavioleManager();
        $raviole = $ravioleManager->select($id);
        require 'view/update_form.php';
    }

    public function updateRaviole($id){
        $ravioleManager = new RavioleManager();
        $raviole = $ravioleManager->select($id);
        $raviole = new Raviole($id, $_POST['main_ingredient'], $_POST['title'], $_POST['recipe']);
        $ravioleManager->update($raviole);
        header('Location: /ThibaultMariePOO/index.php?controller=default&action=home');
    }
}