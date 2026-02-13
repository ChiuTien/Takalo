<?php 
    namespace app\models;

    class Echange {
    //Attributs
        private $idEchange;
        private $idObjetOffert;
        private $idObjetDemande;
        private $idStatut;
        private $dateEchange;
    //Constructeur
        public function __construct() {}
    //Setters
        public function setIdEchange($id) {
            $this->idEchange = $id;
        }
        public function setIdObjetOffert($id) {
            $this->idObjetOffert = $id;
        }
        public function setIdObjetDemande($id) {
            $this->idObjetDemande = $id;
        }
        public function setIdStatut($id) {
            $this->idStatut = $id;
        }
        public function setDateEchange($date) {
            $this->dateEchange = $date;
        }
    //Getters
        public function getIdEchange() {
            return $this->idEchange;
        }
        public function getIdObjetOffert() {
            return $this->idObjetOffert;
        }
        public function getIdObjetDemande() {
            return $this->idObjetDemande;
        }
        public function getIdStatut() {
            return $this->idStatut;
        }
        public function getDateEchange() {      
            return $this->dateEchange;
        }
    };
?>