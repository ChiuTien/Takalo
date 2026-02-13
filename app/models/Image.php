<?php 
    namespace app\models;

    class Image {
    //Attributs
        private $idImage;
        private $idObjet;
        private $urlImage;
    //Constructeur
        public function __construct() {}
    //Setters
        public function setIdImage($id) {
            $this->idImage = $id;
        }
        public function setIdObjet($id) {
            $this->idObjet = $id;
        }
        public function setUrlImage($url) {
            $this->urlImage = $url;
        }
    //Getters
        public function getIdImage() {
            return $this->idImage;
        }
        public function getIdObjet() {
            return $this->idObjet;
        }
        public function getUrlImage() {
            return $this->urlImage;
        }
    };
?>