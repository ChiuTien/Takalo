<?php 
    namespace app\models;

    class Objet {
    //Attributs
        private $idObjet;
        private $nomObjet;
        private $idCategorie;
        private $idProprietaire;
        private $descriptionObjet;
    //Constructeur
        public function __construct() {}
    //Setters   
        public function setIdObjet($id) {
            $this->idObjet = $id;
        }
        public function setNomObjet($nom) {
            $this->nomObjet = $nom;
        }
        public function setIdCategorie($id) {
            $this->idCategorie = $id;
        }
        public function setIdProprietaire($id) {
            $this->idProprietaire = $id;
        }
        public function setDescriptionObjet($description) {
            $this->descriptionObjet = $description;
        }
    //Getters
        public function getIdObjet() {
            return $this->idObjet;
        }
        public function getNomObjet() {
            return $this->nomObjet;
        }
        public function getIdCategorie() {
            return $this->idCategorie;
        }
        public function getIdProprietaire() {
            return $this->idProprietaire;
        }
        public function getDescriptionObjet() {
            return $this->descriptionObjet;
        }
    };
?>