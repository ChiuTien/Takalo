<?php 
    namespace app\models;

    class Statut {
    //Attributs
        private $idStatut;
        private $valStatut;
    //Constructeur
        public function __construct() {}
    //Setters
        public function setIdStatut($id) {
            $this->idStatut = $id;
        }
        public function setValStatut($val) {
            $this->valStatut = $val;
        }
    //Getters
        public function getIdStatut() {
            return $this->idStatut;
        }
        public function getValStatut() {
            return $this->valStatut;
        }
    };
?>