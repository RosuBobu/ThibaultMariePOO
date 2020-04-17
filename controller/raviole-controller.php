<?php
class RavioleController{

    public function addForm(){
        require 'view/insert_form.php';
    }

    public function persistForm(){
        if(isset($_FILES)){
            $url =uniqid().'.'.explode('/',$_FILES['url']['type'])[1];
            move_uploaded_file($_FILES['url']['tmp_name'],'view/assets/uploads/'.$url);
        } else {
            $url = null;
        }
        $raviole = new Raviole(null,$_POST['title'],$_POST['main_ingredient'],$_POST['recipe'], $url);
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
        $ravioleManager = new RavioleManager();
        $raviole = $ravioleManager->select($id);
        require 'view/update_form.php';
    }

    public function updateRaviole($id){
        $ravioleManager = new RavioleManager();
        $raviole = $ravioleManager->select($id);

        
        if(isset($_FILES)){
            $url =uniqid().'.'.explode('/',$_FILES['url']['type'])[1];
            move_uploaded_file($_FILES['url']['tmp_name'],'view/assets/uploads/'.$url);
        } else {
            $url = $raviole->getUrl();
        }


        $raviole = new Raviole($id,$_POST['title'],$_POST['main_ingredient'],$_POST['recipe'], $url);
       
        $ravioleManager->update($raviole);
        header('Location: /ThibaultMariePOO/index.php?controller=default&action=home');
    }

    public function detail($id){
        $ravioleManager = new RavioleManager();
        $raviole = $ravioleManager->select($id);
        require 'view/detail_view.php';
    }
}