<?php
class DefaultController{

    public function home(){
        $ravioleManager = new RavioleManager;
        $ravioles = $ravioleManager->selectAll();
        require 'view/home_view.php';
    }
}