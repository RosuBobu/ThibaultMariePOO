<?php
    class Raviole{
        private $id;
        private $title;
        private $main_ingredient;
        private $recipe;
        private $url;

        public function __construct($id = null, $title, $main_ingredient, $recipe, $url){
            $this->id = $id;
            $this->title = $title;
            $this->main_ingredient = $main_ingredient;
            $this->recipe = $recipe;
            $this->url = $url;
        }

        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function getTitle(){
            return $this->title;
        }

        public function setTitle($title){
            $this->title = $title;
        }

        public function getMainIngredient(){
            return $this->main_ingredient;
        }

        public function setMainIngredient($main_ingredient){
            $this->main_ingredient = $main_ingredient;
        }

        public function getRecipe(){
            return $this->recipe;
        }

        public function setRecipe($recipe){
            $this->recipe = $recipe;
        }

        public function getUrl(){
            return $this->url;
        }

        public function setUrl($url){
            $this->url = $url;
        }

    }

?>    