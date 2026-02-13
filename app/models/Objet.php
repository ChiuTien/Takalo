<?php 
    namespace app\models;

    class Objet {
    //Attributs
        private $idObjet;
        private $nomObjet;
        private Categorie $categorie;
        private User $proprietaire;
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
        public function setCategorie(Categorie $categorie) {
            $this->categorie = $categorie;
        }
        public function setProprietaire(User $proprietaire) {
            $this->proprietaire = $proprietaire;
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
        public function getCategorie() {
            return $this->categorie;
        }
        public function getProprietaire() {
            return $this->proprietaire;
        }
        public function getDescriptionObjet() {
            return $this->descriptionObjet;
        }
    };
?>