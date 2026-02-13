<?php 
    namespace app\models;

    class Categorie {
    //Attributs
        private $idCategorie;
        private $valCategorie;
    //Constructeur
        public function __construct() {}
    //Setters
        public function setIdCategorie($id) {
            $this->idCategorie = $id;
        }
        public function setValCategorie($val) {
            $this->valCategorie = $val;
        }
    //Getters
        public function getIdCategorie() {
            return $this->idCategorie;
        }
        public function getValCategorie() {
            return $this->valCategorie;
        }
    };
?>