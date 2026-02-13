<?php 
    namespace app\models;

    class Admin {
    //Attributs
        private $idAdmin;
        private $loginAdmin;
        private $mdpAdmin;   
    //Constructeur
        public function __construct() {}
    //Setters
        public function setIdAdmin($id) {
            $this->idAdmin = $id;
        }
        public function setLoginAdmin($login) {
            $this->loginAdmin = $login;
        } 
        public function setMdpAdmin($mdp) {
            $this->mdpAdmin = $mdp;
        }
    //Getters
        public function getIdAdmin() {
            return $this->idAdmin;
        }
        public function getLoginAdmin() {
            return $this->loginAdmin;
        }
        public function getMdpAdmin() {
            return $this->mdpAdmin;
        }
    }

?>