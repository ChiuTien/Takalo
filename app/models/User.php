<?php 
    namespace app\models;

    class User {
    //Attributs
        private $idUser;
        private $nomUser;
        private $prenomUser;
        private $motDePasseUser;
    //Constructeur
        public function __construct() {}
    //Setters
        public function setIdUser($id) {
            $this->idUser = $id;
        }
        public function setNomUser($nom) {
            $this->nomUser = $nom;
        }
        public function setPrenomUser($prenom) {
            $this->prenomUser = $prenom;
        }
        public function setMdpUser($mdp) {
            $this->motDePasseUser = $mdp;
        }
    //Getters
        public function getIdUser() {
            return $this->idUser;
        }
        public function getNomUser() {
            return $this->nomUser;
        }
        public function getPrenomUser() {
            return $this->prenomUser;
        }
        public function getMdpUser() {
            return $this->motDePasseUser;
        }
    };
?>