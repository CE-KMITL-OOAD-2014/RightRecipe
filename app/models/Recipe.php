<?php
    class Recipe{

        private $name;
        private $id;
        private $category;
        private $step;

        function __constructor(){

        }

        function getName(){
            return $this->name;
        }

        function setName($value){
            $this->name=$value;
        }
    }