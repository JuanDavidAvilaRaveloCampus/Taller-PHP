<?php

    class estudiates{
        
        public $name;
        public $sexo;
        public $nota_definitiva;


        // Getters
        public function get_Name(){
            return $this->name;
        }

        public function get_Sex(){
            return $this->sexo;
        }

        public function get_Note(){
            return $this->nota_definitiva;
        }


        // Setters
        public function set_Name($name){
            $this->name = $name;
        }

        public function set_Sex($sexo){
            $this->sexo = $sexo;
        }

        public function set_Note($nota_definitiva){
            $this->nota_definitiva = $nota_definitiva;
        }
    }






?>